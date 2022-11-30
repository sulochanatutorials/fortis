
# Data 17

## Structure

`Data17`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Level 3 ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `transactionId` | `string` | Required | Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getTransactionId(): string | setTransactionId(string transactionId): void |
| `level3Data` | [`Level3Data`](../../doc/models/level-3-data.md) | Required | Level 3 data object | getLevel3Data(): Level3Data | setLevel3Data(Level3Data level3Data): void |

## Example (as JSON)

```json
{
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "transaction_id": "11e95f8ec39de8fbdb0a4f1a",
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

