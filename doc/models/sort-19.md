
# Sort 19

You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:

> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
> 
> /endpoint?sort[field_name]=asc&sort[field_name2]=desc

## Structure

`Sort19`

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
| `createdTs` | `?array` | Optional | - | getCreatedTs(): ?array | setCreatedTs(?array createdTs): void |
| `modifiedTs` | `?array` | Optional | - | getModifiedTs(): ?array | setModifiedTs(?array modifiedTs): void |
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

