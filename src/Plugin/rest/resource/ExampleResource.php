<?php


namespace Drupal\MODULE_NAME\Plugin\rest\resource;

use Drupal\rest\ResourceResponse;
use Drupal\rest\Plugin\ResourceBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\MODULE_NAME\Service\ExampleService;

/**
 * @RestResource(
 *   id = "module_name_example_resource",
 *   label = @Translation("Example REST Resource"),
 *   uri_paths = {
 *     "canonical" = "/api/example"
 *   }
 * )
 */
class ExampleResource extends ResourceBase
{

    public function __construct(
        array                    $configuration,
                                 $plugin_id,
                                 $plugin_definition,
        protected ExampleService $exampleService
    )
    {
        parent::__construct($configuration, $plugin_id, $plugin_definition);
    }

    public static function create(
        ContainerInterface $container,
        array              $configuration,
                           $plugin_id,
                           $plugin_definition
    ): static
    {
        return new static(
            $configuration,
            $plugin_id,
            $plugin_definition,
            $container->get('MODULE_NAME.example_service')
        );
    }

    /**
     * Responds to GET requests.
     */
    public function get(): ResourceResponse
    {
        $model = $this->exampleService->getExampleModel();

        return new ResourceResponse([
            'title' => $model->title,
            'enabled' => $model->enabled,
        ]);
    }

}
