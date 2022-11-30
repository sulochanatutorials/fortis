<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class AccountVaultCauLog implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var array
     */
    private $productTransactionId = [];

    /**
     * @var array
     */
    private $accountVaultId = [];

    /**
     * @var array
     */
    private $createdTs = [];

    /**
     * @var array
     */
    private $createdUserId = [];

    /**
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * Returns Id.
     * Token CAU Log ID
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Token CAU Log ID
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Product Transaction Id.
     * Product Transaction ID
     */
    public function getProductTransactionId(): ?string
    {
        if (count($this->productTransactionId) == 0) {
            return null;
        }
        return $this->productTransactionId['value'];
    }

    /**
     * Sets Product Transaction Id.
     * Product Transaction ID
     *
     * @maps product_transaction_id
     */
    public function setProductTransactionId(?string $productTransactionId): void
    {
        $this->productTransactionId['value'] = $productTransactionId;
    }

    /**
     * Unsets Product Transaction Id.
     * Product Transaction ID
     */
    public function unsetProductTransactionId(): void
    {
        $this->productTransactionId = [];
    }

    /**
     * Returns Account Vault Id.
     * Token ID
     */
    public function getAccountVaultId(): ?string
    {
        if (count($this->accountVaultId) == 0) {
            return null;
        }
        return $this->accountVaultId['value'];
    }

    /**
     * Sets Account Vault Id.
     * Token ID
     *
     * @maps account_vault_id
     */
    public function setAccountVaultId(?string $accountVaultId): void
    {
        $this->accountVaultId['value'] = $accountVaultId;
    }

    /**
     * Unsets Account Vault Id.
     * Token ID
     */
    public function unsetAccountVaultId(): void
    {
        $this->accountVaultId = [];
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
        $json['id']                         = $this->id;
        if (!empty($this->productTransactionId)) {
            $json['product_transaction_id'] = $this->productTransactionId['value'];
        }
        if (!empty($this->accountVaultId)) {
            $json['account_vault_id']       = $this->accountVaultId['value'];
        }
        if (!empty($this->createdTs)) {
            $json['created_ts']             = $this->createdTs['value'];
        }
        if (!empty($this->createdUserId)) {
            $json['created_user_id']        = $this->createdUserId['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}