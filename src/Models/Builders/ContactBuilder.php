<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use WhatsAppCloudAPILib\Models\Contact;
use WhatsAppCloudAPILib\Models\Name;
use WhatsAppCloudAPILib\Models\Org;

/**
 * Builder for model Contact
 *
 * @see Contact
 */
class ContactBuilder
{
    /**
     * @var Contact
     */
    private $instance;

    private function __construct(Contact $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new contact Builder object.
     */
    public static function init(Name $name): self
    {
        return new self(new Contact($name));
    }

    /**
     * Sets addresses field.
     */
    public function addresses(?array $value): self
    {
        $this->instance->setAddresses($value);
        return $this;
    }

    /**
     * Sets birthday field.
     */
    public function birthday(?string $value): self
    {
        $this->instance->setBirthday($value);
        return $this;
    }

    /**
     * Sets emails field.
     */
    public function emails(?array $value): self
    {
        $this->instance->setEmails($value);
        return $this;
    }

    /**
     * Sets org field.
     */
    public function org(?Org $value): self
    {
        $this->instance->setOrg($value);
        return $this;
    }

    /**
     * Sets phones field.
     */
    public function phones(?array $value): self
    {
        $this->instance->setPhones($value);
        return $this;
    }

    /**
     * Sets urls field.
     */
    public function urls(?array $value): self
    {
        $this->instance->setUrls($value);
        return $this;
    }

    /**
     * Initializes a new contact object.
     */
    public function build(): Contact
    {
        return CoreHelper::clone($this->instance);
    }
}
