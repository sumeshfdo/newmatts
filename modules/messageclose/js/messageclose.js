((Drupal, once) => {
  'use strict';

  /**
   * Adds a close button to the message.
   *
   * @param {object} message
   *   The message object.
   */
  const closeMessage = (message) => {
    const messageContainer = message.querySelector(
      '.messages',
    );
    const theKid = document.createElement("a");
    theKid.setAttribute('href', "#");
    theKid.classList.add('messageclose');
    theKid.setAttribute('title', Drupal.t('Close'));
    theKid.innerHTML  = '&times;';
    message.insertBefore(theKid, message.firstChild);

    theKid.addEventListener('click', () => {
      fadeOutEffect(message);
      // message.classList.add('hidden');
    });
  };

  /**
   * Fade-out effect to element.
   *
   * @param {object} fadeTarget
   *   The fade target.
   */
  const fadeOutEffect = (fadeTarget) => {
    var fadeEffect = setInterval(function () {
      if (!fadeTarget.style.opacity) {
        fadeTarget.style.opacity = 1;
      }
      if (fadeTarget.style.opacity > 0) {
        fadeTarget.style.opacity -= 0.1;
      } else {
        clearInterval(fadeEffect);
        fadeTarget.classList.add('hidden');
      }
    }, 20);
  };



  /**
   * Get messages from context.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches the messageclose button behavior for messages.
   */
  Drupal.behaviors.messageclose = {
    attach(context) {
      once('messageclose', '.messages', context).forEach(
        closeMessage,
      );
    },
  };
})(Drupal, once);
