<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use WhatsAppCloudAPILib\Models\ResponseContact;

/**
 * Builder for model ResponseContact
 *
 * @see ResponseContact
 */
class ResponseContactBuilder
{
    /**
     * @var ResponseContact
     */
    private $instance;

    private function __construct(ResponseContact $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response contact Builder object.
     */
    public static function init(string $input, string $waId): self
    {
        return new self(new ResponseContact($input, $waId));
    }

    /**
     * Initializes a new response contact object.
     */
    public function build(): ResponseContact
    {
        return CoreHelper::clone($this->instance);
    }
}