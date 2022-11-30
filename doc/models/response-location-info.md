
# Response Location Info

## Structure

`ResponseLocationInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'LocationInfo'` | getType(): string | setType(string type): void |
| `data` | [`?Data6`](../../doc/models/data-6.md) | Optional | - | getData(): ?Data6 | setData(?Data6 data): void |

## Example (as JSON)

```json
{
  "type": "LocationInfo"
}
```

