<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use WhatsAppCloudAPILib\Models\RetrieveMediaURLResponse;

/**
 * Builder for model RetrieveMediaURLResponse
 *
 * @see RetrieveMediaURLResponse
 */
class RetrieveMediaURLResponseBuilder
{
    /**
     * @var RetrieveMediaURLResponse
     */
    private $instance;

    private function __construct(RetrieveMediaURLResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new retrieve media urlresponse Builder object.
     */
    public static function init(
        string $messagingProduct,
        string $url,
        string $mimeType,
        string $sha256,
        string $fileSize,
        string $id
    ): self {
        return new self(new RetrieveMediaURLResponse($messagingProduct, $url, $mimeType, $sha256, $fileSize, $id));
    }

    /**
     * Initializes a new retrieve media urlresponse object.
     */
    public function build(): RetrieveMediaURLResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
