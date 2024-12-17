<?php

declare(strict_types=1);

namespace Drupal\Tests\cp2clip\FunctionalJavascript;

use Drupal\Core\Test\AssertMailTrait;
use Drupal\FunctionalJavascriptTests\WebDriverTestBase;

/**
 * Tests the cp2clip module.
 *
 * @group user
 */
abstract class Cp2clipTestBase extends WebDriverTestBase {
  use Cp2clipTestBaseTrait;
  use AssertMailTrait {
    getMails as drupalGetMails;
  }

  /**
   * WebAssert object.
   *
   * @var \Drupal\Tests\WebAssert
   */
  protected $webAssert;

  /**
   * DocumentElement object.
   *
   * @var \Behat\Mink\Element\DocumentElement
   */
  protected $page;

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['cp2clip', 'node', 'filter'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * A user with authenticated permissions.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $user;
  /**
   * The user id.
   *
   * @var uid
   */
  protected $uid;
  /**
   * The username.
   *
   * @var username
   */
  protected $username;
  /**
   * Name of the class whose test is run.
   *
   * @var class
   */
  protected $class;
  /**
   * Verbose variable defined in phpunit.xml to print extra details.
   *
   * @var verbose
   */
  protected $verbose = FALSE;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->user = $this->drupalCreateUser([]);
    $this->class = $this->getClass();
    $this->uid = intval($this->user->id());
    $this->username = $this->user->getAccountName();
    $this->verbose = $GLOBALS['verbose'];
    $this->getSession()->getDriver()->maximizeWindow();
    $this->drupalLogin($this->user);

    $this->webAssert = $this->assertSession();
    $this->page = $this->getSession()->getPage();
  }

}
