
# Response Transaction Intention

## Structure

`ResponseTransactionIntention`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'TransactionIntention'` | getType(): string | setType(string type): void |
| `data` | [`?Data4`](../../doc/models/data-4.md) | Optional | - | getData(): ?Data4 | setData(?Data4 data): void |

## Example (as JSON)

```json
{
  "type": "TransactionIntention"
}
```

