<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

/**
 * field_configuration
 */
class FieldConfiguration implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $cssMini;

    /**
     * @var string
     */
    private $stack;

    /**
     * @var Header|null
     */
    private $header;

    /**
     * @var Body
     */
    private $body;

    /**
     * @var Footer
     */
    private $footer;

    /**
     * @param bool $cssMini
     * @param string $stack
     * @param Body $body
     * @param Footer $footer
     */
    public function __construct(bool $cssMini, string $stack, Body $body, Footer $footer)
    {
        $this->cssMini = $cssMini;
        $this->stack = $stack;
        $this->body = $body;
        $this->footer = $footer;
    }

    /**
     * Returns Css Mini.
     * CSS Mini
     */
    public function getCssMini(): bool
    {
        return $this->cssMini;
    }

    /**
     * Sets Css Mini.
     * CSS Mini
     *
     * @required
     * @maps css_mini
     */
    public function setCssMini(bool $cssMini): void
    {
        $this->cssMini = $cssMini;
    }

    /**
     * Returns Stack.
     * Stack
     */
    public function getStack(): string
    {
        return $this->stack;
    }

    /**
     * Sets Stack.
     * Stack
     *
     * @required
     * @maps stack
     * @factory \FortisAPILib\Models\StackEnum::checkValue
     */
    public function setStack(string $stack): void
    {
        $this->stack = $stack;
    }

    /**
     * Returns Header.
     * Header
     */
    public function getHeader(): ?Header
    {
        return $this->header;
    }

    /**
     * Sets Header.
     * Header
     *
     * @maps header
     */
    public function setHeader(?Header $header): void
    {
        $this->header = $header;
    }

    /**
     * Returns Body.
     * Body
     */
    public function getBody(): Body
    {
        return $this->body;
    }

    /**
     * Sets Body.
     * Body
     *
     * @required
     * @maps body
     */
    public function setBody(Body $body): void
    {
        $this->body = $body;
    }

    /**
     * Returns Footer.
     * Footer
     */
    public function getFooter(): Footer
    {
        return $this->footer;
    }

    /**
     * Sets Footer.
     * Footer
     *
     * @required
     * @maps footer
     */
    public function setFooter(Footer $footer): void
    {
        $this->footer = $footer;
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
        $json['css_mini']   = $this->cssMini;
        $json['stack']      = StackEnum::checkValue($this->stack);
        if (isset($this->header)) {
            $json['header'] = $this->header;
        }
        $json['body']       = $this->body;
        $json['footer']     = $this->footer;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
