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
 * You can use any `field_name` from this endpoint results as a filter, and you can also use more than
 * one field to create AND conditions. For date fields (ended with `_ts`), you can also search for
 * ranges using the `$gte` (Greater than or equal to) and/or  `$lte` (Lower than or equal to). You can
 * use one of the following methods:
 * >/endpoint?filter={ "field_name": "Value" }
 * >
 * >/endpoint?filter[field_name]=Value
 * >
 * >/endpoint?filter={ "created_ts": "today" }
 * >
 * >/endpoint?filter[created_ts]=today
 * >
 * >/endpoint?filter={ "created_ts": { "$gte": "yesterday", "$lte": "today" } }
 * >
 * >/endpoint?filter[created_ts][$gte]=yesterday&filter[created_ts][$lte]=today
 * >
 */
class Filter1 implements \JsonSerializable
{
    /**
     * @var array|null
     */
    private $locationId;

    /**
     * @var array|null
     */
    private $accountNumber;

    /**
     * @var array|null
     */
    private $contactApiId;

    /**
     * @var array|null
     */
    private $firstName;

    /**
     * @var array|null
     */
    private $lastName;

    /**
     * @var array|null
     */
    private $cellPhone;

    /**
     * @var array|null
     */
    private $balance;

    /**
     * @var array|null
     */
    private $address;

    /**
     * @var array|null
     */
    private $companyName;

    /**
     * @var array|null
     */
    private $headerMessage;

    /**
     * @var array|null
     */
    private $dateOfBirth;

    /**
     * @var array|null
     */
    private $emailTrxReceipt;

    /**
     * @var array|null
     */
    private $homePhone;

    /**
     * @var array|null
     */
    private $officePhone;

    /**
     * @var array|null
     */
    private $officePhoneExt;

    /**
     * @var array|null
     */
    private $headerMessageType;

    /**
     * @var array|null
     */
    private $updateIfExists;

    /**
     * @var array|null
     */
    private $contactC1;

    /**
     * @var array|null
     */
    private $contactC2;

    /**
     * @var array|null
     */
    private $contactC3;

    /**
     * @var array|null
     */
    private $parentId;

    /**
     * @var array|null
     */
    private $email;

    /**
     * @var array|null
     */
    private $id;

    /**
     * @var CreatedTs1|null
     */
    private $createdTs;

    /**
     * @var ModifiedTs1|null
     */
    private $modifiedTs;

    /**
     * @var array|null
     */
    private $active;

    /**
     * @var array|null
     */
    private $receivedEmails;

    /**
     * @var array|null
     */
    private $isDeletable;

    /**
     * @var array|null
     */
    private $location;

    /**
     * @var array|null
     */
    private $user;

    /**
     * @var array|null
     */
    private $recurrings;

    /**
     * @var array|null
     */
    private $emailBlacklist;

    /**
     * @var array|null
     */
    private $smsBlacklist;

    /**
     * @var array|null
     */
    private $changelogs;

    /**
     * @var array|null
     */
    private $postbackLogs;

    /**
     * @var array|null
     */
    private $createdUser;

    /**
     * @var array|null
     */
    private $parent;

    /**
     * @var array|null
     */
    private $children;

