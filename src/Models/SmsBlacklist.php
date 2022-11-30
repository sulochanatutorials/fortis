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
 * Sms Blacklist Information on `expand`
 */
class SmsBlacklist implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var bool|null
     */
    private $isBlacklisted;

    /**
     * @var bool|null
     */
    private $detail;

    /**
     * @var array
     */
    private $createdTs = [];

    /**
     * Returns Id.
     * Blacklist ID
     */
    public function getId(): ?string
    {
        if (count($this->id) == 0) {
            return null;
        }
        return $this->id['value'];
    }

    /**
     * Sets Id.
     * Blacklist ID
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id['value'] = $id;
    }

    /**
     * Unsets Id.
     * Blacklist ID
     */
    public function unsetId(): void
    {
        $this->id = [];
    }

    /**
     * Returns Is Blacklisted.
     * isBlacklisted
     */
    public function getIsBlacklisted(): ?bool
    {
        return $this->isBlacklisted;
    }

    /**
     * Sets Is Blacklisted.
     * isBlacklisted
     *
     * @maps isBlacklisted
     */
    public function setIsBlacklisted(?bool $isBlacklisted): void
    {
        $this->isBlacklisted = $isBlacklisted;
    }

    /**
     * Returns Detail.
     * Contact Id
     */
    public function getDetail(): ?bool
    {
        return $this->detail;
    }

    /**
     * Sets Detail.
     * Contact Id
     *
     * @maps detail
     */
    public function setDetail(?bool $detail): void
    {
        $this->detail = $detail;
    }

    /**
     * Returns Created Ts.
     * Created Time Stamp
     */
    public function getCreatedTs(): ?int
    {
        if (count($this->createdTs) == 0) {
            return null;
        }
        return $this->createdTs['value'];
    }

    /**
     * Sets Created Ts.
     * Created Time Stamp
     *
     * @maps created_ts
     */
    public function setCreatedTs(?int $createdTs): void
    {
        $this->createdTs['value'] = $createdTs;
    }

    /**
     * Unsets Created Ts.
     * Created Time Stamp
     */
    public function unsetCreatedTs(): void
    {
        $this->createdTs = [];
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
            $json['id']            = $this->id['value'];
        }
        if (isset($this->isBlacklisted)) {
            $json['isBlacklisted'] = $this->isBlacklisted;
        }
        if (isset($this->detail)) {
            $json['detail']        = $this->detail;
        }
        if (!empty($this->createdTs)) {
            $json['created_ts']    = $this->createdTs['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
