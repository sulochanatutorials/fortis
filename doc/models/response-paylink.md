
# Response Paylink

## Structure

`ResponsePaylink`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Paylink'` | getType(): string | setType(string type): void |
| `data` | [`?Data8`](../../doc/models/data-8.md) | Optional | - | getData(): ?Data8 | setData(?Data8 data): void |

## Example (as JSON)

```json
{
  "type": "Paylink"
}
```

