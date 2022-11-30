
# Line Item 5

## Structure

`LineItem5`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `alternateTaxId` | `?string` | Optional | Tax identification number of the merchant that reported the alternate tax amount.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `15` | getAlternateTaxId(): ?string | setAlternateTaxId(?string alternateTaxId): void |
| `debitCredit` | [`?string (DebitCreditEnum)`](../../doc/models/debit-credit-enum.md) | Optional | Indicator used to reflect debit (D) or credit (C) transaction. Allowed values: “D”, “C”. | getDebitCredit(): ?string | setDebitCredit(?string debitCredit): void |
| `description` | `string` | Required | Description of the item.<br>**Constraints**: *Maximum Length*: `26` | getDescription(): string | setDescription(string description): void |
| `discountAmount` | `?float` | Optional | Total discount amount applied against the line item total ,Can accept Two (2) decimal places.<br>**Constraints**: `<= 999999999999` | getDiscountAmount(): ?float | setDiscountAmount(?float discountAmount): void |
| `discountRate` | `?float` | Optional | Discount rate for the line item ,Can accept Two (2) decimal places.<br>**Constraints**: `<= 99999` | getDiscountRate(): ?float | setDiscountRate(?float discountRate): void |
| `productCode` | `string` | Required | Merchant-defined description code of the item.<br>**Constraints**: *Maximum Length*: `12` | getProductCode(): string | setProductCode(string productCode): void |
| `quantity` | `?float` | Optional | Quantity of the item, can accept Four (4) decimal places.<br>**Constraints**: `<= 99999` | getQuantity(): ?float | setQuantity(?float quantity): void |
| `taxAmount` | `?float` | Optional | Amount of any value added taxes, can accept Two (2) decimal places.<br>**Constraints**: `>= 0`, `<= 999999999` | getTaxAmount(): ?float | setTaxAmount(?float taxAmount): void |
| `taxRate` | `?float` | Optional | Tax rate used to calculate the sales tax amount, can accept 2 decimal places.<br>**Constraints**: `<= 9999` | getTaxRate(): ?float | setTaxRate(?float taxRate): void |
| `taxTypeApplied` | `?string` | Optional | Type of value-added taxes that are being used (Conditional If tax amount is supplied)<br>**Constraints**: *Maximum Length*: `4` | getTaxTypeApplied(): ?string | setTaxTypeApplied(?string taxTypeApplied): void |
| `taxTypeId` | `?string` | Optional | Indicates the type of tax collected in relationship to a specific tax amount (Conditional If tax amount is supplied)<br>**Constraints**: *Minimum Length*: `2`, *Maximum Length*: `2` | getTaxTypeId(): ?string | setTaxTypeId(?string taxTypeId): void |
| `unitCode` | `string` | Required | Units of measurement as used in international trade. (See Codes for Units of Measurement below for unit code abbreviations)<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getUnitCode(): string | setUnitCode(string unitCode): void |
| `unitCost` | `float` | Required | Unit cost of the item ,Can accept Four (4) decimal places.<br>**Constraints**: `<= 999999999999` | getUnitCost(): float | setUnitCost(float unitCost): void |

## Example (as JSON)

```json
{
  "description": "cool drink",
  "product_code": "coke12345678",
  "unit_code": "gll",
  "unit_cost": 10
}
```

