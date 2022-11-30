
# Line Item 6

## Structure

`LineItem6`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `string` | Required | Description of the item.<br>**Constraints**: *Maximum Length*: `26` | getDescription(): string | setDescription(string description): void |
| `commodityCode` | `string` | Required | An international description code of the individual good or service being supplied.<br>**Constraints**: *Maximum Length*: `12` | getCommodityCode(): string | setCommodityCode(string commodityCode): void |
| `discountAmount` | `?float` | Optional | Total discount amount applied against the line item total ,Can accept Two (2) decimal places.<br>**Constraints**: `<= 999999999999` | getDiscountAmount(): ?float | setDiscountAmount(?float discountAmount): void |
| `otherTaxAmount` | `?float` | Optional | Used if city or multiple county taxes need to be broken out separately ,Can accept Two (2) decimal places.<br>**Constraints**: `<= 999999999999` | getOtherTaxAmount(): ?float | setOtherTaxAmount(?float otherTaxAmount): void |
| `productCode` | `string` | Required | Merchant-defined description code of the item.<br>**Constraints**: *Maximum Length*: `12` | getProductCode(): string | setProductCode(string productCode): void |
| `quantity` | `?float` | Optional | Quantity of the item, can accept Four (4) decimal places.<br>**Constraints**: `<= 99999` | getQuantity(): ?float | setQuantity(?float quantity): void |
| `taxAmount` | `?float` | Optional | Amount of any value added taxes, can accept Two (2) decimal places.<br>**Constraints**: `>= 0`, `<= 999999999` | getTaxAmount(): ?float | setTaxAmount(?float taxAmount): void |
| `taxRate` | `?float` | Optional | Tax rate used to calculate the sales tax amount, can accept 2 decimal places.<br>**Constraints**: `<= 9999` | getTaxRate(): ?float | setTaxRate(?float taxRate): void |
| `unitCode` | `string` | Required | Units of measurement as used in international trade. (See Codes for Units of Measurement below for unit code abbreviations)<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getUnitCode(): string | setUnitCode(string unitCode): void |
| `unitCost` | `float` | Required | Unit cost of the item ,Can accept Four (4) decimal places.<br>**Constraints**: `<= 999999999999` | getUnitCost(): float | setUnitCost(float unitCost): void |

## Example (as JSON)

```json
{
  "description": "cool drink",
  "commodity_code": "cc123456",
  "product_code": "fanta123456",
  "unit_code": "gll",
  "unit_cost": 3
}
```

