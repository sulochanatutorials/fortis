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
 * Sort information used on the results
 */
class Sort implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var Field[]
     */
    private $fields;

    /**
     * @param Field[] $fields
     */
    public function __construct(array $fields)
    {
        $this->fields = $fields;
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
     * Returns Fields.
     * [object Object]
     *
     * @return Field[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * Sets Fields.
     * [object Object]
     *
     * @required
     * @maps fields
     *
     * @param Field[] $fields
     */
    public function setFields(array $fields): void
    {
        $this->fields = $fields;
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
        $json['type']   = $this->type;
        $json['fields'] = $this->fields;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}