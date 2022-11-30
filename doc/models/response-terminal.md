
# Response Terminal

## Structure

`ResponseTerminal`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Terminal'` | getType(): string | setType(string type): void |
| `data` | [`?Data13`](../../doc/models/data-13.md) | Optional | - | getData(): ?Data13 | setData(?Data13 data): void |

## Example (as JSON)

```json
{
  "type": "Terminal"
}
```

