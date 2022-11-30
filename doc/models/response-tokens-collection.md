
# Response Tokens Collection

## Structure

`ResponseTokensCollection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'TokensCollection'` | getType(): string | setType(string type): void |
| `mList` | [`List11[]`](../../doc/models/list-11.md) | Required | Resource Members | getMList(): array | setMList(array mList): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | Pagination page links | getLinks(): ?Links | setLinks(?Links links): void |
| `pagination` | [`?Pagination`](../../doc/models/pagination.md) | Optional | Pagination info | getPagination(): ?Pagination | setPagination(?Pagination pagination): void |
| `sort` | [`?Sort`](../../doc/models/sort.md) | Optional | Sort information used on the results | getSort(): ?Sort | setSort(?Sort sort): void |

## Example (as JSON)

```json
{
  "type": "TokensCollection",
  "list": {
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "account_type": "checking",
    "cau_summary_status_id": 1,
    "created_ts": 1422040992,
    "first_six": "700953",
    "has_recurring": false,
    "last_four": "3657",
    "modified_ts": 1422040992,
    "payment_method": "cc"
  }
}
```

