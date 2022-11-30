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
 * Type Information on `expand`
 */
class Type6 implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var string|null
     */
    private $title;

    /**
     * Returns Id.
     * ID
     */
    public function getId(): ?int
    {
        if (count($this->id) == 0) {
            return null;
        }
        return $this->id['value'];
    }

    /**
     * Sets Id.
     * ID
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id['value'] = $id;
    }

    /**
     * Unsets Id.
     * ID
     */
    public function unsetId(): void
    {
        $this->id = [];
    }

    /**
     * Returns Title.
     * Title
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     * Title
     *
     * @maps title
     */
    public function setTitle(?string $title): void
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
        if (!empty($this->id)) {
            $json['id']    = $this->id['value'];
        }
        if (isset($this->title)) {
            $json['title'] = $this->title;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
