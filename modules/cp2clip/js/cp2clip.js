(function($) {
  /**
   * Append a copy button to all elements that have a class "cp-to-clip"
   * and add an onclick event to the element that would copy the text
   * to the clipboard.
   * When the text or copy button is clicked the innerText of the block
   * element, viz. the one with the class "cp-to-clip" will be 
   * copied to the clipboard.
   */
  const elementsToCopy = document.querySelectorAll(".cp-to-clip");
  elementsToCopy.forEach(function(element) {
    element.setAttribute('title', 'Click to copy to Clipboard.');
    const elemCopyButton = document.createElement("div");
    elemCopyButton.setAttribute('class', 'copy_to_clipboard');
    elemCopyButton.setAttribute('title', 'Click to Copy.');
    element.addEventListener('click', async () => {
      event.preventDefault();
      try {
        const parentElem = elemCopyButton.parentElement;
        await navigator.clipboard.writeText(parentElem.textContent.trim());
        element_class = element.getAttribute('class');
        btn_class = elemCopyButton.getAttribute('class');
        elemCopyButton.setAttribute('title', 'Copied!');
        element.setAttribute('title', 'Copied!');
        element.setAttribute('class', element_class + ' copied');
        elemCopyButton.setAttribute('class', btn_class + ' copied');
        resetButtons(element);
      } catch (error) {
        console.error("Failed to copy to clipboard:", error);
      }
    });
    element.appendChild(elemCopyButton);
  });
  /*
   * Resets the other copy text instances on the page, thus highlighting
   * the copied text.
   */
  function resetButtons(clicked_element) {
    const elementsToCopy = document.querySelectorAll(".cp-to-clip");
    elementsToCopy.forEach(function(element) {
      if (clicked_element != element) {
        element.setAttribute('title', 'Click to copy to Clipboard.');
        element_class = element.getAttribute('class').replace('copied', '');
        element.setAttribute('class', element_class);
        const elemCopyButton = element.querySelector('.copy_to_clipboard');
        elemCopyButton.setAttribute('title', 'Click to Copy.');
        btn_class = elemCopyButton.getAttribute('class').replace('copied', '');
        elemCopyButton.setAttribute('class', btn_class);
      }
    });

  }
})();
