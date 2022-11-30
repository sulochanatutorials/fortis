
# Filter 5

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

`Filter5`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `ccProductTransactionId` | `?array` | Optional | - | getCcProductTransactionId(): ?array | setCcProductTransactionId(?array ccProductTransactionId): void |
| `email` | `?array` | Optional | - | getEmail(): ?array | setEmail(?array email): void |
| `amountDue` | `?array` | Optional | - | getAmountDue(): ?array | setAmountDue(?array amountDue): void |
| `locationApiId` | `?array` | Optional | - | getLocationApiId(): ?array | setLocationApiId(?array locationApiId): void |
| `contactId` | `?array` | Optional | - | getContactId(): ?array | setContactId(?array contactId): void |
| `contactApiId` | `?array` | Optional | - | getContactApiId(): ?array | setContactApiId(?array contactApiId): void |
| `paylinkApiId` | `?array` | Optional | - | getPaylinkApiId(): ?array | setPaylinkApiId(?array paylinkApiId): void |
| `achProductTransactionId` | `?array` | Optional | - | getAchProductTransactionId(): ?array | setAchProductTransactionId(?array achProductTransactionId): void |
| `expireDate` | `?array` | Optional | - | getExpireDate(): ?array | setExpireDate(?array expireDate): void |
| `displayProductTransactionReceiptDetails` | `?array` | Optional | - | getDisplayProductTransactionReceiptDetails(): ?array | setDisplayProductTransactionReceiptDetails(?array displayProductTransactionReceiptDetails): void |
| `displayBillingFields` | `?array` | Optional | - | getDisplayBillingFields(): ?array | setDisplayBillingFields(?array displayBillingFields): void |
| `deliveryMethod` | `?array` | Optional | - | getDeliveryMethod(): ?array | setDeliveryMethod(?array deliveryMethod): void |
| `cellPhone` | `?array` | Optional | - | getCellPhone(): ?array | setCellPhone(?array cellPhone): void |
| `description` | `?array` | Optional | - | getDescription(): ?array | setDescription(?array description): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `statusId` | `?array` | Optional | - | getStatusId(): ?array | setStatusId(?array statusId): void |
| `active` | `?array` | Optional | - | getActive(): ?array | setActive(?array active): void |
| `createdTs` | [`?CreatedTs1`](../../doc/models/created-ts-1.md) | Optional | - | getCreatedTs(): ?CreatedTs1 | setCreatedTs(?CreatedTs1 createdTs): void |
| `modifiedTs` | [`?ModifiedTs1`](../../doc/models/modified-ts-1.md) | Optional | - | getModifiedTs(): ?ModifiedTs1 | setModifiedTs(?ModifiedTs1 modifiedTs): void |
| `createdUserId` | `?array` | Optional | - | getCreatedUserId(): ?array | setCreatedUserId(?array createdUserId): void |
| `modifiedUserId` | `?array` | Optional | - | getModifiedUserId(): ?array | setModifiedUserId(?array modifiedUserId): void |

## Example (as JSON)

```json
{
  "location_id": null,
  "cc_product_transaction_id": null,
  "email": null,
  "amount_due": null,
  "location_api_id": null,
  "contact_id": null,
  "contact_api_id": null,
  "paylink_api_id": null,
  "ach_product_transaction_id": null,
  "expire_date": null,
  "display_product_transaction_receipt_details": null,
  "display_billing_fields": null,
  "delivery_method": null,
  "cell_phone": null,
  "description": null,
  "id": null,
  "status_id": null,
  "active": null,
  "created_ts": null,
  "modified_ts": null,
  "created_user_id": null,
  "modified_user_id": null
}
```

