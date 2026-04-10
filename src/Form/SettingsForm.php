<?php

declare(strict_types=1);

namespace Drupal\MODULE_NAME\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\htl_core\Form\HtlSettingsFormBase;

/**
 * Settings form for MODULE_NAME.
 *
 * Add fields in buildSettingsForm() and save them in submitSettingsForm().
 * Use $this->settings()->get('key') to read the current config value.
 */
final class SettingsForm extends HtlSettingsFormBase
{
    public function getFormId(): string
    {
        return 'MODULE_NAME_settings';
    }

    protected function getConfigName(): string
    {
        return 'MODULE_NAME.settings';
    }

    protected function buildSettingsForm(array $form, FormStateInterface $form_state): array
    {
        // Add your settings fields here.
        //
        // Example:
        // $form['api_url'] = [
        //   '#type'          => 'textfield',
        //   '#title'         => $this->t('API URL'),
        //   '#default_value' => $this->settings()->get('api_url'),
        //   '#required'      => TRUE,
        // ];

        return $form;
    }

    protected function submitSettingsForm(array &$form, FormStateInterface $form_state): void
    {
        // Save your config values here.
        //
        // Example:
        // $this->settings()
        //   ->set('api_url', $form_state->getValue('api_url'))
        //   ->save();
    }
}
