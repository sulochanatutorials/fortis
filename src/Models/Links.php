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
 * Pagination page links
 */
class Links implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $first;

    /**
     * @var string
     */
    private $previous;

    /**
     * @var string
     */
    private $last;

    /**
     * @param string $first
     * @param string $previous
     * @param string $last
     */
    public function __construct(string $first, string $previous, string $last)
    {
        $this->first = $first;
        $this->previous = $previous;
        $this->last = $last;
    }

    /**
     * Returns Type.
     * Object type
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Object type
     *
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns First.
     * Link to the first page
     */
    public function getFirst(): string
    {
        return $this->first;
    }

    /**
     * Sets First.
     * Link to the first page
     *
     * @required
     * @maps first
     */
    public function setFirst(string $first): void
    {
        $this->first = $first;
    }

    /**
     * Returns Previous.
     * Link to the previous page
     */
    public function getPrevious(): string
    {
        return $this->previous;
    }

    /**
     * Sets Previous.
     * Link to the previous page
     *
     * @required
     * @maps previous
     */
    public function setPrevious(string $previous): void
    {
        $this->previous = $previous;
    }

    /**
     * Returns Last.
     * Link to the last page
     */
    public function getLast(): string
    {
        return $this->last;
    }

    /**
     * Sets Last.
     * Link to the last page
     *
     * @required
     * @maps last
     */
    public function setLast(string $last): void
    {
        $this->last = $last;
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
        $json['type']     = $this->type;
        $json['first']    = $this->first;
        $json['previous'] = $this->previous;
        $json['last']     = $this->last;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}