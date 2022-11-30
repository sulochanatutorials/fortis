
# Response Location

## Structure

`ResponseLocation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Location'` | getType(): string | setType(string type): void |
| `data` | [`?Data5`](../../doc/models/data-5.md) | Optional | - | getData(): ?Data5 | setData(?Data5 data): void |

## Example (as JSON)

```json
{
  "type": "Location"
}
```

