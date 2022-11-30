<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class V1TagsRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $locationId;

    /**
     * @var string
     */
    private $title;

    /**
     * @param string $locationId
     * @param string $title
     */
    public function __construct(string $locationId, string $title)
    {
        $this->locationId = $locationId;
        $this->title = $title;
    }

    /**
     * Returns Location Id.
     * Location ID
     */
    public function getLocationId(): string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * Location ID
     *
     * @required
     * @maps location_id
     */
    public function setLocationId(string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Title.
     * Tag Title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     * Tag Title
     *
     * @required
     * @maps title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
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
        $json['location_id'] = $this->locationId;
        $json['title']       = $this->title;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}