
# V1 Transactions Level 3 Master Card Request

## Structure

`V1TransactionsLevel3MasterCardRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `level3Data` | [`Level3Data5`](../../doc/models/level-3-data-5.md) | Required | Level 3 data object | getLevel3Data(): Level3Data5 | setLevel3Data(Level3Data5 level3Data): void |

## Example (as JSON)

```json
{
  "level3_data": {
    "line_items": {
      "description": "cool drink",
      "product_code": "coke12345678",
      "unit_code": "gll",
      "unit_cost": 10
    }
  }
}
```

