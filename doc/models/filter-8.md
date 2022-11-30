
# Filter 8

You can use any `field_name` from this endpoint results as a filter, and you can also use more than one field to create AND conditions. For date fields (ended with `_ts`), you can also search for ranges using the `$gte` (Greater than or equal to) and/or  `$lte` (Lower than or equal to). You can use one of the following methods:

> /endpoint?filter={ "field_name": "Value" }
> 
> /endpoint?filter[field_name]=Value
> 
> /endpoint?filter={ "created_ts": "today" }
> 
> /endpoint?filter[created_ts]=today
> 
> /endpoint?filter={ "created_ts": { "$gte": "yesterday", "$lte": "today" } }
> 
> /endpoint?filter[created_ts][$gte]=yesterday&filter[created_ts][$lte]=today

## Structure

`Filter8`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `signature` | `?array` | Optional | - | getSignature(): ?array | setSignature(?array signature): void |
| `resource` | `?array` | Optional | - | getResource(): ?array | setResource(?array resource): void |
| `resourceId` | `?array` | Optional | - | getResourceId(): ?array | setResourceId(?array resourceId): void |
| `id` | `?array` | Optional | - | getId(): ?array | setId(?array id): void |
| `createdTs` | [`?CreatedTs1`](../../doc/models/created-ts-1.md) | Optional | - | getCreatedTs(): ?CreatedTs1 | setCreatedTs(?CreatedTs1 createdTs): void |
| `modifiedTs` | [`?ModifiedTs1`](../../doc/models/modified-ts-1.md) | Optional | - | getModifiedTs(): ?ModifiedTs1 | setModifiedTs(?ModifiedTs1 modifiedTs): void |
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

