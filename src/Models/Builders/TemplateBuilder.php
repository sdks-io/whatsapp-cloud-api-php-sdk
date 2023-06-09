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
use WhatsAppCloudAPILib\Models\Template;

/**
 * Builder for model Template
 *
 * @see Template
 */
class TemplateBuilder
{
    /**
     * @var Template
     */
    private $instance;

    private function __construct(Template $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new template Builder object.
     */
    public static function init(string $name, Language $language): self
    {
        return new self(new Template($name, $language));
    }

    /**
     * Sets components field.
     */
    public function components(?array $value): self
    {
        $this->instance->setComponents($value);
        return $this;
    }

    /**
     * Initializes a new template object.
     */
    public function build(): Template
    {
        return CoreHelper::clone($this->instance);
    }
}
