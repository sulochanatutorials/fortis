
# Data 10

## Structure

`Data10`

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
| `logEmails` | [`?(LogEmail[])`](../../doc/models/log-email.md) | Optional | Log Email Information on `expand` | getLogEmails(): ?array | setLogEmails(?array logEmails): void |
| `contact` | [`?Contact1`](../../doc/models/contact-1.md) | Optional | Contact Information on `expand` | getContact(): ?Contact1 | setContact(?Contact1 contact): void |
| `accountVault` | [`?AccountVault`](../../doc/models/account-vault.md) | Optional | Token Information on `expand` | getAccountVault(): ?AccountVault | setAccountVault(?AccountVault accountVault): void |
| `createdUser` | [`?CreatedUser`](../../doc/models/created-user.md) | Optional | User Information on `expand` | getCreatedUser(): ?CreatedUser | setCreatedUser(?CreatedUser createdUser): void |
| `signature` | [`?Signature`](../../doc/models/signature.md) | Optional | Signature Information on `expand` | getSignature(): ?Signature | setSignature(?Signature signature): void |
| `paymentSchedule` | `?(string[])` | Optional | Payment Schedule Information on `expand`<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getPaymentSchedule(): ?array | setPaymentSchedule(?array paymentSchedule): void |
| `location` | [`?Location`](../../doc/models/location.md) | Optional | Location Information on `expand` | getLocation(): ?Location | setLocation(?Location location): void |
| `productTransaction` | [`?ProductTransaction`](../../doc/models/product-transaction.md) | Optional | Product Transaction Information on `expand` | getProductTransaction(): ?ProductTransaction | setProductTransaction(?ProductTransaction productTransaction): void |
| `nextRunDateMin` | `?string` | Optional | Next Run Date Min Information on `expand`<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getNextRunDateMin(): ?string | setNextRunDateMin(?string nextRunDateMin): void |
| `nextRunDateMax` | `?string` | Optional | Next Run Date Max Information on `expand`<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getNextRunDateMax(): ?string | setNextRunDateMax(?string nextRunDateMax): void |
| `tags` | [`?(Tag[])`](../../doc/models/tag.md) | Optional | Tag Information on `expand` | getTags(): ?array | setTags(?array tags): void |
| `allTags` | [`?(AllTag[])`](../../doc/models/all-tag.md) | Optional | All Tag Information on `expand` | getAllTags(): ?array | setAllTags(?array allTags): void |
| `changelogs` | [`?(Changelog[])`](../../doc/models/changelog.md) | Optional | Changelog Information on `expand` | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `forecast` | [`?Forecast`](../../doc/models/forecast.md) | Optional | Forecast Information on `expand` | getForecast(): ?Forecast | setForecast(?Forecast forecast): void |
| `recurringSplits` | [`?(RecurringSplit[])`](../../doc/models/recurring-split.md) | Optional | Recurring Split Information on `expand` | getRecurringSplits(): ?array | setRecurringSplits(?array recurringSplits): void |

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

