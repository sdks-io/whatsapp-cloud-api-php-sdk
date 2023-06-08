<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use WhatsAppCloudAPILib\Models\RequestVerificationCodeRequest;

/**
 * Builder for model RequestVerificationCodeRequest
 *
 * @see RequestVerificationCodeRequest
 */
class RequestVerificationCodeRequestBuilder
{
    /**
     * @var RequestVerificationCodeRequest
     */
    private $instance;

    private function __construct(RequestVerificationCodeRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new request verification code request Builder object.
     */
    public static function init(string $codeMethod, string $locale): self
    {
        return new self(new RequestVerificationCodeRequest($codeMethod, $locale));
    }

    /**
     * Initializes a new request verification code request object.
     */
    public function build(): RequestVerificationCodeRequest
    {
        return CoreHelper::clone($this->instance);
    }
}