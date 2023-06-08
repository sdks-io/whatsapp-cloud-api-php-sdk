<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use WhatsAppCloudAPILib\Models\Text;

/**
 * Builder for model Text
 *
 * @see Text
 */
class TextBuilder
{
    /**
     * @var Text
     */
    private $instance;

    private function __construct(Text $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new text Builder object.
     */
    public static function init(string $body): self
    {
        return new self(new Text($body));
    }

    /**
     * Sets preview url field.
     */
    public function previewUrl(?bool $value): self
    {
        $this->instance->setPreviewUrl($value);
        return $this;
    }

    /**
     * Initializes a new text object.
     */
    public function build(): Text
    {
        return CoreHelper::clone($this->instance);
    }
}