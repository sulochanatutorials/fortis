
# Response Async Processing

## Structure

`ResponseAsyncProcessing`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'AsyncProcessing'` | getType(): string | setType(string type): void |
| `data` | [`?Data1`](../../doc/models/data-1.md) | Optional | - | getData(): ?Data1 | setData(?Data1 data): void |

## Example (as JSON)

```json
{
  "type": "AsyncProcessing"
}
```

