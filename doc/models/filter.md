
# Filter

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

`Filter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | [`?CreatedTs1`](../../doc/models/created-ts-1.md) | Optional | - | getCreatedTs(): ?CreatedTs1 | setCreatedTs(?CreatedTs1 createdTs): void |
| `productTransactionId` | `?array` | Optional | - | getProductTransactionId(): ?array | setProductTransactionId(?array productTransactionId): void |
| `processingStatusId` | `?array` | Optional | - | getProcessingStatusId(): ?array | setProcessingStatusId(?array processingStatusId): void |
| `batchNum` | `?array` | Optional | - | getBatchNum(): ?array | setBatchNum(?array batchNum): void |
| `isOpen` | `?array` | Optional | - | getIsOpen(): ?array | setIsOpen(?array isOpen): void |
| `settlementFileName` | `?array` | Optional | - | getSettlementFileName(): ?array | setSettlementFileName(?array settlementFileName): void |
| `batchCloseTs` | [`?BatchCloseTs1`](../../doc/models/batch-close-ts-1.md) | Optional | - | getBatchCloseTs(): ?BatchCloseTs1 | setBatchCloseTs(?BatchCloseTs1 batchCloseTs): void |
| `batchCloseDetail` | `?array` | Optional | - | getBatchCloseDetail(): ?array | setBatchCloseDetail(?array batchCloseDetail): void |
| `totalSaleAmount` | `?array` | Optional | - | getTotalSaleAmount(): ?array | setTotalSaleAmount(?array totalSaleAmount): void |
| `totalSaleCount` | `?array` | Optional | - | getTotalSaleCount(): ?array | setTotalSaleCount(?array totalSaleCount): void |
| `totalRefundAmount` | `?array` | Optional | - | getTotalRefundAmount(): ?array | setTotalRefundAmount(?array totalRefundAmount): void |
| `totalRefundCount` | `?array` | Optional | - | getTotalRefundCount(): ?array | setTotalRefundCount(?array totalRefundCount): void |
| `totalVoidAmount` | `?array` | Optional | - | getTotalVoidAmount(): ?array | setTotalVoidAmount(?array totalVoidAmount): void |
| `totalVoidCount` | `?array` | Optional | - | getTotalVoidCount(): ?array | setTotalVoidCount(?array totalVoidCount): void |
| `changelogs` | `?array` | Optional | - | getChangelogs(): ?array | setChangelogs(?array changelogs): void |
| `postbackLogs` | `?array` | Optional | - | getPostbackLogs(): ?array | setPostbackLogs(?array postbackLogs): void |
| `productTransaction` | `?array` | Optional | - | getProductTransaction(): ?array | setProductTransaction(?array productTransaction): void |

## Example (as JSON)

```json
{
  "id": null,
  "created_ts": null,
  "product_transaction_id": null,
  "processing_status_id": null,
  "batch_num": null,
  "is_open": null,
  "settlement_file_name": null,
  "batch_close_ts": null,
  "batch_close_detail": null,
  "total_sale_amount": null,
  "total_sale_count": null,
  "total_refund_amount": null,
  "total_refund_count": null,
  "total_void_amount": null,
  "total_void_count": null,
  "changelogs": null,
  "postback_logs": null,
  "product_transaction": null
}
```

