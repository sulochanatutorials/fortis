<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class Field12 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $fieldType;

    /**
     * @var string[]
     */
    private $position;

    /**
     * @var bool|null
     */
    private $required;

    /**
     * @var bool|null
     */
    private $readonly;

    /**
     * @var bool|null
     */
    private $visible;

    /**
     * @var array
     */
    private $value = [];

    /**
     * @param string $id
     * @param string $label
     * @param string $fieldType
     * @param string[] $position
     */
    public function __construct(string $id, string $label, string $fieldType, array $position)
    {
        $this->id = $id;
        $this->label = $label;
        $this->fieldType = $fieldType;
        $this->position = $position;
    }

    /**
     * Returns Id.
     * id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * id
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Label.
     * Label
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Sets Label.
     * Label
     *
     * @required
     * @maps label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    /**
     * Returns Field Type.
     * Field Type
     */
    public function getFieldType(): string
    {
        return $this->fieldType;
    }

    /**
     * Sets Field Type.
     * Field Type
     *
     * @required
     * @maps field_type
     */
    public function setFieldType(string $fieldType): void
    {
        $this->fieldType = $fieldType;
    }

    /**
     * Returns Position.
     * Position
     *
     * @return string[]
     */
    public function getPosition(): array
    {
        return $this->position;
    }

    /**
     * Sets Position.
     * Position
     *
     * @required
     * @maps position
     *
     * @param string[] $position
     */
    public function setPosition(array $position): void
    {
        $this->position = $position;
    }

    /**
     * Returns Required.
     * Required
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }

    /**
     * Sets Required.
     * Required
     *
     * @maps required
     */
    public function setRequired(?bool $required): void
    {
        $this->required = $required;
    }

    /**
     * Returns Readonly.
     * Read Only
     */
    public function getReadonly(): ?bool
    {
        return $this->readonly;
    }

    /**
     * Sets Readonly.
     * Read Only
     *
     * @maps readonly
     */
    public function setReadonly(?bool $readonly): void
    {
        $this->readonly = $readonly;
    }

    /**
     * Returns Visible.
     * Visible
     */
    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    /**
     * Sets Visible.
     * Visible
     *
     * @maps visible
     */
    public function setVisible(?bool $visible): void
    {
        $this->visible = $visible;
    }

    /**
     * Returns Value.
     * Value
     */
    public function getValue(): ?string
    {
        if (count($this->value) == 0) {
            return null;
        }
        return $this->value['value'];
    }

    /**
     * Sets Value.
     * Value
     *
     * @maps value
     */
    public function setValue(?string $value): void
    {
        $this->value['value'] = $value;
    }

    /**
     * Unsets Value.
     * Value
     */
    public function unsetValue(): void
    {
        $this->value = [];
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
        $json['id']           = $this->id;
        $json['label']        = $this->label;
        $json['field_type']   = $this->fieldType;
        $json['position']     = $this->position;
        if (isset($this->required)) {
            $json['required'] = $this->required;
        }
        if (isset($this->readonly)) {
            $json['readonly'] = $this->readonly;
        }
        if (isset($this->visible)) {
            $json['visible']  = $this->visible;
        }
        if (!empty($this->value)) {
            $json['value']    = $this->value['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
