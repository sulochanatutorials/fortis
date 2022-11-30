
# V1 Transactions Level 3 Visa Request

## Structure

`V1TransactionsLevel3VisaRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `level3Data` | [`Level3Data6`](../../doc/models/level-3-data-6.md) | Required | Level 3 data object | getLevel3Data(): Level3Data6 | setLevel3Data(Level3Data6 level3Data): void |

## Example (as JSON)

```json
{
  "level3_data": {
    "line_items": {
      "description": "cool drink",
      "commodity_code": "cc123456",
      "product_code": "fanta123456",
      "unit_code": "gll",
      "unit_cost": 3
    }
  }
}
```

