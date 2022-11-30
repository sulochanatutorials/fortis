<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class V1TransactionsLevel3MasterCardRequest implements \JsonSerializable
{
    /**
     * @var Level3Data5
     */
    private $level3Data;

    /**
     * @param Level3Data5 $level3Data
     */
    public function __construct(Level3Data5 $level3Data)
    {
        $this->level3Data = $level3Data;
    }

    /**
     * Returns Level 3 Data.
     * Level 3 data object
     */
    public function getLevel3Data(): Level3Data5
    {
        return $this->level3Data;
    }

    /**
     * Sets Level 3 Data.
     * Level 3 data object
     *
     * @required
     * @maps level3_data
     */
    public function setLevel3Data(Level3Data5 $level3Data): void
    {
        $this->level3Data = $level3Data;
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
        $json['level3_data'] = $this->level3Data;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
