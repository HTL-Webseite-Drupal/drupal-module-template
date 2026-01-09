<?php

namespace Drupal\MODULE_NAME\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\MODULE_NAME\Service\ExampleService;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ExampleController extends ControllerBase {

    public function __construct(
        protected ExampleService $exampleService
    ) {}

    public static function create(ContainerInterface $container): static {
        return new static(
            $container->get('MODULE_NAME.example_service')
        );
    }

    public function page(): array {
        $model = $this->exampleService->getExampleModel();

        return [
            '#theme' => 'example_template',
            '#attached' => [
                'library' => [
                    'MODULE_NAME/example_ajax',
                ],
            ],
            '#title' => $model->title,
            '#enabled' => $model->enabled,
        ];
    }

}
