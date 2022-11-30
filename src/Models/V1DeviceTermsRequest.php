<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class V1DeviceTermsRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $locationId;

    /**
     * @var string
     */
    private $terminalId;

    /**
     * @var bool
     */
    private $requireSignature;

    /**
     * @var array
     */
    private $deviceTermApiId = [];

    /**
     * @var string
     */
    private $termsConditions;

    /**
     * @param string $locationId
     * @param string $terminalId
     * @param bool $requireSignature
     * @param string $termsConditions
     */
    public function __construct(
        string $locationId,
        string $terminalId,
        bool $requireSignature,
        string $termsConditions
    ) {
        $this->locationId = $locationId;
        $this->terminalId = $terminalId;
        $this->requireSignature = $requireSignature;
        $this->termsConditions = $termsConditions;
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
     * Returns Terminal Id.
     * Terminal ID
     */
    public function getTerminalId(): string
    {
        return $this->terminalId;
    }

    /**
     * Sets Terminal Id.
     * Terminal ID
     *
     * @required
     * @maps terminal_id
     */
    public function setTerminalId(string $terminalId): void
    {
        $this->terminalId = $terminalId;
    }

    /**
     * Returns Require Signature.
     * Set to true or 1 to require a signature from the customer
     */
    public function getRequireSignature(): bool
    {
        return $this->requireSignature;
    }

    /**
     * Sets Require Signature.
     * Set to true or 1 to require a signature from the customer
     *
     * @required
     * @maps require_signature
     */
    public function setRequireSignature(bool $requireSignature): void
    {
        $this->requireSignature = $requireSignature;
    }

    /**
     * Returns Device Term Api Id.
     * Can be used for associating record to external systems. Must be unique per location.
     */
    public function getDeviceTermApiId(): ?string
    {
        if (count($this->deviceTermApiId) == 0) {
            return null;
        }
        return $this->deviceTermApiId['value'];
    }

    /**
     * Sets Device Term Api Id.
     * Can be used for associating record to external systems. Must be unique per location.
     *
     * @maps device_term_api_id
     */
    public function setDeviceTermApiId(?string $deviceTermApiId): void
    {
        $this->deviceTermApiId['value'] = $deviceTermApiId;
    }

    /**
     * Unsets Device Term Api Id.
     * Can be used for associating record to external systems. Must be unique per location.
     */
    public function unsetDeviceTermApiId(): void
    {
        $this->deviceTermApiId = [];
    }

    /**
     * Returns Terms Conditions.
     * This is the message that is displayed on the screen when prompting for a signature.
     */
    public function getTermsConditions(): string
    {
        return $this->termsConditions;
    }

    /**
     * Sets Terms Conditions.
     * This is the message that is displayed on the screen when prompting for a signature.
     *
     * @required
     * @maps terms_conditions
     */
    public function setTermsConditions(string $termsConditions): void
    {
        $this->termsConditions = $termsConditions;
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
        $json['location_id']            = $this->locationId;
        $json['terminal_id']            = $this->terminalId;
        $json['require_signature']      = $this->requireSignature;
        if (!empty($this->deviceTermApiId)) {
            $json['device_term_api_id'] = $this->deviceTermApiId['value'];
        }
        $json['terms_conditions']       = $this->termsConditions;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
