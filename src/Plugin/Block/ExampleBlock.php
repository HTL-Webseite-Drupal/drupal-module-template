<?php


namespace Drupal\MODULE_NAME\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\MODULE_NAME\Service\ExampleService;

/**
 * @Block(
 *   id = "module_name_example_block",
 *   admin_label = @Translation("Example Block")
 * )
 */
class ExampleBlock extends BlockBase implements ContainerFactoryPluginInterface
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

    public function build(): array
    {
        return [
            '#markup' => $this->exampleService->getMessage(),
        ];
    }

}
