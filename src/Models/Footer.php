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
 * Footer
 */
class Footer implements \JsonSerializable
{
    /**
     * @var Settings
     */
    private $settings;

    /**
     * @var Field12[]
     */
    private $fields;

    /**
     * @param Settings $settings
     * @param Field12[] $fields
     */
    public function __construct(Settings $settings, array $fields)
    {
        $this->settings = $settings;
        $this->fields = $fields;
    }

    /**
     * Returns Settings.
     */
    public function getSettings(): Settings
    {
        return $this->settings;
    }

    /**
     * Sets Settings.
     *
     * @required
     * @maps settings
     */
    public function setSettings(Settings $settings): void
    {
        $this->settings = $settings;
    }

    /**
     * Returns Fields.
     *
     * @return Field12[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * Sets Fields.
     *
     * @required
     * @maps fields
     *
     * @param Field12[] $fields
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
        $json['settings'] = $this->settings;
        $json['fields']   = $this->fields;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
