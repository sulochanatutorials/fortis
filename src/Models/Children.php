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
 * Children Information on `expand`
 */
class Children implements \JsonSerializable
{
    /**
     * @var string
     */
    private $locationId;

    /**
     * @var array
     */
    private $accountNumber = [];

    /**
     * @var array
     */
    private $contactApiId = [];

    /**
     * @var array
     */
    private $firstName = [];

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var array
     */
    private $cellPhone = [];

    /**
     * @var array
     */
    private $balance = [];

    /**
     * @var Address|null
     */
    private $address;

    /**
     * @var array
     */
    private $companyName = [];

    /**
     * @var array
     */
    private $headerMessage = [];

    /**
     * @var array
     */
    private $dateOfBirth = [];

    /**
     * @var bool
     */
    private $emailTrxReceipt;

    /**
     * @var array
     */
    private $homePhone = [];

    /**
     * @var array
     */
    private $officePhone = [];

    /**
     * @var array
     */
    private $officePhoneExt = [];

    /**
     * @var int
     */
    private $headerMessageType;

    /**
     * @var array
     */
    private $updateIfExists = [];

    /**
     * @var array
     */
    private $contactC1 = [];

    /**
     * @var array
     */
    private $contactC2 = [];

    /**
     * @var array
     */
    private $contactC3 = [];

    /**
     * @var array
     */
    private $parentId = [];

    /**
     * @var array
     */
    private $email = [];

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
     * @var bool
     */
    private $active;

