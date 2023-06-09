<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use WhatsAppCloudAPILib\Models\Currency;

/**
 * Builder for model Currency
 *
 * @see Currency
 */
class CurrencyBuilder
{
    /**
     * @var Currency
     */
    private $instance;

    private function __construct(Currency $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new currency Builder object.
     */
    public static function init(string $fallbackValue, string $code, int $amount1000): self
    {
        return new self(new Currency($fallbackValue, $code, $amount1000));
    }

    /**
     * Initializes a new currency object.
     */
    public function build(): Currency
    {
        return CoreHelper::clone($this->instance);
    }
}
