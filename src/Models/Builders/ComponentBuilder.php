<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use WhatsAppCloudAPILib\Models\Component;

/**
 * Builder for model Component
 *
 * @see Component
 */
class ComponentBuilder
{
    /**
     * @var Component
     */
    private $instance;

    private function __construct(Component $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new component Builder object.
     */
    public static function init(string $type, array $parameters): self
    {
        return new self(new Component($type, $parameters));
    }

    /**
     * Sets sub type field.
     */
    public function subType(?string $value): self
    {
        $this->instance->setSubType($value);
        return $this;
    }

    /**
     * Sets index field.
     */
    public function index(?string $value): self
    {
        $this->instance->setIndex($value);
        return $this;
    }

    /**
     * Initializes a new component object.
     */
    public function build(): Component
    {
        return CoreHelper::clone($this->instance);
    }
}
