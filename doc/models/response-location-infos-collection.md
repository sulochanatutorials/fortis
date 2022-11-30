
# Response Location Infos Collection

## Structure

`ResponseLocationInfosCollection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'LocationInfosCollection'` | getType(): string | setType(string type): void |
| `mList` | [`List4[]`](../../doc/models/list-4.md) | Required | Resource Members | getMList(): array | setMList(array mList): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | Pagination page links | getLinks(): ?Links | setLinks(?Links links): void |
| `pagination` | [`?Pagination`](../../doc/models/pagination.md) | Optional | Pagination info | getPagination(): ?Pagination | setPagination(?Pagination pagination): void |
| `sort` | [`?Sort`](../../doc/models/sort.md) | Optional | Sort information used on the results | getSort(): ?Sort | setSort(?Sort sort): void |

## Example (as JSON)

```json
{
  "type": "LocationInfosCollection",
  "list": {
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "name": "Sample Company Headquarters",
    "branding_domain": null,
    "product_transactions": null,
    "product_file": null,
    "product_accountvault": null,
    "product_recurring": null,
    "tags": null,
    "terminals": null
  }
}
```

