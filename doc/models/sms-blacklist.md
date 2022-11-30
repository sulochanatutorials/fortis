
# Sms Blacklist

Sms Blacklist Information on `expand`

## Structure

`SmsBlacklist`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Blacklist ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): ?string | setId(?string id): void |
| `isBlacklisted` | `?bool` | Optional | isBlacklisted | getIsBlacklisted(): ?bool | setIsBlacklisted(?bool isBlacklisted): void |
| `detail` | `?bool` | Optional | Contact Id | getDetail(): ?bool | setDetail(?bool detail): void |
| `createdTs` | `?int` | Optional | Created Time Stamp | getCreatedTs(): ?int | setCreatedTs(?int createdTs): void |

## Example (as JSON)

```json
{
  "id": null,
  "isBlacklisted": null,
  "detail": null,
  "created_ts": null
}
```