    /**
     * Returns Location Id.
     */
    public function getLocationId(): ?array
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     *
     * @maps location_id
     */
    public function setLocationId(?array $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Account Number.
     */
    public function getAccountNumber(): ?array
    {
        return $this->accountNumber;
    }

    /**
     * Sets Account Number.
     *
     * @maps account_number
     */
    public function setAccountNumber(?array $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * Returns Contact Api Id.
     */
    public function getContactApiId(): ?array
    {
        return $this->contactApiId;
    }

    /**
     * Sets Contact Api Id.
     *
     * @maps contact_api_id
     */
    public function setContactApiId(?array $contactApiId): void
    {
        $this->contactApiId = $contactApiId;
    }

    /**
     * Returns First Name.
     */
    public function getFirstName(): ?array
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     *
     * @maps first_name
     */
    public function setFirstName(?array $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     */
    public function getLastName(): ?array
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     *
     * @maps last_name
     */
    public function setLastName(?array $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Cell Phone.
     */
    public function getCellPhone(): ?array
    {
        return $this->cellPhone;
    }

    /**
     * Sets Cell Phone.
     *
     * @maps cell_phone
     */
    public function setCellPhone(?array $cellPhone): void
    {
        $this->cellPhone = $cellPhone;
    }

    /**
     * Returns Balance.
     */
    public function getBalance(): ?array
    {
        return $this->balance;
    }

    /**
     * Sets Balance.
     *
     * @maps balance
     */
    public function setBalance(?array $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * Returns Address.
     */
    public function getAddress(): ?array
    {
        return $this->address;
    }

    /**
     * Sets Address.
     *
     * @maps address
     */
    public function setAddress(?array $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Company Name.
     */
    public function getCompanyName(): ?array
    {
        return $this->companyName;
    }

    /**
     * Sets Company Name.
     *
     * @maps company_name
     */
    public function setCompanyName(?array $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * Returns Header Message.
     */
    public function getHeaderMessage(): ?array
    {
        return $this->headerMessage;
    }

    /**
     * Sets Header Message.
     *
     * @maps header_message
     */
    public function setHeaderMessage(?array $headerMessage): void
    {
        $this->headerMessage = $headerMessage;
    }

    /**
     * Returns Date of Birth.
     */
    public function getDateOfBirth(): ?array
    {
        return $this->dateOfBirth;
    }

    /**
     * Sets Date of Birth.
     *
     * @maps date_of_birth
     */
    public function setDateOfBirth(?array $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * Returns Email Trx Receipt.
     */
    public function getEmailTrxReceipt(): ?array
    {
        return $this->emailTrxReceipt;
    }

    /**
     * Sets Email Trx Receipt.
     *
     * @maps email_trx_receipt
     */
    public function setEmailTrxReceipt(?array $emailTrxReceipt): void
    {
        $this->emailTrxReceipt = $emailTrxReceipt;
    }

    /**
     * Returns Home Phone.
     */
    public function getHomePhone(): ?array
    {
        return $this->homePhone;
    }

    /**
     * Sets Home Phone.
     *
     * @maps home_phone
     */
    public function setHomePhone(?array $homePhone): void
    {
        $this->homePhone = $homePhone;
    }

    /**
     * Returns Office Phone.
     */
    public function getOfficePhone(): ?array
    {
        return $this->officePhone;
    }

    /**
     * Sets Office Phone.
     *
     * @maps office_phone
     */
    public function setOfficePhone(?array $officePhone): void
    {
        $this->officePhone = $officePhone;
    }

    /**
     * Returns Office Phone Ext.
     */
    public function getOfficePhoneExt(): ?array
    {
        return $this->officePhoneExt;
    }

    /**
     * Sets Office Phone Ext.
     *
     * @maps office_phone_ext
     */
    public function setOfficePhoneExt(?array $officePhoneExt): void
    {
        $this->officePhoneExt = $officePhoneExt;
    }

    /**
     * Returns Header Message Type.
     */
    public function getHeaderMessageType(): ?array
    {
        return $this->headerMessageType;
    }

    /**
     * Sets Header Message Type.
     *
     * @maps header_message_type
     */
    public function setHeaderMessageType(?array $headerMessageType): void
    {
        $this->headerMessageType = $headerMessageType;
    }

    /**
     * Returns Update If Exists.
     */
    public function getUpdateIfExists(): ?array
    {
        return $this->updateIfExists;
    }

    /**
     * Sets Update If Exists.
     *
     * @maps update_if_exists
     */
    public function setUpdateIfExists(?array $updateIfExists): void
    {
        $this->updateIfExists = $updateIfExists;
    }

    /**
     * Returns Contact C1.
     */
    public function getContactC1(): ?array
    {
        return $this->contactC1;
    }

    /**
     * Sets Contact C1.
     *
     * @maps contact_c1
     */
    public function setContactC1(?array $contactC1): void
    {
        $this->contactC1 = $contactC1;
    }

    /**
     * Returns Contact C2.
     */
    public function getContactC2(): ?array
    {
        return $this->contactC2;
    }

    /**
     * Sets Contact C2.
     *
     * @maps contact_c2
     */
    public function setContactC2(?array $contactC2): void
    {
        $this->contactC2 = $contactC2;
    }

    /**
     * Returns Contact C3.
     */
    public function getContactC3(): ?array
    {
        return $this->contactC3;
    }

    /**
     * Sets Contact C3.
     *
     * @maps contact_c3
     */
    public function setContactC3(?array $contactC3): void
    {
        $this->contactC3 = $contactC3;
    }

    /**
     * Returns Parent Id.
     */
    public function getParentId(): ?array
    {
        return $this->parentId;
    }

    /**
     * Sets Parent Id.
     *
     * @maps parent_id
     */
    public function setParentId(?array $parentId): void
    {
        $this->parentId = $parentId;
    }

    /**
     * Returns Email.
     */
    public function getEmail(): ?array
    {
        return $this->email;
    }

    /**
     * Sets Email.
     *
     * @maps email
     */
    public function setEmail(?array $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Id.
     */
    public function getId(): ?array
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?array $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Created Ts.
     */
    public function getCreatedTs(): ?CreatedTs1
    {
        return $this->createdTs;
    }

    /**
     * Sets Created Ts.
     *
     * @maps created_ts
     */
    public function setCreatedTs(?CreatedTs1 $createdTs): void
    {
        $this->createdTs = $createdTs;
    }

    /**
     * Returns Modified Ts.
     */
    public function getModifiedTs(): ?ModifiedTs1
    {
        return $this->modifiedTs;
    }

    /**
     * Sets Modified Ts.
     *
     * @maps modified_ts
     */
    public function setModifiedTs(?ModifiedTs1 $modifiedTs): void
    {
        $this->modifiedTs = $modifiedTs;
    }

    /**
     * Returns Active.
     */
    public function getActive(): ?array
    {
        return $this->active;
    }

    /**
     * Sets Active.
     *
     * @maps active
     */
    public function setActive(?array $active): void
    {
        $this->active = $active;
    }

    /**
     * Returns Received Emails.
     */
    public function getReceivedEmails(): ?array
    {
        return $this->receivedEmails;
    }

    /**
     * Sets Received Emails.
     *
     * @maps received_emails
     */
    public function setReceivedEmails(?array $receivedEmails): void
    {
        $this->receivedEmails = $receivedEmails;
    }

    /**
     * Returns Is Deletable.
     */
    public function getIsDeletable(): ?array
    {
        return $this->isDeletable;
    }

    /**
     * Sets Is Deletable.
     *
     * @maps is_deletable
     */
    public function setIsDeletable(?array $isDeletable): void
    {
        $this->isDeletable = $isDeletable;
    }

    /**
     * Returns Location.
     */
    public function getLocation(): ?array
    {
        return $this->location;
    }

    /**
     * Sets Location.
     *
     * @maps location
     */
    public function setLocation(?array $location): void
    {
        $this->location = $location;
    }

    /**
     * Returns User.
     */
    public function getUser(): ?array
    {
        return $this->user;
    }

    /**
     * Sets User.
     *
     * @maps user
     */
    public function setUser(?array $user): void
    {
        $this->user = $user;
    }

    /**
     * Returns Recurrings.
     */
    public function getRecurrings(): ?array
    {
        return $this->recurrings;
    }

    /**
     * Sets Recurrings.
     *
     * @maps recurrings
     */
    public function setRecurrings(?array $recurrings): void
    {
        $this->recurrings = $recurrings;
    }

    /**
     * Returns Email Blacklist.
     */
    public function getEmailBlacklist(): ?array
    {
        return $this->emailBlacklist;
    }

    /**
     * Sets Email Blacklist.
     *
     * @maps email_blacklist
     */
    public function setEmailBlacklist(?array $emailBlacklist): void
    {
        $this->emailBlacklist = $emailBlacklist;
    }

    /**
     * Returns Sms Blacklist.
     */
    public function getSmsBlacklist(): ?array
    {
        return $this->smsBlacklist;
    }

    /**
     * Sets Sms Blacklist.
     *
     * @maps sms_blacklist
     */
    public function setSmsBlacklist(?array $smsBlacklist): void
    {
        $this->smsBlacklist = $smsBlacklist;
    }

    /**
     * Returns Changelogs.
     */
    public function getChangelogs(): ?array
    {
        return $this->changelogs;
    }

    /**
     * Sets Changelogs.
     *
     * @maps changelogs
     */
    public function setChangelogs(?array $changelogs): void
    {
        $this->changelogs = $changelogs;
    }

    /**
     * Returns Postback Logs.
     */
    public function getPostbackLogs(): ?array
    {
        return $this->postbackLogs;
    }

    /**
     * Sets Postback Logs.
     *
     * @maps postback_logs
     */
    public function setPostbackLogs(?array $postbackLogs): void
    {
        $this->postbackLogs = $postbackLogs;
    }

    /**
     * Returns Created User.
     */
    public function getCreatedUser(): ?array
    {
        return $this->createdUser;
    }

    /**
     * Sets Created User.
     *
     * @maps created_user
     */
    public function setCreatedUser(?array $createdUser): void
    {
        $this->createdUser = $createdUser;
    }

    /**
     * Returns Parent.
     */
    public function getParent(): ?array
    {
        return $this->parent;
    }

    /**
     * Sets Parent.
     *
     * @maps parent
     */
    public function setParent(?array $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * Returns Children.
     */
    public function getChildren(): ?array
    {
        return $this->children;
    }

    /**
     * Sets Children.
     *
     * @maps children
     */
    public function setChildren(?array $children): void
    {
        $this->children = $children;
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
        if (isset($this->locationId)) {
            $json['location_id']         = $this->locationId;
        }
        if (isset($this->accountNumber)) {
            $json['account_number']      = $this->accountNumber;
        }
        if (isset($this->contactApiId)) {
            $json['contact_api_id']      = $this->contactApiId;
        }
        if (isset($this->firstName)) {
            $json['first_name']          = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['last_name']           = $this->lastName;
        }
        if (isset($this->cellPhone)) {
            $json['cell_phone']          = $this->cellPhone;
        }
        if (isset($this->balance)) {
            $json['balance']             = $this->balance;
        }
        if (isset($this->address)) {
            $json['address']             = $this->address;
        }
        if (isset($this->companyName)) {
            $json['company_name']        = $this->companyName;
        }
        if (isset($this->headerMessage)) {
            $json['header_message']      = $this->headerMessage;
        }
        if (isset($this->dateOfBirth)) {
            $json['date_of_birth']       = $this->dateOfBirth;
        }
        if (isset($this->emailTrxReceipt)) {
            $json['email_trx_receipt']   = $this->emailTrxReceipt;
        }
        if (isset($this->homePhone)) {
            $json['home_phone']          = $this->homePhone;
        }
        if (isset($this->officePhone)) {
            $json['office_phone']        = $this->officePhone;
        }
        if (isset($this->officePhoneExt)) {
            $json['office_phone_ext']    = $this->officePhoneExt;
        }
        if (isset($this->headerMessageType)) {
            $json['header_message_type'] = $this->headerMessageType;
        }
        if (isset($this->updateIfExists)) {
            $json['update_if_exists']    = $this->updateIfExists;
        }
        if (isset($this->contactC1)) {
            $json['contact_c1']          = $this->contactC1;
        }
        if (isset($this->contactC2)) {
            $json['contact_c2']          = $this->contactC2;
        }
        if (isset($this->contactC3)) {
            $json['contact_c3']          = $this->contactC3;
        }
        if (isset($this->parentId)) {
            $json['parent_id']           = $this->parentId;
        }
        if (isset($this->email)) {
            $json['email']               = $this->email;
        }
        if (isset($this->id)) {
            $json['id']                  = $this->id;
        }
        if (isset($this->createdTs)) {
            $json['created_ts']          = $this->createdTs;
        }
        if (isset($this->modifiedTs)) {
            $json['modified_ts']         = $this->modifiedTs;
        }
        if (isset($this->active)) {
            $json['active']              = $this->active;
        }
        if (isset($this->receivedEmails)) {
            $json['received_emails']     = $this->receivedEmails;
        }
        if (isset($this->isDeletable)) {
            $json['is_deletable']        = $this->isDeletable;
        }
        if (isset($this->location)) {
            $json['location']            = $this->location;
        }
        if (isset($this->user)) {
            $json['user']                = $this->user;
        }
        if (isset($this->recurrings)) {
            $json['recurrings']          = $this->recurrings;
        }
        if (isset($this->emailBlacklist)) {
            $json['email_blacklist']     = $this->emailBlacklist;
        }
        if (isset($this->smsBlacklist)) {
            $json['sms_blacklist']       = $this->smsBlacklist;
        }
        if (isset($this->changelogs)) {
            $json['changelogs']          = $this->changelogs;
        }
        if (isset($this->postbackLogs)) {
            $json['postback_logs']       = $this->postbackLogs;
        }
        if (isset($this->createdUser)) {
            $json['created_user']        = $this->createdUser;
        }
        if (isset($this->parent)) {
            $json['parent']              = $this->parent;
        }
        if (isset($this->children)) {
            $json['children']            = $this->children;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
