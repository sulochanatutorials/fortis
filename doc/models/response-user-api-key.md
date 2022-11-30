
# Response User Api Key

## Structure

`ResponseUserApiKey`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'UserApiKey'` | getType(): string | setType(string type): void |
| `data` | [`?Data20`](../../doc/models/data-20.md) | Optional | - | getData(): ?Data20 | setData(?Data20 data): void |

## Example (as JSON)

```json
{
  "type": "UserApiKey"
}
```

