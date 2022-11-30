<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class ResponseTransactionsCollection implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var List12[]
     */
    private $list;

    /**
     * @var Links|null
     */
    private $links;

    /**
     * @var Pagination|null
     */
    private $pagination;

    /**
     * @var Sort|null
     */
    private $sort;

    /**
     * @param List12[] $list
     */
    public function __construct(array $list)
    {
        $this->list = $list;
    }

    /**
     * Returns Type.
     * Resource Type
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Resource Type
     *
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns List.
     * Resource Members
     *
     * @return List12[]
     */
    public function getList(): array
    {
        return $this->list;
    }

    /**
     * Sets List.
     * Resource Members
     *
     * @required
     * @maps list
     *
     * @param List12[] $list
     */
    public function setList(array $list): void
    {
        $this->list = $list;
    }

    /**
     * Returns Links.
     * Pagination page links
     */
    public function getLinks(): ?Links
    {
        return $this->links;
    }

    /**
     * Sets Links.
     * Pagination page links
     *
     * @maps links
     */
    public function setLinks(?Links $links): void
    {
        $this->links = $links;
    }

    /**
     * Returns Pagination.
     * Pagination info
     */
    public function getPagination(): ?Pagination
    {
        return $this->pagination;
    }

    /**
     * Sets Pagination.
     * Pagination info
     *
     * @maps pagination
     */
    public function setPagination(?Pagination $pagination): void
    {
        $this->pagination = $pagination;
    }

    /**
     * Returns Sort.
     * Sort information used on the results
     */
    public function getSort(): ?Sort
    {
        return $this->sort;
    }

    /**
     * Sets Sort.
     * Sort information used on the results
     *
     * @maps sort
     */
    public function setSort(?Sort $sort): void
    {
        $this->sort = $sort;
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
        $json['type']           = $this->type;
        $json['list']           = $this->list;
        if (isset($this->links)) {
            $json['links']      = $this->links;
        }
        if (isset($this->pagination)) {
            $json['pagination'] = $this->pagination;
        }
        if (isset($this->sort)) {
            $json['sort']       = $this->sort;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
