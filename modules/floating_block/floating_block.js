/**
 * Provides the ability to fix a html block to a position on the page when the
 * browser is scrolled.
 */
(function ($, Drupal, window, document) {
  Drupal.blockFloatStack = function () {
    if (typeof Drupal.blockFloatStack.blocks === 'undefined') {
      Drupal.blockFloatStack.blocks = [];
    }
    return Drupal.blockFloatStack.blocks;
  };

  /**
   * Builds a div element with the aria-live attribute and attaches it
   * to the DOM.
   */
  Drupal.behaviors.floating_block = {
    attach(context, settings) {
      settings = settings.floatingBlock.blocks;

      // If this behavior is being called as part of processing an ajax
      // callback.
      if (typeof context.parent === 'function') {
        context = context.parent();
      }

      // Cycle through all of the blocks we want to float.
      $.each(settings, function (id, setting) {
        const { selector } = setting;

        // The format of a select is [float]|[container] where:
        // [float] is the jQuery selector of thing you want to stay on screen
        // [container] is the jQuery selector of container that defines a
        // boundary not to float outside of.
        $(`${selector.toString()}:not(.blockFloat-processed)`, context).each(
          function (j, block) {
            // Store information about the block to float.
            const blockInfo = [];
            blockInfo.original_css = [];
            blockInfo.original_css.left = Drupal.blockFloatCleanCssValue(
              window.getComputedStyle(block).left,
            );
            blockInfo.original_css.top = Drupal.blockFloatCleanCssValue(
              window.getComputedStyle(block).top,
            );
            blockInfo.original_css.position =
              window.getComputedStyle(block).position;
            blockInfo.floating = false;
            blockInfo.reset = true;
            blockInfo.original_identifier = `blockFloat-${
              Drupal.blockFloatStack().length
            }`;

            // Store the selector for the container if it exists.
            if (
              setting.container &&
              $(setting.container.toString()).length > 0
            ) {
              blockInfo.container = setting.container;
            }

            if (setting.padding_top) {
              blockInfo.padding_top = setting.padding_top;
            } else {
              blockInfo.padding_top = 0;
            }

            if (setting.padding_bottom) {
              blockInfo.padding_bottom = setting.padding_bottom;
            } else {
              blockInfo.padding_bottom = 0;
            }

            // Fix the width of the block as often a block will be 100% of it's
            // container. This ensures that when it's floated it will keep it's
            // original width. There is no point using .css('width') as this
            // will return the computed value so we might as well just set it.
            $(block).width($(block).width());

            // Add class to block to indicate that we're done and give
            // Drupal.blockFloatTracker a certain way to identify the block.
            $(block).addClass(
              `blockFloat-processed ${blockInfo.original_identifier}`,
            );

            // If the page loaded has already been scrolled calling
            // Drupal.blockFloatTracker will float the block if necessary.
            Drupal.blockFloatTracker(blockInfo);

            // Store the block in the floating_blocks array.
            Drupal.blockFloatStack().push(blockInfo);
          },
        );
      });
    },
  };

  /**
   * Function that calculates whether or not the block should be floated.
   *
   * @param {Array} blockInfo
   *   Metadata about the floating block, such as the original position of the
   *   block before it went floating and configured options for the block.
   */
  Drupal.blockFloatTracker = function (blockInfo) {
    // Save positioning data.
    const scrollHeight =
      document.documentElement.scrollHeight || document.body.scrollHeight;
    const block = $(`.${blockInfo.original_identifier}`);
    if (block.length === 0) {
      // The floated block must have been removed from the page - do nothing.
      return;
    }

    // (Re)calculate some values if necessary.
    if (blockInfo.scrollHeight !== scrollHeight || blockInfo.reset) {
      if (blockInfo.reset) {
        // Reset block so we can calculate new offset.
        Drupal.blockFloatResetPosition(block, blockInfo);
        blockInfo.original_offset = $(block).offset();

        // Reset completed - set value so we don't do unnecessary resets.
        blockInfo.reset = false;
      }

      // Save the scrollHeight - if this changes we will need to recalculate.
      blockInfo.scrollHeight = scrollHeight;
      // The minimum offset is always defined by the blocks starting position.
      blockInfo.minOffset =
        blockInfo.original_offset.top - blockInfo.padding_top;

      // Calculate the maxOffset which depends on whether or not a container is
      // defined. Otherwise use the scrollHeight.
      if (blockInfo.container) {
        blockInfo.maxOffset =
          $(blockInfo.container).height() +
          $(blockInfo.container).offset().top -
          blockInfo.padding_bottom;
      } else {
        blockInfo.maxOffset = scrollHeight;
      }
    }

    // Check if window has the minimal width.
    let minWidthConditionMet = true;
    if (typeof drupalSettings.floatingBlock.min_width !== 'undefined') {
      if (window.innerWidth < drupalSettings.floatingBlock.min_width) {
        minWidthConditionMet = false;
      }
    }

    // Track positioning relative to the viewport and set position.
    const vScroll =
      document.documentElement.scrollTop || document.body.scrollTop;
    if (vScroll > blockInfo.minOffset && minWidthConditionMet) {
      let topPosition = blockInfo.padding_top;
      // Block height can change if there a collapsible fields etc... inside the
      // block so recalculate every time we are floating the block.
      const blockHeight = block.height();
      // Don't let the bottom of the block go beneath maxOffset.
      if (vScroll + blockHeight > blockInfo.maxOffset) {
        // At this point topPosition will become a negative number to keep the
        // block from going out of the defined container.
        topPosition = blockInfo.maxOffset - vScroll - blockHeight;
      }

      block
        .css({
          left: `${blockInfo.original_offset.left}px`,
          position: 'fixed',
          top: `${topPosition}px`,
        })
        .addClass('floating-block-active');

      blockInfo.floating = true;
    } else {
      // Put the block back in its original position.
      Drupal.blockFloatResetPosition(block, blockInfo);
    }
  };

  /**
   * Resets the position of a floated block back to non floated position.
   *
   * @param {object} block
   *   The HTML element that is configured to float.
   * @param {array} blockInfo
   *   Metadata about the floating block, such as the original position of the
   *   block before it went floating and configured options for the block.
   */
  Drupal.blockFloatResetPosition = function (block, blockInfo) {
    if (blockInfo.floating) {
      block
        .css({
          left: blockInfo.original_css.left,
          position: blockInfo.original_css.position,
          top: blockInfo.original_css.top,
        })
        .removeClass('floating-block-active');
      blockInfo.floating = false;
    }
  };

  /**
   * Sets value to a blank string in case it is 0px.
   *
   * If the css value is 0px for top and left then it is not actually set using
   * CSS - this will be the computed value. Setting to a blank string will
   * ensure that when Drupal.blockFloatResetPosition is called these css value
   * will be unset.
   *
   * @param {string} cssValue
   *   The value to clean.
   *
   * @return {string}
   *   The cleaned css value.
   */
  Drupal.blockFloatCleanCssValue = function (cssValue) {
    if (cssValue === '0px') {
      cssValue = '';
    }
    return cssValue;
  };

  /**
   * Callback to be added to the scroll event. Each time the user scrolls this
   * function will be called.
   */
  Drupal.blockFloatOnScroll = function () {
    $(Drupal.blockFloatStack()).each(function () {
      Drupal.blockFloatTracker(this);
    });
  };

  /**
   * Callback to be added to the resize event. Each time the user resizes the
   * window, this function will be called. A timeout is used to prevent
   * this function from causing a slow down during resizing.
   */
  Drupal.blockFloatWindowResize = function () {
    if (typeof Drupal.blockFloatWindowResize.timer === 'undefined') {
      Drupal.blockFloatWindowResize.timer = false;
    }
    // Ensure minimum time between adjustments.
    if (Drupal.blockFloatWindowResize.timer) {
      return;
    }
    Drupal.blockFloatWindowResize.timer = setTimeout(function () {
      $(Drupal.blockFloatStack()).each(function () {
        this.reset = true;
        Drupal.blockFloatTracker(this);
      });
      // Reset timer.
      Drupal.blockFloatWindowResize.timer = false;
    }, 250);
  };

  /**
   * Attach callbacks to resize and scroll events. Add a class to the body to
   * prevent doing this multiple times.
   */
  if (!$('body').hasClass('blockFloat-processed')) {
    $('body').addClass('blockFloat-processed');
    $(window).scroll(Drupal.blockFloatOnScroll);
    $(document.documentElement).scroll(Drupal.blockFloatOnScroll);
    $(window).resize(Drupal.blockFloatWindowResize);
  }
})(jQuery, Drupal, window, document);
