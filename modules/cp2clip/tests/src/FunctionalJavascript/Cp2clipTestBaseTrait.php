<?php

namespace Drupal\Tests\cp2clip\FunctionalJavascript;

/**
 * Trait used by the Cp2clipTestBase class.
 */
trait Cp2clipTestBaseTrait {

  /**
   * Get the class name.
   */
  public function getClass() {

    $str_arr = preg_split('/\\\/', get_class($this));
    $class = '';
    if (is_array($str_arr)) {
      $class = end($str_arr);
    }
    return $class;

  }

}
