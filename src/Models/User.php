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
 * User
 */
class User implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var array
     */
    private $username = [];

    /**
     * @var array
     */
    private $firstName = [];

    /**
     * @var array
     */
    private $lastName = [];

    /**
     * Returns Id.
     * ID
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
     * ID
     *
     * @maps id
     */
    public function setId(?string $id): void
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
     * Returns Username.
     * Username
     */
    public function getUsername(): ?string
    {
        if (count($this->username) == 0) {
            return null;
        }
        return $this->username['value'];
    }

    /**
     * Sets Username.
     * Username
     *
     * @maps username
     */
    public function setUsername(?string $username): void
    {
        $this->username['value'] = $username;
    }

    /**
     * Unsets Username.
     * Username
     */
    public function unsetUsername(): void
    {
        $this->username = [];
    }

    /**
     * Returns First Name.
     * First Name
     */
    public function getFirstName(): ?string
    {
        if (count($this->firstName) == 0) {
            return null;
        }
        return $this->firstName['value'];
    }

    /**
     * Sets First Name.
     * First Name
     *
     * @maps first_name
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName['value'] = $firstName;
    }

    /**
     * Unsets First Name.
     * First Name
     */
    public function unsetFirstName(): void
    {
        $this->firstName = [];
    }

    /**
     * Returns Last Name.
     * Last Name
     */
    public function getLastName(): ?string
    {
        if (count($this->lastName) == 0) {
            return null;
        }
        return $this->lastName['value'];
    }

    /**
     * Sets Last Name.
     * Last Name
     *
     * @maps last_name
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName['value'] = $lastName;
    }

    /**
     * Unsets Last Name.
     * Last Name
     */
    public function unsetLastName(): void
    {
        $this->lastName = [];
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
            $json['id']         = $this->id['value'];
        }
        if (!empty($this->username)) {
            $json['username']   = $this->username['value'];
        }
        if (!empty($this->firstName)) {
            $json['first_name'] = $this->firstName['value'];
        }
        if (!empty($this->lastName)) {
            $json['last_name']  = $this->lastName['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
