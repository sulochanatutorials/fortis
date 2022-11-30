
# Response Users Collection

## Structure

`ResponseUsersCollection`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | `string` | Required, Constant | Resource Type<br>**Default**: `'UsersCollection'` | getType(): string | setType(string type): void |
| `mList` | [`List13[]`](../../doc/models/list-13.md) | Required | Resource Members | getMList(): array | setMList(array mList): void |
| `links` | [`?Links`](../../doc/models/links.md) | Optional | Pagination page links | getLinks(): ?Links | setLinks(?Links links): void |
| `pagination` | [`?Pagination`](../../doc/models/pagination.md) | Optional | Pagination info | getPagination(): ?Pagination | setPagination(?Pagination pagination): void |
| `sort` | [`?Sort`](../../doc/models/sort.md) | Optional | Sort information used on the results | getSort(): ?Sort | setSort(?Sort sort): void |

## Example (as JSON)

```json
{
  "type": "UsersCollection",
  "list": {
    "email": "email@domain.com",
    "last_name": "Smith",
    "primary_location_id": "11e95f8ec39de8fbdb0a4f1a",
    "tz": "America/New_York",
    "username": "{user_name}",
    "user_type_code": 100,
    "id": "11e95f8ec39de8fbdb0a4f1a",
    "status": true,
    "login_attempts": 0,
    "last_login_ts": 1422040992,
    "created_ts": 1422040992,
    "modified_ts": 1422040992,
    "created_user_id": "11e95f8ec39de8fbdb0a4f1a",
    "current_date_time": "03/11/2019 17:38:26"
  }
}
```

