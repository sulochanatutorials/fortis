
# Response Contact

## Structure

`ResponseContact`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Contact'` | getType(): string | setType(string type): void |
| `data` | [`?Data2`](../../doc/models/data-2.md) | Optional | - | getData(): ?Data2 | setData(?Data2 data): void |

## Example (as JSON)

```json
{
  "type": "Contact"
}
```

