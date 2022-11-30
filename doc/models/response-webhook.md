
# Response Webhook

## Structure

`ResponseWebhook`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'Webhook'` | getType(): string | setType(string type): void |
| `data` | [`?Data22`](../../doc/models/data-22.md) | Optional | - | getData(): ?Data22 | setData(?Data22 data): void |

## Example (as JSON)

```json
{
  "type": "Webhook"
}
```

