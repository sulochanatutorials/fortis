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
 * Identity verification
 */
class IdentityVerification2 implements \JsonSerializable
{
    /**
     * @var array
     */
    private $dlState = [];

    /**
     * @var array
     */
    private $dlNumber = [];

    /**
     * @var array
     */
    private $ssn4 = [];

    /**
     * @var array
     */
    private $dobYear = [];

    /**
     * Returns Dl State.
     * Used for certain ACH transactions where Driver's License is required by the terminal being used.
     */
    public function getDlState(): ?string
    {
        if (count($this->dlState) == 0) {
            return null;
        }
        return $this->dlState['value'];
    }

    /**
     * Sets Dl State.
     * Used for certain ACH transactions where Driver's License is required by the terminal being used.
     *
     * @maps dl_state
     */
    public function setDlState(?string $dlState): void
    {
        $this->dlState['value'] = $dlState;
    }

    /**
     * Unsets Dl State.
     * Used for certain ACH transactions where Driver's License is required by the terminal being used.
     */
    public function unsetDlState(): void
    {
        $this->dlState = [];
    }

    /**
     * Returns Dl Number.
     * Used for certain ACH transactions where Driver's License is required by the terminal being used.
     */
    public function getDlNumber(): ?string
    {
        if (count($this->dlNumber) == 0) {
            return null;
        }
        return $this->dlNumber['value'];
    }

    /**
     * Sets Dl Number.
     * Used for certain ACH transactions where Driver's License is required by the terminal being used.
     *
     * @maps dl_number
     */
    public function setDlNumber(?string $dlNumber): void
    {
        $this->dlNumber['value'] = $dlNumber;
    }

    /**
     * Unsets Dl Number.
     * Used for certain ACH transactions where Driver's License is required by the terminal being used.
     */
    public function unsetDlNumber(): void
    {
        $this->dlNumber = [];
    }

    /**
     * Returns Ssn 4.
     * The last four of the account_holder social security number.
     */
    public function getSsn4(): ?string
    {
        if (count($this->ssn4) == 0) {
            return null;
        }
        return $this->ssn4['value'];
    }

    /**
     * Sets Ssn 4.
     * The last four of the account_holder social security number.
     *
     * @maps ssn4
     */
    public function setSsn4(?string $ssn4): void
    {
        $this->ssn4['value'] = $ssn4;
    }

    /**
     * Unsets Ssn 4.
     * The last four of the account_holder social security number.
     */
    public function unsetSsn4(): void
    {
        $this->ssn4 = [];
    }

    /**
     * Returns Dob Year.
     * Used for certain ACH transactions where Identity Verification is enabled on the terminal being used.
     */
    public function getDobYear(): ?string
    {
        if (count($this->dobYear) == 0) {
            return null;
        }
        return $this->dobYear['value'];
    }

    /**
     * Sets Dob Year.
     * Used for certain ACH transactions where Identity Verification is enabled on the terminal being used.
     *
     * @maps dob_year
     */
    public function setDobYear(?string $dobYear): void
    {
        $this->dobYear['value'] = $dobYear;
    }

    /**
     * Unsets Dob Year.
     * Used for certain ACH transactions where Identity Verification is enabled on the terminal being used.
     */
    public function unsetDobYear(): void
    {
        $this->dobYear = [];
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
        if (!empty($this->dlState)) {
            $json['dl_state']  = $this->dlState['value'];
        }
        if (!empty($this->dlNumber)) {
            $json['dl_number'] = $this->dlNumber['value'];
        }
        if (!empty($this->ssn4)) {
            $json['ssn4']      = $this->ssn4['value'];
        }
        if (!empty($this->dobYear)) {
            $json['dob_year']  = $this->dobYear['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
