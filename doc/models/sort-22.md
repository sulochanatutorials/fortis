
# Sort 22

You can use any `field_name` from this endpoint results, and you can combine more than one field for more complex sorting. You can use one of the following methods:

> /endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
> 
> /endpoint?sort[field_name]=asc&sort[field_name2]=desc

## Structure

`Sort22`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `signature` | `?array` | Optional | - | getSignature(): ?array | setSignature(?array signature): void |
| `resource` | `?array` | Optional | - | getResource(): ?array | setResource(?array resource): void |
| `resourceId` | `?array` | Optional | - | getResourceId(): ?array | setResourceId(?array resourceId): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | `?array` | Optional | - | getCreatedTs(): ?array | setCreatedTs(?array createdTs): void |
| `modifiedTs` | `?array` | Optional | - | getModifiedTs(): ?array | setModifiedTs(?array modifiedTs): void |
| `rawSignature` | `?array` | Optional | - | getRawSignature(): ?array | setRawSignature(?array rawSignature): void |

## Example (as JSON)

```json
{
  "signature": null,
  "resource": null,
  "resource_id": null,
  "id": null,
  "created_ts": null,
  "modified_ts": null,
  "raw_signature": null
}
```

