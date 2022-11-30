
# Transaction Reference

## Structure

`TransactionReference`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): ?string | setId(?string id): void |
| `transactionId` | `?string` | Optional | Transaction ID | getTransactionId(): ?string | setTransactionId(?string transactionId): void |
| `previousTransactionId` | `?string` | Optional | Previous Transaction ID | getPreviousTransactionId(): ?string | setPreviousTransactionId(?string previousTransactionId): void |
| `transactionAmount` | `?string` | Optional | Transaction Amount | getTransactionAmount(): ?string | setTransactionAmount(?string transactionAmount): void |
| `previousTransactionAmount` | `?string` | Optional | Previous Transaction Amount | getPreviousTransactionAmount(): ?string | setPreviousTransactionAmount(?string previousTransactionAmount): void |
| `previousTransactionCreatedTs` | `?float` | Optional | Previous Transaction Created Timestamp | getPreviousTransactionCreatedTs(): ?float | setPreviousTransactionCreatedTs(?float previousTransactionCreatedTs): void |
| `referenceType` | `?string` | Optional | Reference Type | getReferenceType(): ?string | setReferenceType(?string referenceType): void |
| `createdTs` | `?int` | Optional | Created Time Stamp | getCreatedTs(): ?int | setCreatedTs(?int createdTs): void |
| `createdUserId` | `?string` | Optional | User ID Created the register<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): ?string | setCreatedUserId(?string createdUserId): void |

## Example (as JSON)

```json
{
  "id": null,
  "transaction_id": null,
  "previous_transaction_id": null,
  "transaction_amount": null,
  "previous_transaction_amount": null,
  "previous_transaction_created_ts": null,
  "reference_type": null,
  "created_ts": null,
  "created_user_id": null
}
```

