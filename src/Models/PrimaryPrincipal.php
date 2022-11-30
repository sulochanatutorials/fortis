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
 * The Primary Principal.
 */
class PrimaryPrincipal implements \JsonSerializable
{
    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var array
     */
    private $middleName = [];

    /**
     * @var array
     */
    private $title = [];

    /**
     * @var array
     */
    private $dateOfBirth = [];

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
     * @var array
     */
    private $ssn = [];

    /**
     * @var array
     */
    private $ownershipPercent = [];

    /**
     * @var array
     */
    private $phoneNumber = [];

    /**
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * Returns First Name.
     * Signer's first name
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     * Signer's first name
     *
     * @required
     * @maps first_name
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     * Signer's last name
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * Signer's last name
     *
     * @required
     * @maps last_name
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Middle Name.
     * Signer's middle name
     */
    public function getMiddleName(): ?string
    {
        if (count($this->middleName) == 0) {
            return null;
        }
        return $this->middleName['value'];
    }

    /**
     * Sets Middle Name.
     * Signer's middle name
     *
     * @maps middle_name
     */
    public function setMiddleName(?string $middleName): void
    {
        $this->middleName['value'] = $middleName;
    }

    /**
     * Unsets Middle Name.
     * Signer's middle name
     */
    public function unsetMiddleName(): void
    {
        $this->middleName = [];
    }

    /**
     * Returns Title.
     * Signer's title
     */
    public function getTitle(): ?string
    {
        if (count($this->title) == 0) {
            return null;
        }
        return $this->title['value'];
    }

    /**
     * Sets Title.
     * Signer's title
     *
     * @maps title
     */
    public function setTitle(?string $title): void
    {
        $this->title['value'] = $title;
    }

    /**
     * Unsets Title.
     * Signer's title
     */
    public function unsetTitle(): void
    {
        $this->title = [];
    }

    /**
     * Returns Date of Birth.
     * Signer's date of birth
     */
    public function getDateOfBirth(): ?string
    {
        if (count($this->dateOfBirth) == 0) {
            return null;
        }
        return $this->dateOfBirth['value'];
    }

    /**
     * Sets Date of Birth.
     * Signer's date of birth
     *
     * @maps date_of_birth
     */
    public function setDateOfBirth(?string $dateOfBirth): void
    {
        $this->dateOfBirth['value'] = $dateOfBirth;
    }

    /**
     * Unsets Date of Birth.
     * Signer's date of birth
     */
    public function unsetDateOfBirth(): void
    {
        $this->dateOfBirth = [];
    }

    /**
     * Returns Address Line 1.
     * Signer's residential address line 1
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
     * Signer's residential address line 1
     *
     * @maps address_line_1
     */
    public function setAddressLine1(?string $addressLine1): void
    {
        $this->addressLine1['value'] = $addressLine1;
    }

    /**
     * Unsets Address Line 1.
     * Signer's residential address line 1
     */
    public function unsetAddressLine1(): void
    {
        $this->addressLine1 = [];
    }

    /**
     * Returns Address Line 2.
     * Signer's residential address line 2
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
     * Signer's residential address line 2
     *
     * @maps address_line_2
     */
    public function setAddressLine2(?string $addressLine2): void
    {
        $this->addressLine2['value'] = $addressLine2;
    }

    /**
     * Unsets Address Line 2.
     * Signer's residential address line 2
     */
    public function unsetAddressLine2(): void
    {
        $this->addressLine2 = [];
    }

    /**
     * Returns City.
     * Signer's city
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
     * Signer's city
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city['value'] = $city;
    }

    /**
     * Unsets City.
     * Signer's city
     */
    public function unsetCity(): void
    {
        $this->city = [];
    }

    /**
     * Returns State Province.
     * Signer's two-digit state code
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
     * Signer's two-digit state code
     *
     * @maps state_province
     */
    public function setStateProvince(?string $stateProvince): void
    {
        $this->stateProvince['value'] = $stateProvince;
    }

