
# Response Recurrings Collection

## Structure

`ResponseRecurringsCollection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'RecurringsCollection'` | getType(): string | setType(string type): void |
| `mList` | [`List7[]`](../../doc/models/list-7.md) | Required | Resource Members | getMList(): array | setMList(array mList): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | Pagination page links | getLinks(): ?Links | setLinks(?Links links): void |
| `pagination` | [`?Pagination`](../../doc/models/pagination.md) | Optional | Pagination info | getPagination(): ?Pagination | setPagination(?Pagination pagination): void |
| `sort` | [`?Sort`](../../doc/models/sort.md) | Optional | Sort information used on the results | getSort(): ?Sort | setSort(?Sort sort): void |

## Example (as JSON)

```json
{
  "type": "RecurringsCollection",
  "list": {
    "account_vault_id": "11e95f8ec39de8fbdb0a4f1a",
    "active": true,
    "interval": 1,
    "interval_type": "d",
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "payment_method": "cc",
    "start_date": "2021-12-01",
    "status": "active",
    "transaction_amount": 3,
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "next_run_date": "2021-12-01",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "recurring_type_id": "i"
  }
}
```

