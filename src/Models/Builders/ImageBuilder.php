<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use WhatsAppCloudAPILib\Models\Image;

/**
 * Builder for model Image
 *
 * @see Image
 */
class ImageBuilder
{
    /**
     * @var Image
     */
    private $instance;

    private function __construct(Image $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new image Builder object.
     */
    public static function init(): self
    {
        return new self(new Image());
    }

    /**
     * Sets id field.
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets link field.
     */
    public function link(?string $value): self
    {
        $this->instance->setLink($value);
        return $this;
    }

    /**
     * Sets caption field.
     */
    public function caption(?string $value): self
    {
        $this->instance->setCaption($value);
        return $this;
    }

    /**
     * Initializes a new image object.
     */
    public function build(): Image
    {
        return CoreHelper::clone($this->instance);
    }
}