
# Response User

## Structure

`ResponseUser`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'User'` | getType(): string | setType(string type): void |
| `data` | [`?Data21`](../../doc/models/data-21.md) | Optional | - | getData(): ?Data21 | setData(?Data21 data): void |

## Example (as JSON)

```json
{
  "type": "User"
}
```

