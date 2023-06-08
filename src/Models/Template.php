<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models;

use stdClass;

class Template implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Language
     */
    private $language;

    /**
     * @var Component[]|null
     */
    private $components;

    /**
     * @param string $name
     * @param Language $language
     */
    public function __construct(string $name, Language $language)
    {
        $this->name = $name;
        $this->language = $language;
    }

    /**
     * Returns Name.
     * Name of the template.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Name of the template.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Language.
     * Specifies the language the template may be rendered in. Only the deterministic language policy works
     * with media template messages.
     */
    public function getLanguage(): Language
    {
        return $this->language;
    }

    /**
     * Sets Language.
     * Specifies the language the template may be rendered in. Only the deterministic language policy works
     * with media template messages.
     *
     * @required
     * @maps language
     */
    public function setLanguage(Language $language): void
    {
        $this->language = $language;
    }

    /**
     * Returns Components.
     * Array of components objects containing the parameters of the message.
     *
     * @return Component[]|null
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    /**
     * Sets Components.
     * Array of components objects containing the parameters of the message.
     *
     * @maps components
     *
     * @param Component[]|null $components
     */
    public function setComponents(?array $components): void
    {
        $this->components = $components;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['name']           = $this->name;
        $json['language']       = $this->language;
        if (isset($this->components)) {
            $json['components'] = $this->components;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}