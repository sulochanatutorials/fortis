
# Response Quick Invoice

## Structure

`ResponseQuickInvoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'QuickInvoice'` | getType(): string | setType(string type): void |
| `data` | [`?Data9`](../../doc/models/data-9.md) | Optional | - | getData(): ?Data9 | setData(?Data9 data): void |

## Example (as JSON)

```json
{
  "type": "QuickInvoice"
}
```

