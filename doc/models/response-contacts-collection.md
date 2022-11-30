
# Response Contacts Collection

## Structure

`ResponseContactsCollection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'ContactsCollection'` | getType(): string | setType(string type): void |
| `mList` | [`List1[]`](../../doc/models/list-1.md) | Required | Resource Members | getMList(): array | setMList(array mList): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | Pagination page links | getLinks(): ?Links | setLinks(?Links links): void |
| `pagination` | [`?Pagination`](../../doc/models/pagination.md) | Optional | Pagination info | getPagination(): ?Pagination | setPagination(?Pagination pagination): void |
| `sort` | [`?Sort`](../../doc/models/sort.md) | Optional | Sort information used on the results | getSort(): ?Sort | setSort(?Sort sort): void |

## Example (as JSON)

```json
{
  "type": "ContactsCollection",
  "list": {
    "location_id": "11e95f8ec39de8fbdb0a4f1a",
    "last_name": "Smith",
    "email_trx_receipt": true,
    "header_message_type": 0,
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "active": true
  }
}
```

