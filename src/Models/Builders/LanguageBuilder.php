<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use WhatsAppCloudAPILib\Models\Language;

/**
 * Builder for model Language
 *
 * @see Language
 */
class LanguageBuilder
{
    /**
     * @var Language
     */
    private $instance;

    private function __construct(Language $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new language Builder object.
     */
    public static function init(string $code): self
    {
        return new self(new Language($code));
    }

    /**
     * Sets policy field.
     */
    public function policy(?string $value): self
    {
        $this->instance->setPolicy($value);
        return $this;
    }

    /**
     * Initializes a new language object.
     */
    public function build(): Language
    {
        return CoreHelper::clone($this->instance);
    }
}
