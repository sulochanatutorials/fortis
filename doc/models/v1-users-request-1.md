
# V1 Users Request 1

## Structure

`V1UsersRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `?string` | Optional | Account Number | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `address` | `?string` | Optional | Address<br>**Constraints**: *Maximum Length*: `255`, *Pattern*: `^[\w\#\,\.\-\'\&\s\/]+$` | getAddress(): ?string | setAddress(?string address): void |
| `brandingDomainUrl` | `?string` | Optional | Branding Domain Url<br>**Constraints**: *Maximum Length*: `64` | getBrandingDomainUrl(): ?string | setBrandingDomainUrl(?string brandingDomainUrl): void |
| `cellPhone` | `?string` | Optional | Cell Phone<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getCellPhone(): ?string | setCellPhone(?string cellPhone): void |
| `city` | `?string` | Optional | City<br>**Constraints**: *Maximum Length*: `36`, *Pattern*: `^[\w\#\,\.\-\'\&\s\/]+$` | getCity(): ?string | setCity(?string city): void |
| `companyName` | `?string` | Optional | Company Name<br>**Constraints**: *Maximum Length*: `64` | getCompanyName(): ?string | setCompanyName(?string companyName): void |
| `contactId` | `?string` | Optional | Contact<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getContactId(): ?string | setContactId(?string contactId): void |
| `dateOfBirth` | `?string` | Optional | Date Of Birth<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getDateOfBirth(): ?string | setDateOfBirth(?string dateOfBirth): void |
| `domainId` | `?string` | Optional | Domain<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getDomainId(): ?string | setDomainId(?string domainId): void |
| `email` | `?string` | Optional | Email<br>**Constraints**: *Maximum Length*: `128` | getEmail(): ?string | setEmail(?string email): void |
| `emailTrxReceipt` | `?bool` | Optional | Email Trx Receipt | getEmailTrxReceipt(): ?bool | setEmailTrxReceipt(?bool emailTrxReceipt): void |
| `homePhone` | `?string` | Optional | Home Phone<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getHomePhone(): ?string | setHomePhone(?string homePhone): void |
| `firstName` | `?string` | Optional | First Name<br>**Constraints**: *Maximum Length*: `64` | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | Last Name<br>**Constraints**: *Maximum Length*: `64` | getLastName(): ?string | setLastName(?string lastName): void |
| `locale` | `?string` | Optional | Locale<br>**Constraints**: *Maximum Length*: `8` | getLocale(): ?string | setLocale(?string locale): void |
| `officePhone` | `?string` | Optional | Office Phone<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getOfficePhone(): ?string | setOfficePhone(?string officePhone): void |
| `officeExtPhone` | `?string` | Optional | Office Ext Phone<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^\d{1,10}$` | getOfficeExtPhone(): ?string | setOfficeExtPhone(?string officeExtPhone): void |
| `primaryLocationId` | `?string` | Optional | Primary Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getPrimaryLocationId(): ?string | setPrimaryLocationId(?string primaryLocationId): void |
| `requiresNewPassword` | `?string` | Optional | Requires New Password<br>**Constraints**: *Maximum Length*: `1` | getRequiresNewPassword(): ?string | setRequiresNewPassword(?string requiresNewPassword): void |
| `state` | `?string` | Optional | State<br>**Constraints**: *Maximum Length*: `24` | getState(): ?string | setState(?string state): void |
| `termsConditionCode` | `?string` | Optional | Terms Condition (This field is required when updating your own password). | getTermsConditionCode(): ?string | setTermsConditionCode(?string termsConditionCode): void |
| `tz` | `?string` | Optional | Time zone<br>**Constraints**: *Maximum Length*: `30` | getTz(): ?string | setTz(?string tz): void |
| `uiPrefs` | [`?UiPrefs`](../../doc/models/ui-prefs.md) | Optional | Ui Prefs | getUiPrefs(): ?UiPrefs | setUiPrefs(?UiPrefs uiPrefs): void |
| `username` | `?string` | Optional | Username<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `64` | getUsername(): ?string | setUsername(?string username): void |
| `userApiKey` | `?string` | Optional | User Api Key<br>**Constraints**: *Minimum Length*: `16`, *Maximum Length*: `64` | getUserApiKey(): ?string | setUserApiKey(?string userApiKey): void |
| `userHashKey` | `?string` | Optional | User Hash Key<br>**Constraints**: *Minimum Length*: `24`, *Maximum Length*: `36` | getUserHashKey(): ?string | setUserHashKey(?string userHashKey): void |
| `userTypeCode` | [`?int (UserTypeCodeEnum)`](../../doc/models/user-type-code-enum.md) | Optional | User Type | getUserTypeCode(): ?int | setUserTypeCode(?int userTypeCode): void |
| `password` | `?string` | Optional | Password<br>**Constraints**: *Minimum Length*: `8`, *Maximum Length*: `128`, *Pattern*: `^(?=.*[`!@#$%^&*()_+\-=\[\]{};':"\\\|,.<>\/?~])(?=.*[0-9])(?=.*[a-zA-Z]).*$` | getPassword(): ?string | setPassword(?string password): void |
| `zip` | `?string` | Optional | Zip<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `10`, *Pattern*: `^[a-zA-Z0-9\-\s]+$` | getZip(): ?string | setZip(?string zip): void |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `contactApiId` | `?string` | Optional | ContactApi Id | getContactApiId(): ?string | setContactApiId(?string contactApiId): void |
| `primaryLocationApiId` | `?string` | Optional | Primary LocationApi ID | getPrimaryLocationApiId(): ?string | setPrimaryLocationApiId(?string primaryLocationApiId): void |
| `statusId` | `?bool` | Optional | Status | getStatusId(): ?bool | setStatusId(?bool statusId): void |

## Example (as JSON)

```json
{
  "account_number": null,
  "address": null,
  "branding_domain_url": null,
  "cell_phone": null,
  "city": null,
  "company_name": null,
  "contact_id": null,
  "date_of_birth": null,
  "domain_id": null,
  "email": null,
  "email_trx_receipt": null,
  "home_phone": null,
  "first_name": null,
  "last_name": null,
  "locale": null,
  "office_phone": null,
  "office_ext_phone": null,
  "primary_location_id": null,
  "requires_new_password": null,
  "state": null,
  "terms_condition_code": null,
  "tz": null,
  "ui_prefs": null,
  "username": null,
  "user_api_key": null,
  "user_hash_key": null,
  "user_type_code": null,
  "password": null,
  "zip": null,
  "location_id": null,
  "contact_api_id": null,
  "primary_location_api_id": null,
  "status_id": null
}
```

