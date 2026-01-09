<?php


namespace Drupal\MODULE_NAME\Service;

use Drupal\MODULE_NAME\Model\ExampleModel;

class ExampleService
{

    public function getExampleModel(): ExampleModel
    {
        return new ExampleModel(
            'Hello from ExampleService',
            true
        );
    }

    public function getMessage(): string
    {
        $model = $this->getExampleModel();
        return $model->enabled ? $model->title : 'Disabled';
    }

}
