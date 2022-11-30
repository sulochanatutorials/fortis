
# Filter 13

You can use any `field_name` from this endpoint results as a filter, and you can also use more than one field to create AND conditions. For date fields (ended with `_ts`), you can also search for ranges using the `$gte` (Greater than or equal to) and/or  `$lte` (Lower than or equal to). You can use one of the following methods:

> /endpoint?filter={ "field_name": "Value" }
> 
> /endpoint?filter[field_name]=Value
> 
> /endpoint?filter={ "created_ts": "today" }
> 
> /endpoint?filter[created_ts]=today
> 
> /endpoint?filter={ "created_ts": { "$gte": "yesterday", "$lte": "today" } }
> 
> /endpoint?filter[created_ts][$gte]=yesterday&filter[created_ts][$lte]=today

## Structure

`Filter13`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountNumber` | `?array` | Optional | - | getAccountNumber(): ?array | setAccountNumber(?array accountNumber): void |
| `address` | `?array` | Optional | - | getAddress(): ?array | setAddress(?array address): void |
| `brandingDomainUrl` | `?array` | Optional | - | getBrandingDomainUrl(): ?array | setBrandingDomainUrl(?array brandingDomainUrl): void |
| `cellPhone` | `?array` | Optional | - | getCellPhone(): ?array | setCellPhone(?array cellPhone): void |
| `city` | `?array` | Optional | - | getCity(): ?array | setCity(?array city): void |
| `companyName` | `?array` | Optional | - | getCompanyName(): ?array | setCompanyName(?array companyName): void |
| `contactId` | `?array` | Optional | - | getContactId(): ?array | setContactId(?array contactId): void |
| `dateOfBirth` | `?array` | Optional | - | getDateOfBirth(): ?array | setDateOfBirth(?array dateOfBirth): void |
| `domainId` | `?array` | Optional | - | getDomainId(): ?array | setDomainId(?array domainId): void |
| `email` | `?array` | Optional | - | getEmail(): ?array | setEmail(?array email): void |
| `emailTrxReceipt` | `?array` | Optional | - | getEmailTrxReceipt(): ?array | setEmailTrxReceipt(?array emailTrxReceipt): void |
| `homePhone` | `?array` | Optional | - | getHomePhone(): ?array | setHomePhone(?array homePhone): void |
| `firstName` | `?array` | Optional | - | getFirstName(): ?array | setFirstName(?array firstName): void |
| `lastName` | `?array` | Optional | - | getLastName(): ?array | setLastName(?array lastName): void |
| `locale` | `?array` | Optional | - | getLocale(): ?array | setLocale(?array locale): void |
| `officePhone` | `?array` | Optional | - | getOfficePhone(): ?array | setOfficePhone(?array officePhone): void |
| `officeExtPhone` | `?array` | Optional | - | getOfficeExtPhone(): ?array | setOfficeExtPhone(?array officeExtPhone): void |
| `primaryLocationId` | `?array` | Optional | - | getPrimaryLocationId(): ?array | setPrimaryLocationId(?array primaryLocationId): void |
| `requiresNewPassword` | `?array` | Optional | - | getRequiresNewPassword(): ?array | setRequiresNewPassword(?array requiresNewPassword): void |
| `state` | `?array` | Optional | - | getState(): ?array | setState(?array state): void |
| `termsConditionCode` | `?array` | Optional | - | getTermsConditionCode(): ?array | setTermsConditionCode(?array termsConditionCode): void |
| `tz` | `?array` | Optional | - | getTz(): ?array | setTz(?array tz): void |
| `uiPrefs` | `?array` | Optional | - | getUiPrefs(): ?array | setUiPrefs(?array uiPrefs): void |
| `username` | `?array` | Optional | - | getUsername(): ?array | setUsername(?array username): void |
| `userApiKey` | `?array` | Optional | - | getUserApiKey(): ?array | setUserApiKey(?array userApiKey): void |
| `userHashKey` | `?array` | Optional | - | getUserHashKey(): ?array | setUserHashKey(?array userHashKey): void |
| `userTypeCode` | `?array` | Optional | - | getUserTypeCode(): ?array | setUserTypeCode(?array userTypeCode): void |
| `password` | `?array` | Optional | - | getPassword(): ?array | setPassword(?array password): void |
| `zip` | `?array` | Optional | - | getZip(): ?array | setZip(?array zip): void |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `contactApiId` | `?array` | Optional | - | getContactApiId(): ?array | setContactApiId(?array contactApiId): void |
| `primaryLocationApiId` | `?array` | Optional | - | getPrimaryLocationApiId(): ?array | setPrimaryLocationApiId(?array primaryLocationApiId): void |
| `statusId` | `?array` | Optional | - | getStatusId(): ?array | setStatusId(?array statusId): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `status` | `?array` | Optional | - | getStatus(): ?array | setStatus(?array status): void |
| `loginAttempts` | `?array` | Optional | - | getLoginAttempts(): ?array | setLoginAttempts(?array loginAttempts): void |
| `lastLoginTs` | [`?LastLoginTs1`](../../doc/models/last-login-ts-1.md) | Optional | - | getLastLoginTs(): ?LastLoginTs1 | setLastLoginTs(?LastLoginTs1 lastLoginTs): void |
| `createdTs` | [`?CreatedTs1`](../../doc/models/created-ts-1.md) | Optional | - | getCreatedTs(): ?CreatedTs1 | setCreatedTs(?CreatedTs1 createdTs): void |
| `modifiedTs` | [`?ModifiedTs1`](../../doc/models/modified-ts-1.md) | Optional | - | getModifiedTs(): ?ModifiedTs1 | setModifiedTs(?ModifiedTs1 modifiedTs): void |
| `createdUserId` | `?array` | Optional | - | getCreatedUserId(): ?array | setCreatedUserId(?array createdUserId): void |
| `termsAcceptedTs` | [`?TermsAcceptedTs1`](../../doc/models/terms-accepted-ts-1.md) | Optional | - | getTermsAcceptedTs(): ?TermsAcceptedTs1 | setTermsAcceptedTs(?TermsAcceptedTs1 termsAcceptedTs): void |
| `termsAgreeIp` | `?array` | Optional | - | getTermsAgreeIp(): ?array | setTermsAgreeIp(?array termsAgreeIp): void |
| `currentDateTime` | `?array` | Optional | - | getCurrentDateTime(): ?array | setCurrentDateTime(?array currentDateTime): void |
| `locations` | `?array` | Optional | - | getLocations(): ?array | setLocations(?array locations): void |
| `primaryLocation` | `?array` | Optional | - | getPrimaryLocation(): ?array | setPrimaryLocation(?array primaryLocation): void |
| `receivedEmails` | `?array` | Optional | - | getReceivedEmails(): ?array | setReceivedEmails(?array receivedEmails): void |
| `contact` | `?array` | Optional | - | getContact(): ?array | setContact(?array contact): void |
| `isDeletable` | `?array` | Optional | - | getIsDeletable(): ?array | setIsDeletable(?array isDeletable): void |
| `activeNotificationAlerts` | `?array` | Optional | - | getActiveNotificationAlerts(): ?array | setActiveNotificationAlerts(?array activeNotificationAlerts): void |
| `locationUsers` | `?array` | Optional | - | getLocationUsers(): ?array | setLocationUsers(?array locationUsers): void |
| `authRoles` | `?array` | Optional | - | getAuthRoles(): ?array | setAuthRoles(?array authRoles): void |
| `changelogs` | `?array` | Optional | - | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `resources` | `?array` | Optional | - | getResources(): ?array | setResources(?array resources): void |
| `domain` | `?array` | Optional | - | getDomain(): ?array | setDomain(?array domain): void |
| `createdUser` | `?array` | Optional | - | getCreatedUser(): ?array | setCreatedUser(?array createdUser): void |
| `locationMarketplaces` | `?array` | Optional | - | getLocationMarketplaces(): ?array | setLocationMarketplaces(?array locationMarketplaces): void |
| `emailBlacklist` | `?array` | Optional | - | getEmailBlacklist(): ?array | setEmailBlacklist(?array emailBlacklist): void |
| `helppage` | `?array` | Optional | - | getHelppage(): ?array | setHelppage(?array helppage): void |

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
  "status_id": null,
  "id": null,
  "status": null,
  "login_attempts": null,
  "last_login_ts": null,
  "created_ts": null,
  "modified_ts": null,
  "created_user_id": null,
  "terms_accepted_ts": null,
  "terms_agree_ip": null,
  "current_date_time": null,
  "locations": null,
  "primary_location": null,
  "received_emails": null,
  "contact": null,
  "isDeletable": null,
  "active_notification_alerts": null,
  "location_users": null,
  "auth_roles": null,
  "changelogs": null,
  "resources": null,
  "domain": null,
  "created_user": null,
  "location_marketplaces": null,
  "email_blacklist": null,
  "helppage": null
}
```

