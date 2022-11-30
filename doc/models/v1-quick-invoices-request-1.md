
# V1 Quick Invoices Request 1

## Structure

`V1QuickInvoicesRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `title` | `?string` | Optional | Title<br>**Constraints**: *Maximum Length*: `64` | getTitle(): ?string | setTitle(?string title): void |
| `ccProductTransactionId` | `?string` | Optional | Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCcProductTransactionId(): ?string | setCcProductTransactionId(?string ccProductTransactionId): void |
| `achProductTransactionId` | `?string` | Optional | ACH Product Transaction Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getAchProductTransactionId(): ?string | setAchProductTransactionId(?string achProductTransactionId): void |
| `dueDate` | `?string` | Optional | Due Date, Format: Y-m-d<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getDueDate(): ?string | setDueDate(?string dueDate): void |
| `itemList` | [`?(ItemList5[])`](../../doc/models/item-list-5.md) | Optional | Item List<br>**Constraints**: *Minimum Items*: `1`, *Maximum Items*: `99`, *Unique Items Required* | getItemList(): ?array | setItemList(?array itemList): void |
| `allowOverpayment` | `?bool` | Optional | Allow Overpayment. | getAllowOverpayment(): ?bool | setAllowOverpayment(?bool allowOverpayment): void |
| `email` | `?string` | Optional | Email<br>**Constraints**: *Maximum Length*: `128` | getEmail(): ?string | setEmail(?string email): void |
| `contactId` | `?string` | Optional | Contact ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getContactId(): ?string | setContactId(?string contactId): void |
| `contactApiId` | `?string` | Optional | Contact API Id<br>**Constraints**: *Maximum Length*: `64` | getContactApiId(): ?string | setContactApiId(?string contactApiId): void |
| `customerId` | `?string` | Optional | Customer Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCustomerId(): ?string | setCustomerId(?string customerId): void |
| `expireDate` | `?string` | Optional | Expire Date.<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getExpireDate(): ?string | setExpireDate(?string expireDate): void |
| `allowPartialPay` | `?bool` | Optional | Allow partial pay | getAllowPartialPay(): ?bool | setAllowPartialPay(?bool allowPartialPay): void |
| `attachFilesToEmail` | `?bool` | Optional | Attach Files to Email | getAttachFilesToEmail(): ?bool | setAttachFilesToEmail(?bool attachFilesToEmail): void |
| `sendEmail` | `?bool` | Optional | Send Email | getSendEmail(): ?bool | setSendEmail(?bool sendEmail): void |
| `invoiceNumber` | `?string` | Optional | Invoice number<br>**Constraints**: *Maximum Length*: `64` | getInvoiceNumber(): ?string | setInvoiceNumber(?string invoiceNumber): void |
| `itemHeader` | `?string` | Optional | Item Header<br>**Constraints**: *Maximum Length*: `250` | getItemHeader(): ?string | setItemHeader(?string itemHeader): void |
| `itemFooter` | `?string` | Optional | Item footer<br>**Constraints**: *Maximum Length*: `250` | getItemFooter(): ?string | setItemFooter(?string itemFooter): void |
| `amountDue` | `?float` | Optional | Amount Due | getAmountDue(): ?float | setAmountDue(?float amountDue): void |
| `notificationEmail` | `?string` | Optional | Notification email<br>**Constraints**: *Maximum Length*: `640` | getNotificationEmail(): ?string | setNotificationEmail(?string notificationEmail): void |
| `paymentStatusId` | `?float` | Optional | Payment Status Id<br>**Constraints**: `>= 1`, `<= 3` | getPaymentStatusId(): ?float | setPaymentStatusId(?float paymentStatusId): void |
| `statusId` | `?float` | Optional | Status Id<br>**Constraints**: `>= 0`, `<= 1` | getStatusId(): ?float | setStatusId(?float statusId): void |
| `note` | `?string` | Optional | Note<br>**Constraints**: *Maximum Length*: `200` | getNote(): ?string | setNote(?string note): void |
| `notificationDaysBeforeDueDate` | `?int` | Optional | Notification days before due date<br>**Constraints**: `>= 0`, `<= 99` | getNotificationDaysBeforeDueDate(): ?int | setNotificationDaysBeforeDueDate(?int notificationDaysBeforeDueDate): void |
| `notificationDaysAfterDueDate` | `?int` | Optional | Notification days after due date<br>**Constraints**: `>= 0`, `<= 99` | getNotificationDaysAfterDueDate(): ?int | setNotificationDaysAfterDueDate(?int notificationDaysAfterDueDate): void |
| `notificationOnDueDate` | `?bool` | Optional | Notification on due date | getNotificationOnDueDate(): ?bool | setNotificationOnDueDate(?bool notificationOnDueDate): void |
| `sendTextToPay` | `?bool` | Optional | Send Text To Pay | getSendTextToPay(): ?bool | setSendTextToPay(?bool sendTextToPay): void |
| `files` | `?(array[])` | Optional | Files | getFiles(): ?array | setFiles(?array files): void |
| `remainingBalance` | `?float` | Optional | Remaining Balance<br>**Constraints**: `>= 0`, `<= 9999999999.99` | getRemainingBalance(): ?float | setRemainingBalance(?float remainingBalance): void |
| `singlePaymentMinAmount` | `?float` | Optional | Single Payment Min Amount | getSinglePaymentMinAmount(): ?float | setSinglePaymentMinAmount(?float singlePaymentMinAmount): void |
| `singlePaymentMaxAmount` | `?float` | Optional | Single Payment Max Amount<br>**Default**: `9999999.99` | getSinglePaymentMaxAmount(): ?float | setSinglePaymentMaxAmount(?float singlePaymentMaxAmount): void |
| `cellPhone` | `?string` | Optional | Cell Phone<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `10`, *Pattern*: `^\d{10}$` | getCellPhone(): ?string | setCellPhone(?string cellPhone): void |

## Example (as JSON)

```json
{
  "location_id": null,
  "title": null,
  "cc_product_transaction_id": null,
  "ach_product_transaction_id": null,
  "due_date": null,
  "item_list": null,
  "allow_overpayment": null,
  "email": null,
  "contact_id": null,
  "contact_api_id": null,
  "customer_id": null,
  "expire_date": null,
  "allow_partial_pay": null,
  "attach_files_to_email": null,
  "send_email": null,
  "invoice_number": null,
  "item_header": null,
  "item_footer": null,
  "amount_due": null,
  "notification_email": null,
  "payment_status_id": null,
  "status_id": null,
  "note": null,
  "notification_days_before_due_date": null,
  "notification_days_after_due_date": null,
  "notification_on_due_date": null,
  "send_text_to_pay": null,
  "files": null,
  "remaining_balance": null,
  "single_payment_min_amount": null,
  "single_payment_max_amount": null,
  "cell_phone": null
}
```

