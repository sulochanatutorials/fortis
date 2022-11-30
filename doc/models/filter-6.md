
# Filter 6

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

`Filter6`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?array` | Optional | - | getLocationId(): ?array | setLocationId(?array locationId): void |
| `title` | `?array` | Optional | - | getTitle(): ?array | setTitle(?array title): void |
| `ccProductTransactionId` | `?array` | Optional | - | getCcProductTransactionId(): ?array | setCcProductTransactionId(?array ccProductTransactionId): void |
| `achProductTransactionId` | `?array` | Optional | - | getAchProductTransactionId(): ?array | setAchProductTransactionId(?array achProductTransactionId): void |
| `dueDate` | `?array` | Optional | - | getDueDate(): ?array | setDueDate(?array dueDate): void |
| `itemList` | `?array` | Optional | - | getItemList(): ?array | setItemList(?array itemList): void |
| `allowOverpayment` | `?array` | Optional | - | getAllowOverpayment(): ?array | setAllowOverpayment(?array allowOverpayment): void |
| `email` | `?array` | Optional | - | getEmail(): ?array | setEmail(?array email): void |
| `contactId` | `?array` | Optional | - | getContactId(): ?array | setContactId(?array contactId): void |
| `contactApiId` | `?array` | Optional | - | getContactApiId(): ?array | setContactApiId(?array contactApiId): void |
| `customerId` | `?array` | Optional | - | getCustomerId(): ?array | setCustomerId(?array customerId): void |
| `expireDate` | `?array` | Optional | - | getExpireDate(): ?array | setExpireDate(?array expireDate): void |
| `allowPartialPay` | `?array` | Optional | - | getAllowPartialPay(): ?array | setAllowPartialPay(?array allowPartialPay): void |
| `attachFilesToEmail` | `?array` | Optional | - | getAttachFilesToEmail(): ?array | setAttachFilesToEmail(?array attachFilesToEmail): void |
| `sendEmail` | `?array` | Optional | - | getSendEmail(): ?array | setSendEmail(?array sendEmail): void |
| `invoiceNumber` | `?array` | Optional | - | getInvoiceNumber(): ?array | setInvoiceNumber(?array invoiceNumber): void |
| `itemHeader` | `?array` | Optional | - | getItemHeader(): ?array | setItemHeader(?array itemHeader): void |
| `itemFooter` | `?array` | Optional | - | getItemFooter(): ?array | setItemFooter(?array itemFooter): void |
| `amountDue` | `?array` | Optional | - | getAmountDue(): ?array | setAmountDue(?array amountDue): void |
| `notificationEmail` | `?array` | Optional | - | getNotificationEmail(): ?array | setNotificationEmail(?array notificationEmail): void |
| `paymentStatusId` | `?array` | Optional | - | getPaymentStatusId(): ?array | setPaymentStatusId(?array paymentStatusId): void |
| `statusId` | `?array` | Optional | - | getStatusId(): ?array | setStatusId(?array statusId): void |
| `note` | `?array` | Optional | - | getNote(): ?array | setNote(?array note): void |
| `notificationDaysBeforeDueDate` | `?array` | Optional | - | getNotificationDaysBeforeDueDate(): ?array | setNotificationDaysBeforeDueDate(?array notificationDaysBeforeDueDate): void |
| `notificationDaysAfterDueDate` | `?array` | Optional | - | getNotificationDaysAfterDueDate(): ?array | setNotificationDaysAfterDueDate(?array notificationDaysAfterDueDate): void |
| `notificationOnDueDate` | `?array` | Optional | - | getNotificationOnDueDate(): ?array | setNotificationOnDueDate(?array notificationOnDueDate): void |
| `sendTextToPay` | `?array` | Optional | - | getSendTextToPay(): ?array | setSendTextToPay(?array sendTextToPay): void |
| `files` | `?array` | Optional | - | getFiles(): ?array | setFiles(?array files): void |
| `remainingBalance` | `?array` | Optional | - | getRemainingBalance(): ?array | setRemainingBalance(?array remainingBalance): void |
| `singlePaymentMinAmount` | `?array` | Optional | - | getSinglePaymentMinAmount(): ?array | setSinglePaymentMinAmount(?array singlePaymentMinAmount): void |
| `singlePaymentMaxAmount` | `?array` | Optional | - | getSinglePaymentMaxAmount(): ?array | setSinglePaymentMaxAmount(?array singlePaymentMaxAmount): void |
| `cellPhone` | `?array` | Optional | - | getCellPhone(): ?array | setCellPhone(?array cellPhone): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | [`?CreatedTs1`](../../doc/models/created-ts-1.md) | Optional | - | getCreatedTs(): ?CreatedTs1 | setCreatedTs(?CreatedTs1 createdTs): void |
| `modifiedTs` | [`?ModifiedTs1`](../../doc/models/modified-ts-1.md) | Optional | - | getModifiedTs(): ?ModifiedTs1 | setModifiedTs(?ModifiedTs1 modifiedTs): void |
| `createdUserId` | `?array` | Optional | - | getCreatedUserId(): ?array | setCreatedUserId(?array createdUserId): void |
| `modifiedUserId` | `?array` | Optional | - | getModifiedUserId(): ?array | setModifiedUserId(?array modifiedUserId): void |
| `active` | `?array` | Optional | - | getActive(): ?array | setActive(?array active): void |
| `isActive` | `?array` | Optional | - | getIsActive(): ?array | setIsActive(?array isActive): void |
| `quickInvoiceSetting` | `?array` | Optional | - | getQuickInvoiceSetting(): ?array | setQuickInvoiceSetting(?array quickInvoiceSetting): void |
| `tags` | `?array` | Optional | - | getTags(): ?array | setTags(?array tags): void |
| `quickInvoiceViews` | `?array` | Optional | - | getQuickInvoiceViews(): ?array | setQuickInvoiceViews(?array quickInvoiceViews): void |
| `location` | `?array` | Optional | - | getLocation(): ?array | setLocation(?array location): void |
| `createdUser` | `?array` | Optional | - | getCreatedUser(): ?array | setCreatedUser(?array createdUser): void |
| `modifiedUser` | `?array` | Optional | - | getModifiedUser(): ?array | setModifiedUser(?array modifiedUser): void |
| `changelogs` | `?array` | Optional | - | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `contact` | `?array` | Optional | - | getContact(): ?array | setContact(?array contact): void |
| `logEmails` | `?array` | Optional | - | getLogEmails(): ?array | setLogEmails(?array logEmails): void |
| `logSms` | `?array` | Optional | - | getLogSms(): ?array | setLogSms(?array logSms): void |
| `transactions` | `?array` | Optional | - | getTransactions(): ?array | setTransactions(?array transactions): void |
| `ccProductTransaction` | `?array` | Optional | - | getCcProductTransaction(): ?array | setCcProductTransaction(?array ccProductTransaction): void |
| `achProductTransaction` | `?array` | Optional | - | getAchProductTransaction(): ?array | setAchProductTransaction(?array achProductTransaction): void |
| `emailBlacklist` | `?array` | Optional | - | getEmailBlacklist(): ?array | setEmailBlacklist(?array emailBlacklist): void |
| `smsBlacklist` | `?array` | Optional | - | getSmsBlacklist(): ?array | setSmsBlacklist(?array smsBlacklist): void |
| `paymentUrl` | `?array` | Optional | - | getPaymentUrl(): ?array | setPaymentUrl(?array paymentUrl): void |

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
  "cell_phone": null,
  "id": null,
  "created_ts": null,
  "modified_ts": null,
  "created_user_id": null,
  "modified_user_id": null,
  "active": null,
  "is_active": null,
  "quick_invoice_setting": null,
  "tags": null,
  "quick_invoice_views": null,
  "location": null,
  "created_user": null,
  "modified_user": null,
  "changelogs": null,
  "contact": null,
  "log_emails": null,
  "log_sms": null,
  "transactions": null,
  "cc_product_transaction": null,
  "ach_product_transaction": null,
  "email_blacklist": null,
  "sms_blacklist": null,
  "payment_url": null
}
```

