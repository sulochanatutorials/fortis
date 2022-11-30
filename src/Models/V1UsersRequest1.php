<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class V1UsersRequest1 implements \JsonSerializable
{
    /**
     * @var array
     */
    private $accountNumber = [];

    /**
     * @var array
     */
    private $address = [];

    /**
     * @var array
     */
    private $brandingDomainUrl = [];

    /**
     * @var array
     */
    private $cellPhone = [];

    /**
     * @var array
     */
    private $city = [];

    /**
     * @var array
     */
    private $companyName = [];

    /**
     * @var array
     */
    private $contactId = [];

    /**
     * @var array
     */
    private $dateOfBirth = [];

    /**
     * @var array
     */
    private $domainId = [];

    /**
     * @var array
     */
    private $email = [];

    /**
     * @var bool|null
     */
    private $emailTrxReceipt;

    /**
     * @var array
     */
    private $homePhone = [];

    /**
     * @var array
     */
    private $firstName = [];

    /**
     * @var array
     */
    private $lastName = [];

    /**
     * @var array
     */
    private $locale = [];

    /**
     * @var array
     */
    private $officePhone = [];

    /**
     * @var array
     */
    private $officeExtPhone = [];

    /**
     * @var array
     */
    private $primaryLocationId = [];

    /**
     * @var array
     */
    private $requiresNewPassword = [];

    /**
     * @var array
     */
    private $state = [];

    /**
     * @var array
     */
    private $termsConditionCode = [];

    /**
     * @var array
     */
    private $tz = [];

    /**
     * @var UiPrefs|null
     */
    private $uiPrefs;

    /**
     * @var array
     */
    private $username = [];

    /**
     * @var array
     */
    private $userApiKey = [];

    /**
     * @var array
     */
    private $userHashKey = [];

    /**
     * @var array
     */
    private $userTypeCode = [];

    /**
     * @var array
     */
    private $password = [];

    /**
     * @var array
     */
    private $zip = [];

    /**
     * @var array
     */
    private $locationId = [];

    /**
     * @var array
     */
    private $contactApiId = [];

    /**
     * @var array
     */
    private $primaryLocationApiId = [];

    /**
     * @var bool|null
     */
    private $statusId;

    /**
     * Returns Account Number.
     * Account Number
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
     * Account Number
     *
     * @maps account_number
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber['value'] = $accountNumber;
    }

    /**
     * Unsets Account Number.
     * Account Number
     */
    public function unsetAccountNumber(): void
    {
        $this->accountNumber = [];
    }

    /**
     * Returns Address.
     * Address
     */
    public function getAddress(): ?string
    {
        if (count($this->address) == 0) {
            return null;
        }
        return $this->address['value'];
    }

    /**
     * Sets Address.
     * Address
     *
     * @maps address
     */
    public function setAddress(?string $address): void
    {
        $this->address['value'] = $address;
    }

    /**
     * Unsets Address.
     * Address
     */
    public function unsetAddress(): void
    {
        $this->address = [];
    }

    /**
     * Returns Branding Domain Url.
     * Branding Domain Url
     */
    public function getBrandingDomainUrl(): ?string
    {
        if (count($this->brandingDomainUrl) == 0) {
            return null;
        }
        return $this->brandingDomainUrl['value'];
    }

    /**
     * Sets Branding Domain Url.
     * Branding Domain Url
     *
     * @maps branding_domain_url
     */
    public function setBrandingDomainUrl(?string $brandingDomainUrl): void
    {
        $this->brandingDomainUrl['value'] = $brandingDomainUrl;
    }

    /**
     * Unsets Branding Domain Url.
     * Branding Domain Url
     */
    public function unsetBrandingDomainUrl(): void
    {
        $this->brandingDomainUrl = [];
    }

    /**
     * Returns Cell Phone.
     * Cell Phone
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
     * Cell Phone
     *
     * @maps cell_phone
     */
    public function setCellPhone(?string $cellPhone): void
    {
        $this->cellPhone['value'] = $cellPhone;
    }

    /**
     * Unsets Cell Phone.
     * Cell Phone
     */
    public function unsetCellPhone(): void
    {
        $this->cellPhone = [];
    }

    /**
     * Returns City.
     * City
     */
    public function getCity(): ?string
    {
        if (count($this->city) == 0) {
            return null;
        }
        return $this->city['value'];
    }

    /**
     * Sets City.
     * City
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city['value'] = $city;
    }

    /**
     * Unsets City.
     * City
     */
    public function unsetCity(): void
    {
        $this->city = [];
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
     * Returns Contact Id.
     * Contact
     */
    public function getContactId(): ?string
    {
        if (count($this->contactId) == 0) {
            return null;
        }
        return $this->contactId['value'];
    }

    /**
     * Sets Contact Id.
     * Contact
     *
     * @maps contact_id
     */
    public function setContactId(?string $contactId): void
    {
        $this->contactId['value'] = $contactId;
    }

    /**
     * Unsets Contact Id.
     * Contact
     */
    public function unsetContactId(): void
    {
        $this->contactId = [];
    }

    /**
     * Returns Date of Birth.
     * Date Of Birth
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
     * Date Of Birth
     *
     * @maps date_of_birth
     */
    public function setDateOfBirth(?string $dateOfBirth): void
    {
        $this->dateOfBirth['value'] = $dateOfBirth;
    }

    /**
     * Unsets Date of Birth.
     * Date Of Birth
     */
    public function unsetDateOfBirth(): void
    {
        $this->dateOfBirth = [];
    }

    /**
     * Returns Domain Id.
     * Domain
     */
    public function getDomainId(): ?string
    {
        if (count($this->domainId) == 0) {
            return null;
        }
        return $this->domainId['value'];
    }

    /**
     * Sets Domain Id.
     * Domain
     *
     * @maps domain_id
     */
    public function setDomainId(?string $domainId): void
    {
        $this->domainId['value'] = $domainId;
    }

    /**
     * Unsets Domain Id.
     * Domain
     */
    public function unsetDomainId(): void
    {
        $this->domainId = [];
    }

    /**
     * Returns Email.
     * Email
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
     * Email
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email['value'] = $email;
    }

    /**
     * Unsets Email.
     * Email
     */
    public function unsetEmail(): void
    {
        $this->email = [];
    }

    /**
     * Returns Email Trx Receipt.
     * Email Trx Receipt
     */
    public function getEmailTrxReceipt(): ?bool
    {
        return $this->emailTrxReceipt;
    }

    /**
     * Sets Email Trx Receipt.
     * Email Trx Receipt
     *
     * @maps email_trx_receipt
     */
    public function setEmailTrxReceipt(?bool $emailTrxReceipt): void
    {
        $this->emailTrxReceipt = $emailTrxReceipt;
    }

    /**
     * Returns Home Phone.
     * Home Phone
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
     * Home Phone
     *
     * @maps home_phone
     */
    public function setHomePhone(?string $homePhone): void
    {
        $this->homePhone['value'] = $homePhone;
    }

    /**
     * Unsets Home Phone.
     * Home Phone
     */
    public function unsetHomePhone(): void
    {
        $this->homePhone = [];
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
     * Returns Locale.
     * Locale
     */
    public function getLocale(): ?string
    {
        if (count($this->locale) == 0) {
            return null;
        }
        return $this->locale['value'];
    }

    /**
     * Sets Locale.
     * Locale
     *
     * @maps locale
     */
    public function setLocale(?string $locale): void
    {
        $this->locale['value'] = $locale;
    }

    /**
     * Unsets Locale.
     * Locale
     */
    public function unsetLocale(): void
    {
        $this->locale = [];
    }

    /**
     * Returns Office Phone.
     * Office Phone
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
     * Office Phone
     *
     * @maps office_phone
     */
    public function setOfficePhone(?string $officePhone): void
    {
        $this->officePhone['value'] = $officePhone;
    }

    /**
     * Unsets Office Phone.
     * Office Phone
     */
    public function unsetOfficePhone(): void
    {
        $this->officePhone = [];
    }

    /**
     * Returns Office Ext Phone.
     * Office Ext Phone
     */
    public function getOfficeExtPhone(): ?string
    {
        if (count($this->officeExtPhone) == 0) {
            return null;
        }
        return $this->officeExtPhone['value'];
    }

    /**
     * Sets Office Ext Phone.
     * Office Ext Phone
     *
     * @maps office_ext_phone
     */
    public function setOfficeExtPhone(?string $officeExtPhone): void
    {
        $this->officeExtPhone['value'] = $officeExtPhone;
    }

    /**
     * Unsets Office Ext Phone.
     * Office Ext Phone
     */
    public function unsetOfficeExtPhone(): void
    {
        $this->officeExtPhone = [];
    }

    /**
     * Returns Primary Location Id.
     * Primary Location ID
     */
    public function getPrimaryLocationId(): ?string
    {
        if (count($this->primaryLocationId) == 0) {
            return null;
        }
        return $this->primaryLocationId['value'];
    }

    /**
     * Sets Primary Location Id.
     * Primary Location ID
     *
     * @maps primary_location_id
     */
    public function setPrimaryLocationId(?string $primaryLocationId): void
    {
        $this->primaryLocationId['value'] = $primaryLocationId;
    }

    /**
     * Unsets Primary Location Id.
     * Primary Location ID
     */
    public function unsetPrimaryLocationId(): void
    {
        $this->primaryLocationId = [];
    }

    /**
     * Returns Requires New Password.
     * Requires New Password
     */
    public function getRequiresNewPassword(): ?string
    {
        if (count($this->requiresNewPassword) == 0) {
            return null;
        }
        return $this->requiresNewPassword['value'];
    }

    /**
     * Sets Requires New Password.
     * Requires New Password
     *
     * @maps requires_new_password
     */
    public function setRequiresNewPassword(?string $requiresNewPassword): void
    {
        $this->requiresNewPassword['value'] = $requiresNewPassword;
    }

    /**
     * Unsets Requires New Password.
     * Requires New Password
     */
    public function unsetRequiresNewPassword(): void
    {
        $this->requiresNewPassword = [];
    }

    /**
     * Returns State.
     * State
     */
    public function getState(): ?string
    {
        if (count($this->state) == 0) {
            return null;
        }
        return $this->state['value'];
    }

    /**
     * Sets State.
     * State
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state['value'] = $state;
    }

    /**
     * Unsets State.
     * State
     */
    public function unsetState(): void
    {
        $this->state = [];
    }

    /**
     * Returns Terms Condition Code.
     * Terms Condition (This field is required when updating your own password).
     */
    public function getTermsConditionCode(): ?string
    {
        if (count($this->termsConditionCode) == 0) {
            return null;
        }
        return $this->termsConditionCode['value'];
    }

    /**
     * Sets Terms Condition Code.
     * Terms Condition (This field is required when updating your own password).
     *
     * @maps terms_condition_code
     */
    public function setTermsConditionCode(?string $termsConditionCode): void
    {
        $this->termsConditionCode['value'] = $termsConditionCode;
    }

    /**
     * Unsets Terms Condition Code.
     * Terms Condition (This field is required when updating your own password).
     */
    public function unsetTermsConditionCode(): void
    {
        $this->termsConditionCode = [];
    }

    /**
     * Returns Tz.
     * Time zone
     */
    public function getTz(): ?string
    {
        if (count($this->tz) == 0) {
            return null;
        }
        return $this->tz['value'];
    }

    /**
     * Sets Tz.
     * Time zone
     *
     * @maps tz
     */
    public function setTz(?string $tz): void
    {
        $this->tz['value'] = $tz;
    }

    /**
     * Unsets Tz.
     * Time zone
     */
    public function unsetTz(): void
    {
        $this->tz = [];
    }

    /**
     * Returns Ui Prefs.
     * Ui Prefs
     */
    public function getUiPrefs(): ?UiPrefs
    {
        return $this->uiPrefs;
    }

    /**
     * Sets Ui Prefs.
     * Ui Prefs
     *
     * @maps ui_prefs
     */
    public function setUiPrefs(?UiPrefs $uiPrefs): void
    {
        $this->uiPrefs = $uiPrefs;
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
     * Returns User Api Key.
     * User Api Key
     */
    public function getUserApiKey(): ?string
    {
        if (count($this->userApiKey) == 0) {
            return null;
        }
        return $this->userApiKey['value'];
    }

    /**
     * Sets User Api Key.
     * User Api Key
     *
     * @maps user_api_key
     */
    public function setUserApiKey(?string $userApiKey): void
    {
        $this->userApiKey['value'] = $userApiKey;
    }

    /**
     * Unsets User Api Key.
     * User Api Key
     */
    public function unsetUserApiKey(): void
    {
        $this->userApiKey = [];
    }

    /**
     * Returns User Hash Key.
     * User Hash Key
     */
    public function getUserHashKey(): ?string
    {
        if (count($this->userHashKey) == 0) {
            return null;
        }
        return $this->userHashKey['value'];
    }

    /**
     * Sets User Hash Key.
     * User Hash Key
     *
     * @maps user_hash_key
     */
    public function setUserHashKey(?string $userHashKey): void
    {
        $this->userHashKey['value'] = $userHashKey;
    }

    /**
     * Unsets User Hash Key.
     * User Hash Key
     */
    public function unsetUserHashKey(): void
    {
        $this->userHashKey = [];
    }

    /**
     * Returns User Type Code.
     * User Type
     */
    public function getUserTypeCode(): ?int
    {
        if (count($this->userTypeCode) == 0) {
            return null;
        }
        return $this->userTypeCode['value'];
    }

    /**
     * Sets User Type Code.
     * User Type
     *
     * @maps user_type_code
     * @factory \FortisAPILib\Models\UserTypeCodeEnum::checkValue
     */
    public function setUserTypeCode(?int $userTypeCode): void
    {
        $this->userTypeCode['value'] = $userTypeCode;
    }

    /**
     * Unsets User Type Code.
     * User Type
     */
    public function unsetUserTypeCode(): void
    {
        $this->userTypeCode = [];
    }

    /**
     * Returns Password.
     * Password
     */
    public function getPassword(): ?string
    {
        if (count($this->password) == 0) {
            return null;
        }
        return $this->password['value'];
    }

    /**
     * Sets Password.
     * Password
     *
     * @maps password
     */
    public function setPassword(?string $password): void
    {
        $this->password['value'] = $password;
    }

    /**
     * Unsets Password.
     * Password
     */
    public function unsetPassword(): void
    {
        $this->password = [];
    }

    /**
     * Returns Zip.
     * Zip
     */
    public function getZip(): ?string
    {
        if (count($this->zip) == 0) {
            return null;
        }
        return $this->zip['value'];
    }

    /**
     * Sets Zip.
     * Zip
     *
     * @maps zip
     */
    public function setZip(?string $zip): void
    {
        $this->zip['value'] = $zip;
    }

    /**
     * Unsets Zip.
     * Zip
     */
    public function unsetZip(): void
    {
        $this->zip = [];
    }

    /**
     * Returns Location Id.
     * Location ID
     */
    public function getLocationId(): ?string
    {
        if (count($this->locationId) == 0) {
            return null;
        }
        return $this->locationId['value'];
    }

    /**
     * Sets Location Id.
     * Location ID
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId['value'] = $locationId;
    }

    /**
     * Unsets Location Id.
     * Location ID
     */
    public function unsetLocationId(): void
    {
        $this->locationId = [];
    }

    /**
     * Returns Contact Api Id.
     * ContactApi Id
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
     * ContactApi Id
     *
     * @maps contact_api_id
     */
    public function setContactApiId(?string $contactApiId): void
    {
        $this->contactApiId['value'] = $contactApiId;
    }

    /**
     * Unsets Contact Api Id.
     * ContactApi Id
     */
    public function unsetContactApiId(): void
    {
        $this->contactApiId = [];
    }

    /**
     * Returns Primary Location Api Id.
     * Primary LocationApi ID
     */
    public function getPrimaryLocationApiId(): ?string
    {
        if (count($this->primaryLocationApiId) == 0) {
            return null;
        }
        return $this->primaryLocationApiId['value'];
    }

    /**
     * Sets Primary Location Api Id.
     * Primary LocationApi ID
     *
     * @maps primary_location_api_id
     */
    public function setPrimaryLocationApiId(?string $primaryLocationApiId): void
    {
        $this->primaryLocationApiId['value'] = $primaryLocationApiId;
    }

    /**
     * Unsets Primary Location Api Id.
     * Primary LocationApi ID
     */
    public function unsetPrimaryLocationApiId(): void
    {
        $this->primaryLocationApiId = [];
    }

    /**
     * Returns Status Id.
     * Status
     */
    public function getStatusId(): ?bool
    {
        return $this->statusId;
    }

    /**
     * Sets Status Id.
     * Status
     *
     * @maps status_id
     */
    public function setStatusId(?bool $statusId): void
    {
        $this->statusId = $statusId;
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
        if (!empty($this->accountNumber)) {
            $json['account_number']          = $this->accountNumber['value'];
        }
        if (!empty($this->address)) {
            $json['address']                 = $this->address['value'];
        }
        if (!empty($this->brandingDomainUrl)) {
            $json['branding_domain_url']     = $this->brandingDomainUrl['value'];
        }
        if (!empty($this->cellPhone)) {
            $json['cell_phone']              = $this->cellPhone['value'];
        }
        if (!empty($this->city)) {
            $json['city']                    = $this->city['value'];
        }
        if (!empty($this->companyName)) {
            $json['company_name']            = $this->companyName['value'];
        }
        if (!empty($this->contactId)) {
            $json['contact_id']              = $this->contactId['value'];
        }
        if (!empty($this->dateOfBirth)) {
            $json['date_of_birth']           = $this->dateOfBirth['value'];
        }
        if (!empty($this->domainId)) {
            $json['domain_id']               = $this->domainId['value'];
        }
        if (!empty($this->email)) {
            $json['email']                   = $this->email['value'];
        }
        if (isset($this->emailTrxReceipt)) {
            $json['email_trx_receipt']       = $this->emailTrxReceipt;
        }
        if (!empty($this->homePhone)) {
            $json['home_phone']              = $this->homePhone['value'];
        }
        if (!empty($this->firstName)) {
            $json['first_name']              = $this->firstName['value'];
        }
        if (!empty($this->lastName)) {
            $json['last_name']               = $this->lastName['value'];
        }
        if (!empty($this->locale)) {
            $json['locale']                  = $this->locale['value'];
        }
        if (!empty($this->officePhone)) {
            $json['office_phone']            = $this->officePhone['value'];
        }
        if (!empty($this->officeExtPhone)) {
            $json['office_ext_phone']        = $this->officeExtPhone['value'];
        }
        if (!empty($this->primaryLocationId)) {
            $json['primary_location_id']     = $this->primaryLocationId['value'];
        }
        if (!empty($this->requiresNewPassword)) {
            $json['requires_new_password']   = $this->requiresNewPassword['value'];
        }
        if (!empty($this->state)) {
            $json['state']                   = $this->state['value'];
        }
        if (!empty($this->termsConditionCode)) {
            $json['terms_condition_code']    = $this->termsConditionCode['value'];
        }
        if (!empty($this->tz)) {
            $json['tz']                      = $this->tz['value'];
        }
        if (isset($this->uiPrefs)) {
            $json['ui_prefs']                = $this->uiPrefs;
        }
        if (!empty($this->username)) {
            $json['username']                = $this->username['value'];
        }
        if (!empty($this->userApiKey)) {
            $json['user_api_key']            = $this->userApiKey['value'];
        }
        if (!empty($this->userHashKey)) {
            $json['user_hash_key']           = $this->userHashKey['value'];
        }
        if (!empty($this->userTypeCode)) {
            $json['user_type_code']          = UserTypeCodeEnum::checkValue($this->userTypeCode['value']);
        }
        if (!empty($this->password)) {
            $json['password']                = $this->password['value'];
        }
        if (!empty($this->zip)) {
            $json['zip']                     = $this->zip['value'];
        }
        if (!empty($this->locationId)) {
            $json['location_id']             = $this->locationId['value'];
        }
        if (!empty($this->contactApiId)) {
            $json['contact_api_id']          = $this->contactApiId['value'];
        }
        if (!empty($this->primaryLocationApiId)) {
            $json['primary_location_api_id'] = $this->primaryLocationApiId['value'];
        }
        if (isset($this->statusId)) {
            $json['status_id']               = $this->statusId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
