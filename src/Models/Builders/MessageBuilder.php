<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use WhatsAppCloudAPILib\Models\Audio;
use WhatsAppCloudAPILib\Models\Document;
use WhatsAppCloudAPILib\Models\Image;
use WhatsAppCloudAPILib\Models\Interactive;
use WhatsAppCloudAPILib\Models\Location;
use WhatsAppCloudAPILib\Models\Message;
use WhatsAppCloudAPILib\Models\Sticker;
use WhatsAppCloudAPILib\Models\Template;
use WhatsAppCloudAPILib\Models\Text;
use WhatsAppCloudAPILib\Models\Video;

/**
 * Builder for model Message
 *
 * @see Message
 */
class MessageBuilder
{
    /**
     * @var Message
     */
    private $instance;

    private function __construct(Message $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new message Builder object.
     */
    public static function init(string $messagingProduct, string $to): self
    {
        return new self(new Message($messagingProduct, $to));
    }

    /**
     * Sets audio field.
     */
    public function audio(?Audio $value): self
    {
        $this->instance->setAudio($value);
        return $this;
    }

    /**
     * Sets contacts field.
     */
    public function contacts(?array $value): self
    {
        $this->instance->setContacts($value);
        return $this;
    }

    /**
     * Sets document field.
     */
    public function document(?Document $value): self
    {
        $this->instance->setDocument($value);
        return $this;
    }

    /**
     * Sets image field.
     */
    public function image(?Image $value): self
    {
        $this->instance->setImage($value);
        return $this;
    }

    /**
     * Sets interactive field.
     */
    public function interactive(?Interactive $value): self
    {
        $this->instance->setInteractive($value);
        return $this;
    }

    /**
     * Sets location field.
     */
    public function location(?Location $value): self
    {
        $this->instance->setLocation($value);
        return $this;
    }

    /**
     * Sets recipient type field.
     */
    public function recipientType(?string $value): self
    {
        $this->instance->setRecipientType($value);
        return $this;
    }

    /**
     * Sets sticker field.
     */
    public function sticker(?Sticker $value): self
    {
        $this->instance->setSticker($value);
        return $this;
    }

    /**
     * Sets template field.
     */
    public function template(?Template $value): self
    {
        $this->instance->setTemplate($value);
        return $this;
    }

    /**
     * Sets text field.
     */
    public function text(?Text $value): self
    {
        $this->instance->setText($value);
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
     * Sets video field.
     */
    public function video(?Video $value): self
    {
        $this->instance->setVideo($value);
        return $this;
    }

    /**
     * Initializes a new message object.
     */
    public function build(): Message
    {
        return CoreHelper::clone($this->instance);
    }
}
