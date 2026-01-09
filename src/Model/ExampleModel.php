<?php


namespace Drupal\MODULE_NAME\Model;

class ExampleModel
{

    public function __construct(
        public readonly string $title,
        public readonly bool   $enabled,
    )
    {
    }

}
