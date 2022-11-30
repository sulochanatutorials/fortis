
# Item List 5

## Structure

`ItemList5`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | Item's Name, must be unique on the list<br>**Constraints**: *Maximum Length*: `100` | getName(): ?string | setName(?string name): void |
| `amount` | `?float` | Optional | Item's Amount<br>**Constraints**: `>= 0`, `<= 9999999.99` | getAmount(): ?float | setAmount(?float amount): void |

## Example (as JSON)

```json
{
  "name": null,
  "amount": null
}
```

