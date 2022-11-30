
# User

User

## Structure

`User`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): ?string | setId(?string id): void |
| `username` | `?string` | Optional | Username | getUsername(): ?string | setUsername(?string username): void |
| `firstName` | `?string` | Optional | First Name | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | Last Name | getLastName(): ?string | setLastName(?string lastName): void |

## Example (as JSON)

```json
{
  "id": null,
  "username": null,
  "first_name": null,
  "last_name": null
}
```

