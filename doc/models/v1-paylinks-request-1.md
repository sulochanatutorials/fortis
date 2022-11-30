
# V1 Paylinks Request 1

## Structure

`V1PaylinksRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `ccProductTransactionId` | `?string` | Optional | cc_product_transaction_id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCcProductTransactionId(): ?string | setCcProductTransactionId(?string ccProductTransactionId): void |
| `email` | `?string` | Optional | Email<br>**Constraints**: *Maximum Length*: `128` | getEmail(): ?string | setEmail(?string email): void |
| `amountDue` | `?float` | Optional | Amount Due | getAmountDue(): ?float | setAmountDue(?float amountDue): void |
| `locationApiId` | `?string` | Optional | Location Api Id | getLocationApiId(): ?string | setLocationApiId(?string locationApiId): void |
| `contactId` | `?string` | Optional | Contact Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getContactId(): ?string | setContactId(?string contactId): void |
| `contactApiId` | `?string` | Optional | Contact Api Id | getContactApiId(): ?string | setContactApiId(?string contactApiId): void |
| `paylinkApiId` | `?string` | Optional | Paylinke Api Id<br>**Constraints**: *Maximum Length*: `64` | getPaylinkApiId(): ?string | setPaylinkApiId(?string paylinkApiId): void |
| `achProductTransactionId` | `?string` | Optional | Ach Product Transaction Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getAchProductTransactionId(): ?string | setAchProductTransactionId(?string achProductTransactionId): void |
| `expireDate` | `?string` | Optional | Expire Date<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getExpireDate(): ?string | setExpireDate(?string expireDate): void |
| `displayProductTransactionReceiptDetails` | `?bool` | Optional | Display Product Transaction Receipt Details | getDisplayProductTransactionReceiptDetails(): ?bool | setDisplayProductTransactionReceiptDetails(?bool displayProductTransactionReceiptDetails): void |
| `displayBillingFields` | `?bool` | Optional | Display Billing Fields | getDisplayBillingFields(): ?bool | setDisplayBillingFields(?bool displayBillingFields): void |
| `deliveryMethod` | [`?int (DeliveryMethodEnum)`](../../doc/models/delivery-method-enum.md) | Optional | Delivery Method<br><br>> 0 - Do not send<br>> <br>> 1 - Email<br>> <br>> 2 - SMS<br>> <br>> 3 - Both | getDeliveryMethod(): ?int | setDeliveryMethod(?int deliveryMethod): void |
| `cellPhone` | `?string` | Optional | Cell Phone<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getCellPhone(): ?string | setCellPhone(?string cellPhone): void |
| `description` | `?string` | Optional | Description<br>**Constraints**: *Maximum Length*: `64` | getDescription(): ?string | setDescription(?string description): void |

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
  "description": null
}
```

