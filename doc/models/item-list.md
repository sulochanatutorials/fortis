
# Item List

## Structure

`ItemList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | Item's Name, must be unique on the list<br>**Constraints**: *Maximum Length*: `100` | getName(): string | setName(string name): void |
| `amount` | `float` | Required | Item's Amount<br>**Constraints**: `>= 0`, `<= 9999999.99` | getAmount(): float | setAmount(float amount): void |

## Example (as JSON)

```json
{
  "name": "Bread",
  "amount": 20.15
}
```

