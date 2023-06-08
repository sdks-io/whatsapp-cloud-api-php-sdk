<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use WhatsAppCloudAPILib\Models\EmailObject;

/**
 * Builder for model EmailObject
 *
 * @see EmailObject
 */
class EmailObjectBuilder
{
    /**
     * @var EmailObject
     */
    private $instance;

    private function __construct(EmailObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new email object Builder object.
     */
    public static function init(): self
    {
        return new self(new EmailObject());
    }

    /**
     * Sets email field.
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Sets type field.
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Initializes a new email object object.
     */
    public function build(): EmailObject
    {
        return CoreHelper::clone($this->instance);
    }
}