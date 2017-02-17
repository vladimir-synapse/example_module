<?php

namespace Drupal\example\Form; // CHANGE

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;


/**
 * Implements the form controller.
 */
class Settings extends ConfigFormBase {

  public function getFormId() {
    return 'example_settings'; // CHANGE
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['example.settings']; // CHANGE
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('example.settings'); // CHANGE


    $form['general'] = [
      '#type' => 'details',
      '#title' => $this->t('General settings'),
      '#open' => TRUE,
    ];


    $form['general']['example_field'] = [
      '#title' => $this->t('Example field'),
      '#default_value' => $config->get('example-field'),
      '#required' => true,
      '#type' => 'textfield',
      '#description' => $this->t('Example field'),
    ];

    $form['actions'] = [
      '#type' => 'actions',
    ];

    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Применить настройки'),
    ];

    return $form;
  }



  /**
   * Implements form validation.
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

  }

  /**
   * Implements a form submit handler.
   */
  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->config('example.settings'); // CHANGE

    $config
      ->set('example-field', $form_state->getValue('example_field'))
      ->save();
  }

}
