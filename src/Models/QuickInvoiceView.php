<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class QuickInvoiceView implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string
     */
    private $quickInvoiceId;

    /**
     * @var array
     */
    private $remoteIp = [];

    /**
     * @var array
     */
    private $createdTs = [];

    /**
     * @param string $quickInvoiceId
     */
    public function __construct(string $quickInvoiceId)
    {
        $this->quickInvoiceId = $quickInvoiceId;
    }

    /**
     * Returns Id.
     * Quick Invoice Views Id
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Quick Invoice Views Id
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Quick Invoice Id.
     * Quick Invoice ID
     */
    public function getQuickInvoiceId(): string
    {
        return $this->quickInvoiceId;
    }

    /**
     * Sets Quick Invoice Id.
     * Quick Invoice ID
     *
     * @required
     * @maps quick_invoice_id
     */
    public function setQuickInvoiceId(string $quickInvoiceId): void
    {
        $this->quickInvoiceId = $quickInvoiceId;
    }

    /**
     * Returns Remote Ip.
     * Remote Ip
     */
    public function getRemoteIp(): ?string
    {
        if (count($this->remoteIp) == 0) {
            return null;
        }
        return $this->remoteIp['value'];
    }

    /**
     * Sets Remote Ip.
     * Remote Ip
     *
     * @maps remote_ip
     */
    public function setRemoteIp(?string $remoteIp): void
    {
        $this->remoteIp['value'] = $remoteIp;
    }

    /**
     * Unsets Remote Ip.
     * Remote Ip
     */
    public function unsetRemoteIp(): void
    {
        $this->remoteIp = [];
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
        if (isset($this->id)) {
            $json['id']           = $this->id;
        }
        $json['quick_invoice_id'] = $this->quickInvoiceId;
        if (!empty($this->remoteIp)) {
            $json['remote_ip']    = $this->remoteIp['value'];
        }
        if (!empty($this->createdTs)) {
            $json['created_ts']   = $this->createdTs['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}