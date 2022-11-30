
# Response 412 Exception

## Structure

`Response412Exception`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statusCode` | `?int` | Optional | Response code | getStatusCode(): ?int | setStatusCode(?int statusCode): void |
| `error` | `?string` | Optional | Error description | getError(): ?string | setError(?string error): void |
| `message` | `?string` | Optional | Error message | getMessage(): ?string | setMessage(?string message): void |
| `details` | [`?(Detail[])`](../../doc/models/detail.md) | Optional | Error detail | getDetails(): ?array | setDetails(?array details): void |

## Example (as JSON)

```json
{
  "statusCode": null,
  "error": null,
  "message": null,
  "details": null
}
```

