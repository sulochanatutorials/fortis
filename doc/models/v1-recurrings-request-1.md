
# V1 Recurrings Request 1

## Structure

`V1RecurringsRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `nextRunDate` | `?string` | Optional | Next Run Date<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getNextRunDate(): ?string | setNextRunDate(?string nextRunDate): void |
| `accountVaultId` | `?string` | Optional | Token ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getAccountVaultId(): ?string | setAccountVaultId(?string accountVaultId): void |
| `active` | `?bool` | Optional | Active | getActive(): ?bool | setActive(?bool active): void |
| `description` | `?string` | Optional | Description<br>**Constraints**: *Maximum Length*: `36` | getDescription(): ?string | setDescription(?string description): void |
| `endDate` | `?string` | Optional | End date<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getEndDate(): ?string | setEndDate(?string endDate): void |
| `installmentTotalCount` | `?int` | Optional | Installment Total Count<br>**Constraints**: `>= 1`, `<= 999` | getInstallmentTotalCount(): ?int | setInstallmentTotalCount(?int installmentTotalCount): void |
| `interval` | `?int` | Optional | Interval<br>**Constraints**: `>= 0`, `<= 365` | getInterval(): ?int | setInterval(?int interval): void |
| `intervalType` | [`?string (IntervalTypeEnum)`](../../doc/models/interval-type-enum.md) | Optional | Interval Type | getIntervalType(): ?string | setIntervalType(?string intervalType): void |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `notificationDays` | `?int` | Optional | Notification Days<br>**Constraints**: `>= 0`, `<= 365` | getNotificationDays(): ?int | setNotificationDays(?int notificationDays): void |
| `paymentMethod` | [`?string (PaymentMethod1Enum)`](../../doc/models/payment-method-1-enum.md) | Optional | Payment Method | getPaymentMethod(): ?string | setPaymentMethod(?string paymentMethod): void |
| `productTransactionId` | `?string` | Optional | Product Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getProductTransactionId(): ?string | setProductTransactionId(?string productTransactionId): void |
| `recurringId` | `?string` | Optional | Recurring ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getRecurringId(): ?string | setRecurringId(?string recurringId): void |
| `recurringApiId` | `?string` | Optional | Recurring Api ID<br>**Constraints**: *Maximum Length*: `64` | getRecurringApiId(): ?string | setRecurringApiId(?string recurringApiId): void |
| `startDate` | `?string` | Optional | Start date<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getStartDate(): ?string | setStartDate(?string startDate): void |
| `status` | [`?string (StatusEnum)`](../../doc/models/status-enum.md) | Optional | Status | getStatus(): ?string | setStatus(?string status): void |
| `transactionAmount` | `?float` | Optional | Transaction amount | getTransactionAmount(): ?float | setTransactionAmount(?float transactionAmount): void |
| `termsAgree` | `?bool` | Optional | Terms Agree | getTermsAgree(): ?bool | setTermsAgree(?bool termsAgree): void |
| `termsAgreeIp` | `?string` | Optional | Terms Agree Ip | getTermsAgreeIp(): ?string | setTermsAgreeIp(?string termsAgreeIp): void |
| `recurringC1` | `?string` | Optional | Custom field used for integrations<br>**Constraints**: *Maximum Length*: `128` | getRecurringC1(): ?string | setRecurringC1(?string recurringC1): void |
| `recurringC2` | `?string` | Optional | Custom field used for integrations<br>**Constraints**: *Maximum Length*: `128` | getRecurringC2(): ?string | setRecurringC2(?string recurringC2): void |
| `recurringC3` | `?string` | Optional | Custom field used for integrations<br>**Constraints**: *Maximum Length*: `128` | getRecurringC3(): ?string | setRecurringC3(?string recurringC3): void |
| `sendToProcAsRecur` | `?bool` | Optional | Send To Proc As Recur | getSendToProcAsRecur(): ?bool | setSendToProcAsRecur(?bool sendToProcAsRecur): void |

## Example (as JSON)

```json
{
  "next_run_date": null,
  "account_vault_id": null,
  "active": null,
  "description": null,
  "end_date": null,
  "installment_total_count": null,
  "interval": null,
  "interval_type": null,
  "location_id": null,
  "notification_days": null,
  "payment_method": null,
  "product_transaction_id": null,
  "recurring_id": null,
  "recurring_api_id": null,
  "start_date": null,
  "status": null,
  "transaction_amount": null,
  "terms_agree": null,
  "terms_agree_ip": null,
  "recurring_c1": null,
  "recurring_c2": null,
  "recurring_c3": null,
  "send_to_proc_as_recur": null
}
```

