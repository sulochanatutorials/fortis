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
 * Developer Company Information on `expand`
 */
class DeveloperCompany implements \JsonSerializable
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string
     */
    private $id;

    /**
     * @var bool
     */
    private $active;

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
     * @var array
     */
    private $modifiedUserId = [];

    /**
     * @param string $title
     * @param string $id
     * @param bool $active
     * @param int $createdTs
     * @param int $modifiedTs
     */
    public function __construct(string $title, string $id, bool $active, int $createdTs, int $modifiedTs)
    {
        $this->title = $title;
        $this->id = $id;
        $this->active = $active;
        $this->createdTs = $createdTs;
        $this->modifiedTs = $modifiedTs;
    }

    /**
     * Returns Title.
     * Title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     * Title
     *
     * @required
     * @maps title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Description.
     * Description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Description
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Id.
     * Developer Company Id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Developer Company Id
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Active.
     * Active
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Sets Active.
     * Active
     *
     * @required
     * @maps active
     */
    public function setActive(bool $active): void
    {
        $this->active = $active;
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
     * Returns Modified User Id.
     * Last User ID that updated the register
     */
    public function getModifiedUserId(): ?string
    {
        if (count($this->modifiedUserId) == 0) {
            return null;
        }
        return $this->modifiedUserId['value'];
    }

    /**
     * Sets Modified User Id.
     * Last User ID that updated the register
     *
     * @maps modified_user_id
     */
    public function setModifiedUserId(?string $modifiedUserId): void
    {
        $this->modifiedUserId['value'] = $modifiedUserId;
    }

    /**
     * Unsets Modified User Id.
     * Last User ID that updated the register
     */
    public function unsetModifiedUserId(): void
    {
        $this->modifiedUserId = [];
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
        $json['title']                = $this->title;
        if (isset($this->description)) {
            $json['description']      = $this->description;
        }
        $json['id']                   = $this->id;
        $json['active']               = $this->active;
        $json['created_ts']           = $this->createdTs;
        $json['modified_ts']          = $this->modifiedTs;
        if (!empty($this->createdUserId)) {
            $json['created_user_id']  = $this->createdUserId['value'];
        }
        if (!empty($this->modifiedUserId)) {
            $json['modified_user_id'] = $this->modifiedUserId['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
