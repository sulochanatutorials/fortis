
# Response Recurring

## Structure

`ResponseRecurring`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Recurring'` | getType(): string | setType(string type): void |
| `data` | [`?Data10`](../../doc/models/data-10.md) | Optional | - | getData(): ?Data10 | setData(?Data10 data): void |

## Example (as JSON)

```json
{
  "type": "Recurring"
}
```

