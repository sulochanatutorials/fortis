<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class TerminalRouter implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $macAddress;

    /**
     * @var string
     */
    private $locationId;

    /**
     * @var array
     */
    private $locationApiId = [];

    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $createdTs;

    /**
     * @var int
     */
    private $modifiedTs;

    /**
     * @var array
     */
    private $createdUserId = [];

    /**
     * @param string $locationId
     * @param string $id
     * @param int $createdTs
     * @param int $modifiedTs
     */
    public function __construct(string $locationId, string $id, int $createdTs, int $modifiedTs)
    {
        $this->locationId = $locationId;
        $this->id = $id;
        $this->createdTs = $createdTs;
        $this->modifiedTs = $modifiedTs;
    }

    /**
     * Returns Mac Address.
     * Mac Address
     */
    public function getMacAddress(): ?string
    {
        return $this->macAddress;
    }

    /**
     * Sets Mac Address.
     * Mac Address
     *
     * @maps mac_address
     */
    public function setMacAddress(?string $macAddress): void
    {
        $this->macAddress = $macAddress;
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
     * Returns Location Api Id.
     * Location API ID
     */
    public function getLocationApiId(): ?string
    {
        if (count($this->locationApiId) == 0) {
            return null;
        }
        return $this->locationApiId['value'];
    }

    /**
     * Sets Location Api Id.
     * Location API ID
     *
     * @maps location_api_id
     */
    public function setLocationApiId(?string $locationApiId): void
    {
        $this->locationApiId['value'] = $locationApiId;
    }

    /**
     * Unsets Location Api Id.
     * Location API ID
     */
    public function unsetLocationApiId(): void
    {
        $this->locationApiId = [];
    }

    /**
     * Returns Id.
     * Terminal Router ID
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Terminal Router ID
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Created Ts.
     * Created Time Stamp
     */
    public function getCreatedTs(): int
    {
        return $this->createdTs;
    }

    /**
     * Sets Created Ts.
     * Created Time Stamp
     *
     * @required
     * @maps created_ts
     */
    public function setCreatedTs(int $createdTs): void
    {
        $this->createdTs = $createdTs;
    }

    /**
     * Returns Modified Ts.
     * Modified Time Stamp
     */
    public function getModifiedTs(): int
    {
        return $this->modifiedTs;
    }

    /**
     * Sets Modified Ts.
     * Modified Time Stamp
     *
     * @required
     * @maps modified_ts
     */
    public function setModifiedTs(int $modifiedTs): void
    {
        $this->modifiedTs = $modifiedTs;
    }

    /**
     * Returns Created User Id.
     * User ID Created the register
     */
    public function getCreatedUserId(): ?string
    {
        if (count($this->createdUserId) == 0) {
            return null;
        }
        return $this->createdUserId['value'];
    }

    /**
     * Sets Created User Id.
     * User ID Created the register
     *
     * @maps created_user_id
     */
    public function setCreatedUserId(?string $createdUserId): void
    {
        $this->createdUserId['value'] = $createdUserId;
    }

    /**
     * Unsets Created User Id.
     * User ID Created the register
     */
    public function unsetCreatedUserId(): void
    {
        $this->createdUserId = [];
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
        if (isset($this->macAddress)) {
            $json['mac_address']     = $this->macAddress;
        }
        $json['location_id']         = $this->locationId;
        if (!empty($this->locationApiId)) {
            $json['location_api_id'] = $this->locationApiId['value'];
        }
        $json['id']                  = $this->id;
        $json['created_ts']          = $this->createdTs;
        $json['modified_ts']         = $this->modifiedTs;
        if (!empty($this->createdUserId)) {
            $json['created_user_id'] = $this->createdUserId['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