    /**
     * Unsets State Province.
     * Signer's two-digit state code
     */
    public function unsetStateProvince(): void
    {
        $this->stateProvince = [];
    }

    /**
     * Returns Postal Code.
     * Signer's postal code
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
     * Signer's postal code
     *
     * @maps postal_code
     */
    public function setPostalCode(?string $postalCode): void
    {
        $this->postalCode['value'] = $postalCode;
    }

    /**
     * Unsets Postal Code.
     * Signer's postal code
     */
    public function unsetPostalCode(): void
    {
        $this->postalCode = [];
    }

    /**
     * Returns Ssn.
     * Last four digits of the primary principal or Signer's social security number
     */
    public function getSsn(): ?string
    {
        if (count($this->ssn) == 0) {
            return null;
        }
        return $this->ssn['value'];
    }

    /**
     * Sets Ssn.
     * Last four digits of the primary principal or Signer's social security number
     *
     * @maps ssn
     */
    public function setSsn(?string $ssn): void
    {
        $this->ssn['value'] = $ssn;
    }

    /**
     * Unsets Ssn.
     * Last four digits of the primary principal or Signer's social security number
     */
    public function unsetSsn(): void
    {
        $this->ssn = [];
    }

    /**
     * Returns Ownership Percent.
     * Percentage of business owned by primary principal or signer
     */
    public function getOwnershipPercent(): ?int
    {
        if (count($this->ownershipPercent) == 0) {
            return null;
        }
        return $this->ownershipPercent['value'];
    }

    /**
     * Sets Ownership Percent.
     * Percentage of business owned by primary principal or signer
     *
     * @maps ownership_percent
     */
    public function setOwnershipPercent(?int $ownershipPercent): void
    {
        $this->ownershipPercent['value'] = $ownershipPercent;
    }

    /**
     * Unsets Ownership Percent.
     * Percentage of business owned by primary principal or signer
     */
    public function unsetOwnershipPercent(): void
    {
        $this->ownershipPercent = [];
    }

    /**
     * Returns Phone Number.
     * Signer's phone number
     */
    public function getPhoneNumber(): ?string
    {
        if (count($this->phoneNumber) == 0) {
            return null;
        }
        return $this->phoneNumber['value'];
    }

    /**
     * Sets Phone Number.
     * Signer's phone number
     *
     * @maps phone_number
     */
    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber['value'] = $phoneNumber;
    }

    /**
     * Unsets Phone Number.
     * Signer's phone number
     */
    public function unsetPhoneNumber(): void
    {
        $this->phoneNumber = [];
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
        $json['first_name']            = $this->firstName;
        $json['last_name']             = $this->lastName;
        if (!empty($this->middleName)) {
            $json['middle_name']       = $this->middleName['value'];
        }
        if (!empty($this->title)) {
            $json['title']             = $this->title['value'];
        }
        if (!empty($this->dateOfBirth)) {
            $json['date_of_birth']     = $this->dateOfBirth['value'];
        }
        if (!empty($this->addressLine1)) {
            $json['address_line_1']    = $this->addressLine1['value'];
        }
        if (!empty($this->addressLine2)) {
            $json['address_line_2']    = $this->addressLine2['value'];
        }
        if (!empty($this->city)) {
            $json['city']              = $this->city['value'];
        }
        if (!empty($this->stateProvince)) {
            $json['state_province']    = $this->stateProvince['value'];
        }
        if (!empty($this->postalCode)) {
            $json['postal_code']       = $this->postalCode['value'];
        }
        if (!empty($this->ssn)) {
            $json['ssn']               = $this->ssn['value'];
        }
        if (!empty($this->ownershipPercent)) {
            $json['ownership_percent'] = $this->ownershipPercent['value'];
        }
        if (!empty($this->phoneNumber)) {
            $json['phone_number']      = $this->phoneNumber['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
