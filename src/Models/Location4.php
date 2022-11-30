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
 * The Location.
 */
class Location4 implements \JsonSerializable
{
    /**
     * @var array
     */
    private $addressLine1 = [];

    /**
     * @var array
     */
    private $addressLine2 = [];

    /**
     * @var array
     */
    private $city = [];

    /**
     * @var array
     */
    private $stateProvince = [];

    /**
     * @var array
     */
    private $postalCode = [];

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @param string $phoneNumber
     */
    public function __construct(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns Address Line 1.
     * Merchant's business address line 1.
     */
    public function getAddressLine1(): ?string
    {
        if (count($this->addressLine1) == 0) {
            return null;
        }
        return $this->addressLine1['value'];
    }

    /**
     * Sets Address Line 1.
     * Merchant's business address line 1.
     *
     * @maps address_line_1
     */
    public function setAddressLine1(?string $addressLine1): void
    {
        $this->addressLine1['value'] = $addressLine1;
    }

    /**
     * Unsets Address Line 1.
     * Merchant's business address line 1.
     */
    public function unsetAddressLine1(): void
    {
        $this->addressLine1 = [];
    }

    /**
     * Returns Address Line 2.
     * Merchant's business address line 2.
     */
    public function getAddressLine2(): ?string
    {
        if (count($this->addressLine2) == 0) {
            return null;
        }
        return $this->addressLine2['value'];
    }

    /**
     * Sets Address Line 2.
     * Merchant's business address line 2.
     *
     * @maps address_line_2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2['value'] = $addressLine2;
    }

    /**
     * Unsets Address Line 2.
     * Merchant's business address line 2.
     */
    public function unsetAddressLine2(): void
    {
        $this->addressLine2 = [];
    }

    /**
     * Returns City.
     * Merchant's business city.
     */
    public function getCity(): ?string
    {
        if (count($this->city) == 0) {
            return null;
        }
        return $this->city['value'];
    }

    /**
     * Sets City.
     * Merchant's business city.
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city['value'] = $city;
    }

    /**
     * Unsets City.
     * Merchant's business city.
     */
    public function unsetCity(): void
    {
        $this->city = [];
    }

    /**
     * Returns State Province.
     * Merchant's business two-digit state or province code.
     */
    public function getStateProvince(): ?string
    {
        if (count($this->stateProvince) == 0) {
            return null;
        }
        return $this->stateProvince['value'];
    }

    /**
     * Sets State Province.
     * Merchant's business two-digit state or province code.
     *
     * @maps state_province
     */
    public function setStateProvince(?string $stateProvince): void
    {
        $this->stateProvince['value'] = $stateProvince;
    }

    /**
     * Unsets State Province.
     * Merchant's business two-digit state or province code.
     */
    public function unsetStateProvince(): void
    {
        $this->stateProvince = [];
    }

    /**
     * Returns Postal Code.
     * Merchant's business postal code.
     */
    public function getPostalCode(): ?string
    {
        if (count($this->postalCode) == 0) {
            return null;
        }
        return $this->postalCode['value'];
    }

    /**
     * Sets Postal Code.
     * Merchant's business postal code.
     *
     * @maps postal_code
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode['value'] = $postalCode;
    }

    /**
     * Unsets Postal Code.
     * Merchant's business postal code.
     */
    public function unsetPostalCode(): void
    {
        $this->postalCode = [];
    }

    /**
     * Returns Phone Number.
     * Merchant's business phone number.
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Sets Phone Number.
     * Merchant's business phone number.
     *
     * @required
     * @maps phone_number
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
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
        if (!empty($this->addressLine1)) {
            $json['address_line_1'] = $this->addressLine1['value'];
        }
        if (!empty($this->addressLine2)) {
            $json['address_line_2'] = $this->addressLine2['value'];
        }
        if (!empty($this->city)) {
            $json['city']           = $this->city['value'];
        }
        if (!empty($this->stateProvince)) {
            $json['state_province'] = $this->stateProvince['value'];
        }
        if (!empty($this->postalCode)) {
            $json['postal_code']    = $this->postalCode['value'];
        }
        $json['phone_number']       = $this->phoneNumber;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
