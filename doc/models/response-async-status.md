
# Response Async Status

## Structure

`ResponseAsyncStatus`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'AsyncStatus'` | getType(): string | setType(string type): void |
| `data` | [`?Data`](../../doc/models/data.md) | Optional | - | getData(): ?Data | setData(?Data data): void |

## Example (as JSON)

```json
{
  "type": "AsyncStatus"
}
```

