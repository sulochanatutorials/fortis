
# Response 416 Date Range

## Structure

`Response416dateRange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `statusCode` | `?int` | Optional | Response code | getStatusCode(): ?int | setStatusCode(?int statusCode): void |
| `error` | `?string` | Optional | Requested Range Not Satisfiable | getError(): ?string | setError(?string error): void |
| `message` | `?string` | Optional | The "fieldDate" should be less or equal to "ISODate". | getMessage(): ?string | setMessage(?string message): void |

## Example (as JSON)

```json
{
  "statusCode": null,
  "error": null,
  "message": null
}
```

