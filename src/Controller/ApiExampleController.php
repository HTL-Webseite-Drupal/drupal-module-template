<?php

namespace Drupal\MODULE_NAME\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\MODULE_NAME\Service\ExampleService;

class ApiExampleController extends ControllerBase
{

    public function __construct(
        protected ExampleService $exampleService
    )
    {
    }

    public static function create(ContainerInterface $container): static
    {
        return new static(
            $container->get('MODULE_NAME.example_service')
        );
    }

    public function handle(): JsonResponse
    {
        $model = $this->exampleService->getExampleModel();

        return new JsonResponse([
            'title' => $model->title,
            'enabled' => $model->enabled,
        ]);
    }

}
