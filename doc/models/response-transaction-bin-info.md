
# Response Transaction Bin Info

## Structure

`ResponseTransactionBinInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'TransactionBinInfo'` | getType(): string | setType(string type): void |
| `data` | [`?Data16`](../../doc/models/data-16.md) | Optional | - | getData(): ?Data16 | setData(?Data16 data): void |

## Example (as JSON)

```json
{
  "type": "TransactionBinInfo"
}
```

