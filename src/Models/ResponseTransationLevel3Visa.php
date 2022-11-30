<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class ResponseTransationLevel3Visa implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var Data17|null
     */
    private $data;

    /**
     * Returns Type.
     * Resource Type
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Resource Type
     *
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Data.
     */
    public function getData(): ?Data17
    {
        return $this->data;
    }

    /**
     * Sets Data.
     *
     * @maps data
     */
    public function setData(?Data17 $data): void
    {
        $this->data = $data;
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
        if (isset($this->data)) {
            $json['data'] = $this->data;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
