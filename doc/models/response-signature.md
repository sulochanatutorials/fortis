
# Response Signature

## Structure

`ResponseSignature`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Signature'` | getType(): string | setType(string type): void |
| `data` | [`?Data11`](../../doc/models/data-11.md) | Optional | - | getData(): ?Data11 | setData(?Data11 data): void |

## Example (as JSON)

```json
{
  "type": "Signature"
}
```