    /**
     * @param string $locationId
     * @param string $lastName
     * @param bool $emailTrxReceipt
     * @param int $headerMessageType
     * @param string $id
     * @param int $createdTs
     * @param int $modifiedTs
     * @param bool $active
     */
    public function __construct(
        string $locationId,
        string $lastName,
        bool $emailTrxReceipt,
        int $headerMessageType,
        string $id,
        int $createdTs,
        int $modifiedTs,
        bool $active
    ) {
        $this->locationId = $locationId;
        $this->lastName = $lastName;
        $this->emailTrxReceipt = $emailTrxReceipt;
        $this->headerMessageType = $headerMessageType;
        $this->id = $id;
        $this->createdTs = $createdTs;
        $this->modifiedTs = $modifiedTs;
        $this->active = $active;
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
     * Returns Account Number.
     * Contact Account Number
     */
    public function getAccountNumber(): ?string
    {
        if (count($this->accountNumber) == 0) {
            return null;
        }
        return $this->accountNumber['value'];
    }

    /**
     * Sets Account Number.
     * Contact Account Number
     *
     * @maps account_number
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber['value'] = $accountNumber;
    }

    /**
     * Unsets Account Number.
     * Contact Account Number
     */
    public function unsetAccountNumber(): void
    {
        $this->accountNumber = [];
    }

    /**
     * Returns Contact Api Id.
     * Contact API Id
     */
    public function getContactApiId(): ?string
    {
        if (count($this->contactApiId) == 0) {
            return null;
        }
        return $this->contactApiId['value'];
    }

    /**
     * Sets Contact Api Id.
     * Contact API Id
     *
     * @maps contact_api_id
     */
    public function setContactApiId(?string $contactApiId): void
    {
        $this->contactApiId['value'] = $contactApiId;
    }

    /**
     * Unsets Contact Api Id.
     * Contact API Id
     */
    public function unsetContactApiId(): void
    {
        $this->contactApiId = [];
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
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * Last Name
     *
     * @required
     * @maps last_name
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Cell Phone.
     * Cell phone of contact
     */
    public function getCellPhone(): ?string
    {
        if (count($this->cellPhone) == 0) {
            return null;
        }
        return $this->cellPhone['value'];
    }

    /**
     * Sets Cell Phone.
     * Cell phone of contact
     *
     * @maps cell_phone
     */
    public function setCellPhone(?string $cellPhone): void
    {
        $this->cellPhone['value'] = $cellPhone;
    }

    /**
     * Unsets Cell Phone.
     * Cell phone of contact
     */
    public function unsetCellPhone(): void
    {
        $this->cellPhone = [];
    }

    /**
     * Returns Balance.
     * Balance
     */
    public function getBalance(): ?float
    {
        if (count($this->balance) == 0) {
            return null;
        }
        return $this->balance['value'];
    }

    /**
     * Sets Balance.
     * Balance
     *
     * @maps balance
     */
    public function setBalance(?float $balance): void
    {
        $this->balance['value'] = $balance;
    }

    /**
     * Unsets Balance.
     * Balance
     */
    public function unsetBalance(): void
    {
        $this->balance = [];
    }

    /**
     * Returns Address.
     * Address of contact
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * Address of contact
     *
     * @maps address
     */
    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Company Name.
     * Company Name
     */
    public function getCompanyName(): ?string
    {
        if (count($this->companyName) == 0) {
            return null;
        }
        return $this->companyName['value'];
    }

    /**
     * Sets Company Name.
     * Company Name
     *
     * @maps company_name
     */
    public function setCompanyName(?string $companyName): void
    {
        $this->companyName['value'] = $companyName;
    }

    /**
     * Unsets Company Name.
     * Company Name
     */
    public function unsetCompanyName(): void
    {
        $this->companyName = [];
    }

    /**
     * Returns Header Message.
     * Header Message
     */
    public function getHeaderMessage(): ?string
    {
        if (count($this->headerMessage) == 0) {
            return null;
        }
        return $this->headerMessage['value'];
    }

    /**
     * Sets Header Message.
     * Header Message
     *
     * @maps header_message
     */
    public function setHeaderMessage(?string $headerMessage): void
    {
        $this->headerMessage['value'] = $headerMessage;
    }

    /**
     * Unsets Header Message.
     * Header Message
     */
    public function unsetHeaderMessage(): void
    {
        $this->headerMessage = [];
    }

    /**
     * Returns Date of Birth.
     * Contacts DOB, Format: yyyy-MM-dd
     */
    public function getDateOfBirth(): ?string
    {
        if (count($this->dateOfBirth) == 0) {
            return null;
        }
        return $this->dateOfBirth['value'];
    }

    /**
     * Sets Date of Birth.
     * Contacts DOB, Format: yyyy-MM-dd
     *
     * @maps date_of_birth
     */
    public function setDateOfBirth(?string $dateOfBirth): void
    {
        $this->dateOfBirth['value'] = $dateOfBirth;
    }

    /**
     * Unsets Date of Birth.
     * Contacts DOB, Format: yyyy-MM-dd
     */
    public function unsetDateOfBirth(): void
    {
        $this->dateOfBirth = [];
    }

    /**
     * Returns Email Trx Receipt.
     * Whether or not to email all transactions receipts to contact (1 or 0)
     */
    public function getEmailTrxReceipt(): bool
    {
        return $this->emailTrxReceipt;
    }

    /**
     * Sets Email Trx Receipt.
     * Whether or not to email all transactions receipts to contact (1 or 0)
     *
     * @required
     * @maps email_trx_receipt
     */
    public function setEmailTrxReceipt(bool $emailTrxReceipt): void
    {
        $this->emailTrxReceipt = $emailTrxReceipt;
    }

    /**
     * Returns Home Phone.
     * Contacts home phone
     */
    public function getHomePhone(): ?string
    {
        if (count($this->homePhone) == 0) {
            return null;
        }
        return $this->homePhone['value'];
    }

    /**
     * Sets Home Phone.
     * Contacts home phone
     *
     * @maps home_phone
     */
    public function setHomePhone(?string $homePhone): void
    {
        $this->homePhone['value'] = $homePhone;
    }

    /**
     * Unsets Home Phone.
     * Contacts home phone
     */
    public function unsetHomePhone(): void
    {
        $this->homePhone = [];
    }

    /**
     * Returns Office Phone.
     * Contacts office phone
     */
    public function getOfficePhone(): ?string
    {
        if (count($this->officePhone) == 0) {
            return null;
        }
        return $this->officePhone['value'];
    }

    /**
     * Sets Office Phone.
     * Contacts office phone
     *
     * @maps office_phone
     */
    public function setOfficePhone(?string $officePhone): void
    {
        $this->officePhone['value'] = $officePhone;
    }

    /**
     * Unsets Office Phone.
     * Contacts office phone
     */
    public function unsetOfficePhone(): void
    {
        $this->officePhone = [];
    }

    /**
     * Returns Office Phone Ext.
     * Contacts office phone extension for office phone
     */
    public function getOfficePhoneExt(): ?string
    {
        if (count($this->officePhoneExt) == 0) {
            return null;
        }
        return $this->officePhoneExt['value'];
    }

    /**
     * Sets Office Phone Ext.
     * Contacts office phone extension for office phone
     *
     * @maps office_phone_ext
     */
    public function setOfficePhoneExt(?string $officePhoneExt): void
    {
        $this->officePhoneExt['value'] = $officePhoneExt;
    }

    /**
     * Unsets Office Phone Ext.
     * Contacts office phone extension for office phone
     */
    public function unsetOfficePhoneExt(): void
    {
        $this->officePhoneExt = [];
    }

    /**
     * Returns Header Message Type.
     * Header Message Type
     */
    public function getHeaderMessageType(): int
    {
        return $this->headerMessageType;
    }

    /**
     * Sets Header Message Type.
     * Header Message Type
     *
     * @required
     * @maps header_message_type
     */
    public function setHeaderMessageType(int $headerMessageType): void
    {
        $this->headerMessageType = $headerMessageType;
    }

    /**
     * Returns Update If Exists.
     * Update If Exists
     */
    public function getUpdateIfExists(): ?int
    {
        if (count($this->updateIfExists) == 0) {
            return null;
        }
        return $this->updateIfExists['value'];
    }

    /**
     * Sets Update If Exists.
     * Update If Exists
     *
     * @maps update_if_exists
     * @factory \FortisAPILib\Models\UpdateIfExistsEnum::checkValue
     */
    public function setUpdateIfExists(?int $updateIfExists): void
    {
        $this->updateIfExists['value'] = $updateIfExists;
    }

    /**
     * Unsets Update If Exists.
     * Update If Exists
     */
    public function unsetUpdateIfExists(): void
    {
        $this->updateIfExists = [];
    }

    /**
     * Returns Contact C1.
     * Custom field 1 for api users to store custom data
     */
    public function getContactC1(): ?string
    {
        if (count($this->contactC1) == 0) {
            return null;
        }
        return $this->contactC1['value'];
    }

    /**
     * Sets Contact C1.
     * Custom field 1 for api users to store custom data
     *
     * @maps contact_c1
     */
    public function setContactC1(?string $contactC1): void
    {
        $this->contactC1['value'] = $contactC1;
    }

    /**
     * Unsets Contact C1.
     * Custom field 1 for api users to store custom data
     */
    public function unsetContactC1(): void
    {
        $this->contactC1 = [];
    }

    /**
     * Returns Contact C2.
     * Custom field 2 for api users to store custom data
     */
    public function getContactC2(): ?string
    {
        if (count($this->contactC2) == 0) {
            return null;
        }
        return $this->contactC2['value'];
    }

    /**
     * Sets Contact C2.
     * Custom field 2 for api users to store custom data
     *
     * @maps contact_c2
     */
    public function setContactC2(?string $contactC2): void
    {
        $this->contactC2['value'] = $contactC2;
    }

    /**
     * Unsets Contact C2.
     * Custom field 2 for api users to store custom data
     */
    public function unsetContactC2(): void
    {
        $this->contactC2 = [];
    }

    /**
     * Returns Contact C3.
     * Custom field 3 for api users to store custom data
     */
    public function getContactC3(): ?string
    {
        if (count($this->contactC3) == 0) {
            return null;
        }
        return $this->contactC3['value'];
    }

    /**
     * Sets Contact C3.
     * Custom field 3 for api users to store custom data
     *
     * @maps contact_c3
     */
    public function setContactC3(?string $contactC3): void
    {
        $this->contactC3['value'] = $contactC3;
    }

    /**
     * Unsets Contact C3.
     * Custom field 3 for api users to store custom data
     */
    public function unsetContactC3(): void
    {
        $this->contactC3 = [];
    }

    /**
     * Returns Parent Id.
     * Parent Id
     */
    public function getParentId(): ?string
    {
        if (count($this->parentId) == 0) {
            return null;
        }
        return $this->parentId['value'];
    }

    /**
     * Sets Parent Id.
     * Parent Id
     *
     * @maps parent_id
     */
    public function setParentId(?string $parentId): void
    {
        $this->parentId['value'] = $parentId;
    }

    /**
     * Unsets Parent Id.
     * Parent Id
     */
    public function unsetParentId(): void
    {
        $this->parentId = [];
    }

    /**
     * Returns Email.
     * Email of contact
     */
    public function getEmail(): ?string
    {
        if (count($this->email) == 0) {
            return null;
        }
        return $this->email['value'];
    }

    /**
     * Sets Email.
     * Email of contact
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email['value'] = $email;
    }

    /**
     * Unsets Email.
     * Email of contact
     */
    public function unsetEmail(): void
    {
        $this->email = [];
    }

    /**
     * Returns Id.
     * Contact ID
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Contact ID
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
        $json['location_id']          = $this->locationId;
        if (!empty($this->accountNumber)) {
            $json['account_number']   = $this->accountNumber['value'];
        }
        if (!empty($this->contactApiId)) {
            $json['contact_api_id']   = $this->contactApiId['value'];
        }
        if (!empty($this->firstName)) {
            $json['first_name']       = $this->firstName['value'];
        }
        $json['last_name']            = $this->lastName;
        if (!empty($this->cellPhone)) {
            $json['cell_phone']       = $this->cellPhone['value'];
        }
        if (!empty($this->balance)) {
            $json['balance']          = $this->balance['value'];
        }
        if (isset($this->address)) {
            $json['address']          = $this->address;
        }
        if (!empty($this->companyName)) {
            $json['company_name']     = $this->companyName['value'];
        }
        if (!empty($this->headerMessage)) {
            $json['header_message']   = $this->headerMessage['value'];
        }
        if (!empty($this->dateOfBirth)) {
            $json['date_of_birth']    = $this->dateOfBirth['value'];
        }
        $json['email_trx_receipt']    = $this->emailTrxReceipt;
        if (!empty($this->homePhone)) {
            $json['home_phone']       = $this->homePhone['value'];
        }
        if (!empty($this->officePhone)) {
            $json['office_phone']     = $this->officePhone['value'];
        }
        if (!empty($this->officePhoneExt)) {
            $json['office_phone_ext'] = $this->officePhoneExt['value'];
        }
        $json['header_message_type']  = $this->headerMessageType;
        if (!empty($this->updateIfExists)) {
            $json['update_if_exists'] = UpdateIfExistsEnum::checkValue($this->updateIfExists['value']);
        }
        if (!empty($this->contactC1)) {
            $json['contact_c1']       = $this->contactC1['value'];
        }
        if (!empty($this->contactC2)) {
            $json['contact_c2']       = $this->contactC2['value'];
        }
        if (!empty($this->contactC3)) {
            $json['contact_c3']       = $this->contactC3['value'];
        }
        if (!empty($this->parentId)) {
            $json['parent_id']        = $this->parentId['value'];
        }
        if (!empty($this->email)) {
            $json['email']            = $this->email['value'];
        }
        $json['id']                   = $this->id;
        $json['created_ts']           = $this->createdTs;
        $json['modified_ts']          = $this->modifiedTs;
        $json['active']               = $this->active;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
