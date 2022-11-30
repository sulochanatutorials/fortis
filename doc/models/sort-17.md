
# Sort 17

You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:

> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
> 
> /endpoint?sort[field_name]=asc&sort[field_name2]=desc

## Structure

`Sort17`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | `?array` | Optional | - | getCreatedTs(): ?array | setCreatedTs(?array createdTs): void |
| `modifiedTs` | `?array` | Optional | - | getModifiedTs(): ?array | setModifiedTs(?array modifiedTs): void |
| `accountNumber` | `?array` | Optional | - | getAccountNumber(): ?array | setAccountNumber(?array accountNumber): void |
| `address` | `?array` | Optional | - | getAddress(): ?array | setAddress(?array address): void |
| `brandingDomainId` | `?array` | Optional | - | getBrandingDomainId(): ?array | setBrandingDomainId(?array brandingDomainId): void |
| `contactEmailTrxReceiptDefault` | `?array` | Optional | - | getContactEmailTrxReceiptDefault(): ?array | setContactEmailTrxReceiptDefault(?array contactEmailTrxReceiptDefault): void |
| `defaultAch` | `?array` | Optional | - | getDefaultAch(): ?array | setDefaultAch(?array defaultAch): void |
| `defaultCc` | `?array` | Optional | - | getDefaultCc(): ?array | setDefaultCc(?array defaultCc): void |
| `developerCompanyId` | `?array` | Optional | - | getDeveloperCompanyId(): ?array | setDeveloperCompanyId(?array developerCompanyId): void |
| `emailReplyTo` | `?array` | Optional | - | getEmailReplyTo(): ?array | setEmailReplyTo(?array emailReplyTo): void |
| `fax` | `?array` | Optional | - | getFax(): ?array | setFax(?array fax): void |
| `locationApiId` | `?array` | Optional | - | getLocationApiId(): ?array | setLocationApiId(?array locationApiId): void |
| `locationApiKey` | `?array` | Optional | - | getLocationApiKey(): ?array | setLocationApiKey(?array locationApiKey): void |
| `locationC1` | `?array` | Optional | - | getLocationC1(): ?array | setLocationC1(?array locationC1): void |
| `locationC2` | `?array` | Optional | - | getLocationC2(): ?array | setLocationC2(?array locationC2): void |
| `locationC3` | `?array` | Optional | - | getLocationC3(): ?array | setLocationC3(?array locationC3): void |
| `name` | `?array` | Optional | - | getName(): ?array | setName(?array name): void |
| `officePhone` | `?array` | Optional | - | getOfficePhone(): ?array | setOfficePhone(?array officePhone): void |
| `officeExtPhone` | `?array` | Optional | - | getOfficeExtPhone(): ?array | setOfficeExtPhone(?array officeExtPhone): void |
| `recurringNotificationDaysDefault` | `?array` | Optional | - | getRecurringNotificationDaysDefault(): ?array | setRecurringNotificationDaysDefault(?array recurringNotificationDaysDefault): void |
| `tz` | `?array` | Optional | - | getTz(): ?array | setTz(?array tz): void |
| `relationship` | `?array` | Optional | - | getRelationship(): ?array | setRelationship(?array relationship): void |

## Example (as JSON)

```json
{
  "id": null,
  "created_ts": null,
  "modified_ts": null,
  "account_number": null,
  "address": null,
  "branding_domain_id": null,
  "contact_email_trx_receipt_default": null,
  "default_ach": null,
  "default_cc": null,
  "developer_company_id": null,
  "email_reply_to": null,
  "fax": null,
  "location_api_id": null,
  "location_api_key": null,
  "location_c1": null,
  "location_c2": null,
  "location_c3": null,
  "name": null,
  "office_phone": null,
  "office_ext_phone": null,
  "recurring_notification_days_default": null,
  "tz": null,
  "relationship": null
}
```

