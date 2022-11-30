<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class LastRegistrationTs1 implements \JsonSerializable
{
    /**
     * @var array|null
     */
    private $lte;

    /**
     * @var array|null
     */
    private $gte;

    /**
     * Returns Lte.
     */
    public function getLte(): ?array
    {
        return $this->lte;
    }

    /**
     * Sets Lte.
     *
     * @maps $lte
     */
    public function setLte(?array $lte): void
    {
        $this->lte = $lte;
    }

    /**
     * Returns Gte.
     */
    public function getGte(): ?array
    {
        return $this->gte;
    }

    /**
     * Sets Gte.
     *
     * @maps $gte
     */
    public function setGte(?array $gte): void
    {
        $this->gte = $gte;
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
        if (isset($this->lte)) {
            $json['$lte'] = $this->lte;
        }
        if (isset($this->gte)) {
            $json['$gte'] = $this->gte;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
