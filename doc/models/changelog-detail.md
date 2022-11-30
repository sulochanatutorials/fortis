
# Changelog Detail

## Structure

`ChangelogDetail`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): ?string | setId(?string id): void |
| `changelogId` | `?string` | Optional | Changelog ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getChangelogId(): ?string | setChangelogId(?string changelogId): void |
| `field` | `?string` | Optional | Field | getField(): ?string | setField(?string field): void |
| `oldValue` | `?string` | Optional | Old Value | getOldValue(): ?string | setOldValue(?string oldValue): void |

## Example (as JSON)

```json
{
  "id": null,
  "changelog_id": null,
  "field": null,
  "old_value": null
}
```

