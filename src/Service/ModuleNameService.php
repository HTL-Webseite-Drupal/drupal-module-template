<?php

declare(strict_types=1);

namespace Drupal\MODULE_NAME\Service;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\htl_core\Trait\HtlLoggerTrait;

/**
 * Main service for MODULE_NAME.
 *
 * Use HtlLoggerTrait for one-liner logging:
 *   $this->htlInfo('MODULE_NAME', 'Something happened.');
 *   $this->htlError('MODULE_NAME', 'Something failed.', ['key' => $value]);
 */
final class ModuleNameService
{
    use HtlLoggerTrait;

    public function __construct(
        private readonly ConfigFactoryInterface $configFactory,
    ) {}

    /**
     * Returns the current module settings as an array.
     */
    public function getSettings(): array
    {
        return $this->configFactory->get('MODULE_NAME.settings')->get() ?? [];
    }
}
