<?php

declare(strict_types=1);

namespace Drupal\Tests\cp2clip\FunctionalJavascript;

use Drupal\filter\Entity\FilterFormat;

/**
 * Tests if the cp2clip test works by the following.
 *
 * 1. Creating an article with some text enclosed by a div with
 * class "cp-to-clipbrd"
 * 2. Checking if the copy button exists.
 * 3. Clicking the copy button.
 * 4. Asserting that the clipboard has save the same text that is in the
 * article.
 *
 * @group user
 */
class Cp2clipTest extends Cp2clipTestBase {

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    print <<<END
\n__________________________________Cp2clip Test__________________________________
END;
    parent::setUp();
  }

  /**
   * Tests if the JS creates the copy button which changes text while clicked.
   *
   * 1. Creating an article with some text enclosed by a div with
   * class "cp-to-clipbrd"
   * 2. Checking if the copy button exists.
   * 3. Clicking the copy button.
   * 4. Asserting that the copy button indicates that the
   *    the text was copied by changing the button text to Copied!
   */
  public function testScriptCreatesCopyButton() {

    $function = __FUNCTION__;
    print <<<END
\n----------------------------------------------------------------------
   {$this->class}::{$function} (1/2)
END;
    if ($this->verbose) {
      print <<<END
    Tests if the JS creates the copy button and the button changes text while clicked:
    1. Creating an article with some text enclosed by a div with
    class "cp-to-clipbrd"
    2. Checking if the copy button exists.
    3. Clicking the copy button.
    4. Asserting that the copy button indicates that the
       the text was copied by changing the button text to Copied!
END;
    }
    print <<<END
\n----------------------------------------------------------------------\n
END;
    $text = bin2hex(random_bytes(128));
    $this->drupalCreateContentType([
      'type' => 'article',
      'name' => 'New Article',
    ]);
    $full_html_format = FilterFormat::create([
      'format' => 'full_html',
      'name' => 'Full HTML',
      'filters' => [],
    ]);
    $full_html_format->save();

    // Create a new node object.
    $node = $this->drupalCreateNode([
      'type' => 'article',
      'title' => 'Test',
      'body' => [
        'value' => '<div class="cp-to-clip">' . $text . '</div>
        <button id="copy-from-clip">Copy from clipboard</button>
        <div id="text_from_clipboard"></div>',
        'format' => 'full_html',
      ],
    ]);

    $nid = $node->id();
    $path = \Drupal::service('path_alias.manager')->getAliasByPath('/node/' . $nid);
    $this->drupalGet($path);
    $this->assertSession()->waitForElementVisible('css', '.copy_to_clipboard', 10000);
    $button_elt = $this->page->find('css', '.cp-to-clip');
    $button_elt->click();
    $button_elt_after = $this->page->find('css', '.cp-to-clip');
    $this->assertEquals('Copied!', $button_elt_after->getAttribute('title'));
  }

  /**
   * Test to verify if the copied content is same as the clipboard content.
   *
   * 1. Creating an article with some text enclosed by a div with
   * class "cp-to-clipbrd"
   * 2. Checking if the copy button exists.
   * 3. Clicking the copy button.
   * 4. Asserting that the clipboard has saved the same text
   * that is in the article.
   */
  public function testCopiedContentMatchesClipboardContent() {
    $function = __FUNCTION__;
    print <<<END
\n----------------------------------------------------------------------
   {$this->class}::{$function} (2/2)
END;
    if ($this->verbose) {
      print <<<END
    Test to verify if the copied content is same as the clipboard content:
    1. Creating an article with some text enclosed by a div with
    class "cp-to-clipbrd"
    2. Checking if the copy button exists.
    3. Clicking the copy button.
    4. Asserting that the clipboard has saved the same text
    that is in the article.
END;
    }
    print <<<END
\n----------------------------------------------------------------------\n
END;
    $text = bin2hex(random_bytes(128));
    $script = <<<END
<script>
const copy_from_clip = document.querySelector('#copy-from-clip');

copy_from_clip.addEventListener('click', async () => {
   var text_from_clip='';
   try {
     text_from_clip = await navigator.clipboard.readText();
     console.log(text_from_clip);
     //document.querySelector('#text-from-clipboard').innerHTML += text_from_clip;
   } catch (error) {
     console.log('Failed to read clipboard');
   }
   //add the text to a new div element
   const currentDiv = document.getElementById('#text_from_clipboard');
   const newDiv = document.createElement("div");
   newDiv.setAttribute('id', 'text-from-clipboard');
   const newContent = document.createTextNode(text_from_clip);
   newDiv.appendChild(newContent);
   document.body.insertBefore(newDiv, currentDiv);
});
</script>
END;
    $this->drupalCreateContentType([
      'type' => 'article',
      'name' => 'New Article',
    ]);
    $full_html_format = FilterFormat::create([
      'format' => 'full_html',
      'name' => 'Full HTML',
      'filters' => [],
    ]);
    $full_html_format->save();

    // Create a new node object.
    $node = $this->drupalCreateNode([
      'type' => 'article',
      'title' => 'Test',
      'body' => [
        'value' => '<div class="cp-to-clip">' . $text . '</div>
        <button id="copy-from-clip">Copy from clipboard</button>
        <div id="text_from_clipboard"></div>
        ' . $script,
        'format' => 'full_html',
      ],
    ]);

    $nid = $node->id();
    $path = \Drupal::service('path_alias.manager')->getAliasByPath('/node/' . $nid);
    $this->drupalGet($path);
    $this->assertSession()->waitForElementVisible('css', '.copy_to_clipboard', 10000);
    $text_elt = $this->page->find('css', '.cp-to-clip');
    $text_elt->click();
    $text_elt_after = $this->page->find('css', '.cp-to-clip');
    $this->assertEquals('Copied!', $text_elt_after->getAttribute('title'));

    /*
     * Click the "Copy from clipboard" button to trigger the JS script
     * that will read from the clipboard and paste it to the div with id
     * "text-from-clipboard"
     */
    $this->page->find('css', '#copy-from-clip')->click();
    $this->assertSession()->waitForElementVisible('css', '#text-from-clipboard', 100000);
    $copied_text = $this->page->find('css', '#text-from-clipboard')->getText();
    $this->assertEquals($text, $copied_text);
  }

}
