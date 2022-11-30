
# M List

## Structure

`MList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Batch ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `createdTs` | `int` | Required | Created Time Stamp | getCreatedTs(): int | setCreatedTs(int createdTs): void |
| `productTransactionId` | `?string` | Optional | Product Transaction Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getProductTransactionId(): ?string | setProductTransactionId(?string productTransactionId): void |
| `processingStatusId` | `float` | Required | Processing Status Id<br>**Constraints**: `>= 1`, `<= 5` | getProcessingStatusId(): float | setProcessingStatusId(float processingStatusId): void |
| `batchNum` | `?float` | Optional | Batch Number | getBatchNum(): ?float | setBatchNum(?float batchNum): void |
| `isOpen` | `?float` | Optional | Is Open<br>**Constraints**: `>= 0`, `<= 1` | getIsOpen(): ?float | setIsOpen(?float isOpen): void |
| `settlementFileName` | `?string` | Optional | Settlement File Name | getSettlementFileName(): ?string | setSettlementFileName(?string settlementFileName): void |
| `batchCloseTs` | `?float` | Optional | Batch Close Ts | getBatchCloseTs(): ?float | setBatchCloseTs(?float batchCloseTs): void |
| `batchCloseDetail` | `?string` | Optional | Batch Close Detail | getBatchCloseDetail(): ?string | setBatchCloseDetail(?string batchCloseDetail): void |
| `totalSaleAmount` | `?float` | Optional | Total Sale Amount | getTotalSaleAmount(): ?float | setTotalSaleAmount(?float totalSaleAmount): void |
| `totalSaleCount` | `?float` | Optional | Total Sale Count | getTotalSaleCount(): ?float | setTotalSaleCount(?float totalSaleCount): void |
| `totalRefundAmount` | `?float` | Optional | Total Refund Amount | getTotalRefundAmount(): ?float | setTotalRefundAmount(?float totalRefundAmount): void |
| `totalRefundCount` | `?float` | Optional | Total Refund Count | getTotalRefundCount(): ?float | setTotalRefundCount(?float totalRefundCount): void |
| `totalVoidAmount` | `?float` | Optional | Total Void Amount | getTotalVoidAmount(): ?float | setTotalVoidAmount(?float totalVoidAmount): void |
| `totalVoidCount` | `?float` | Optional | Total Void Count | getTotalVoidCount(): ?float | setTotalVoidCount(?float totalVoidCount): void |
| `changelogs` | [`?(Changelog[])`](../../doc/models/changelog.md) | Optional | Changelog Information on `expand` | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `postbackLogs` | [`?(PostbackLog[])`](../../doc/models/postback-log.md) | Optional | Postback Log Information on `expand` | getPostbackLogs(): ?array | setPostbackLogs(?array postbackLogs): void |
| `productTransaction` | [`?ProductTransaction`](../../doc/models/product-transaction.md) | Optional | Product Transaction Information on `expand` | getProductTransaction(): ?ProductTransaction | setProductTransaction(?ProductTransaction productTransaction): void |

## Example (as JSON)

```json
{
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "created_ts": 1422040992,
  "processing_status_id": 2
}
```

