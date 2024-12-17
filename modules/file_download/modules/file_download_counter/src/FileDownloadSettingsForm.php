<?php

namespace Drupal\file_download_counter;

use Drupal\Core\Block\BlockManagerInterface;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Configure statistics settings for this site.
 */
class FileDownloadSettingsForm extends ConfigFormBase {

  /**
   * The module handler.
   */
  protected ModuleHandlerInterface $moduleHandler;

  /**
   * The block plugin manager.
   */
  protected BlockManagerInterface $blockPluginManager;

  /**
   * Constructs a \Drupal\user\StatisticsSettingsForm object.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The factory for configuration objects.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \Drupal\Core\Block\BlockManagerInterface $block_plugin_manager
   *   The block plugin manager.
   */
  public function __construct(ConfigFactoryInterface $config_factory, ModuleHandlerInterface $module_handler, BlockManagerInterface $block_plugin_manager) {
    parent::__construct($config_factory);

    $this->moduleHandler = $module_handler;
    $this->blockPluginManager = $block_plugin_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('config.factory'),
      $container->get('module_handler'),
      $container->get('plugin.manager.block')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'file_download_counter_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['file_download_counter.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('file_download_counter.settings');

    // Content counter settings.
    $form['content'] = [
      '#type' => 'details',
      '#title' => $this->t('File download counter settings'),
      '#open' => TRUE,
    ];
    $form['content']['file_download_counter_count_downloads'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Count downloads'),
      '#default_value' => $config->get('count_downloads'),
      '#description' => $this->t('Increment a counter each time content is downloaded.'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state): void {
    $this->config('file_download_counter.settings')
      ->set('count_downloads', $form_state->getValue('file_download_counter_count_downloads'))
      ->save();

    // The popular statistics block is dependent on these settings, so clear the
    // block plugin definitions cache.
    if ($this->moduleHandler->moduleExists('block')) {
      $this->blockPluginManager->clearCachedDefinitions();
    }

    parent::submitForm($form, $form_state);
  }

}
