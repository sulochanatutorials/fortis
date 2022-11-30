
# Active Recurring

## Structure

`ActiveRecurring`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `accountVaultId` | `string` | Required | Token ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getAccountVaultId(): string | setAccountVaultId(string accountVaultId): void |
| `active` | `bool` | Required | Active | getActive(): bool | setActive(bool active): void |
| `description` | `?string` | Optional | Description<br>**Constraints**: *Maximum Length*: `36` | getDescription(): ?string | setDescription(?string description): void |
| `endDate` | `?string` | Optional | End date<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getEndDate(): ?string | setEndDate(?string endDate): void |
| `installmentTotalCount` | `?int` | Optional | Installment Total Count<br>**Constraints**: `>= 1`, `<= 999` | getInstallmentTotalCount(): ?int | setInstallmentTotalCount(?int installmentTotalCount): void |
| `interval` | `int` | Required | Interval<br>**Constraints**: `>= 0`, `<= 365` | getInterval(): int | setInterval(int interval): void |
| `intervalType` | [`string (IntervalTypeEnum)`](../../doc/models/interval-type-enum.md) | Required | Interval Type | getIntervalType(): string | setIntervalType(string intervalType): void |
| `locationId` | `string` | Required | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): string | setLocationId(string locationId): void |
| `notificationDays` | `?int` | Optional | Notification Days<br>**Constraints**: `>= 0`, `<= 365` | getNotificationDays(): ?int | setNotificationDays(?int notificationDays): void |
| `paymentMethod` | [`string (PaymentMethod1Enum)`](../../doc/models/payment-method-1-enum.md) | Required | Payment Method | getPaymentMethod(): string | setPaymentMethod(string paymentMethod): void |
| `productTransactionId` | `?string` | Optional | Product Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getProductTransactionId(): ?string | setProductTransactionId(?string productTransactionId): void |
| `recurringId` | `?string` | Optional | Recurring ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getRecurringId(): ?string | setRecurringId(?string recurringId): void |
| `recurringApiId` | `?string` | Optional | Recurring Api ID<br>**Constraints**: *Maximum Length*: `64` | getRecurringApiId(): ?string | setRecurringApiId(?string recurringApiId): void |
| `startDate` | `string` | Required | Start date<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getStartDate(): string | setStartDate(string startDate): void |
| `status` | [`string (StatusEnum)`](../../doc/models/status-enum.md) | Required | Status | getStatus(): string | setStatus(string status): void |
| `transactionAmount` | `float` | Required | Transaction amount | getTransactionAmount(): float | setTransactionAmount(float transactionAmount): void |
| `termsAgree` | `?bool` | Optional | Terms Agree | getTermsAgree(): ?bool | setTermsAgree(?bool termsAgree): void |
| `termsAgreeIp` | `?string` | Optional | Terms Agree Ip | getTermsAgreeIp(): ?string | setTermsAgreeIp(?string termsAgreeIp): void |
| `recurringC1` | `?string` | Optional | Custom field used for integrations<br>**Constraints**: *Maximum Length*: `128` | getRecurringC1(): ?string | setRecurringC1(?string recurringC1): void |
| `recurringC2` | `?string` | Optional | Custom field used for integrations<br>**Constraints**: *Maximum Length*: `128` | getRecurringC2(): ?string | setRecurringC2(?string recurringC2): void |
| `recurringC3` | `?string` | Optional | Custom field used for integrations<br>**Constraints**: *Maximum Length*: `128` | getRecurringC3(): ?string | setRecurringC3(?string recurringC3): void |
| `sendToProcAsRecur` | `?bool` | Optional | Send To Proc As Recur | getSendToProcAsRecur(): ?bool | setSendToProcAsRecur(?bool sendToProcAsRecur): void |
| `id` | `string` | Required | Recurring ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `nextRunDate` | `string` | Required | Next Run Date<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getNextRunDate(): string | setNextRunDate(string nextRunDate): void |
| `createdTs` | `int` | Required | Created Time Stamp | getCreatedTs(): int | setCreatedTs(int createdTs): void |
| `modifiedTs` | `int` | Required | Modified Time Stamp | getModifiedTs(): int | setModifiedTs(int modifiedTs): void |
| `recurringTypeId` | [`string (RecurringTypeIdEnum)`](../../doc/models/recurring-type-id-enum.md) | Required | Recurring Type | getRecurringTypeId(): string | setRecurringTypeId(string recurringTypeId): void |

## Example (as JSON)

```json
{
  "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
  "active": true,
  "interval": 1,
  "interval_type": "d",
  "location_id": "11e95f8ec39de8fbdb0a4f1a",
  "payment_method": "cc",
  "start_date": "2021-12-01",
  "status": "active",
  "transaction_amount": 3,
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "next_run_date": "2021-12-01",
  "created_ts": 1422040992,
  "modified_ts": 1422040992,
  "recurring_type_id": "i"
}
```

