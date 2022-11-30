
# Response Device Term

## Structure

`ResponseDeviceTerm`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'DeviceTerm'` | getType(): string | setType(string type): void |
| `data` | [`?Data3`](../../doc/models/data-3.md) | Optional | - | getData(): ?Data3 | setData(?Data3 data): void |

## Example (as JSON)

```json
{
  "type": "DeviceTerm"
}
```

