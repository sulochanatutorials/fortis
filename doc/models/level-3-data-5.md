
# Level 3 Data 5

Level 3 data object

## Structure

`Level3Data5`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `destinationCountryCode` | `?string` | Optional | Code of the country where the goods are being shipped.<br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3` | getDestinationCountryCode(): ?string | setDestinationCountryCode(?string destinationCountryCode): void |
| `dutyAmount` | `?float` | Optional | Fee amount associated with the import of the purchased goods ,Can accept Two (2) decimal places<br>**Constraints**: `>= 0`, `<= 999999999999` | getDutyAmount(): ?float | setDutyAmount(?float dutyAmount): void |
| `freightAmount` | `?float` | Optional | Freight or shipping portion of the total transaction amount ,Can accept Two (2) decimal places.<br>**Constraints**: `>= 0`, `<= 999999999999` | getFreightAmount(): ?float | setFreightAmount(?float freightAmount): void |
| `nationalTax` | `?float` | Optional | National tax for the transaction ,Can accept Two (2) decimal places.<br>**Constraints**: `<= 9999999999` | getNationalTax(): ?float | setNationalTax(?float nationalTax): void |
| `salesTax` | `?float` | Optional | Sales tax for the transaction ,Can accept Two (2) decimal places.<br>**Constraints**: `<= 9999999999` | getSalesTax(): ?float | setSalesTax(?float salesTax): void |
| `shipfromZipCode` | `?string` | Optional | Postal/ZIP code of the address from where the purchased goods are being shipped.<br>**Constraints**: *Maximum Length*: `10` | getShipfromZipCode(): ?string | setShipfromZipCode(?string shipfromZipCode): void |
| `shiptoZipCode` | `?string` | Optional | Postal/ZIP code of the address where purchased goods will be delivered.<br>**Constraints**: *Maximum Length*: `10` | getShiptoZipCode(): ?string | setShiptoZipCode(?string shiptoZipCode): void |
| `taxAmount` | `?float` | Optional | Amount of any value added taxes ,Can accept Two (2) decimal places.<br>**Constraints**: `>= 0`, `<= 999999999` | getTaxAmount(): ?float | setTaxAmount(?float taxAmount): void |
| `taxExempt` | [`?int (TaxExemptEnum)`](../../doc/models/tax-exempt-enum.md) | Optional | Sales Tax Exempt. Allowed values: “1”, “0”. | getTaxExempt(): ?int | setTaxExempt(?int taxExempt): void |
| `lineItems` | [`LineItem5[]`](../../doc/models/line-item-5.md) | Required | Array of line items in transaction | getLineItems(): array | setLineItems(array lineItems): void |

## Example (as JSON)

```json
{
  "line_items": {
    "description": "cool drink",
    "product_code": "coke12345678",
    "unit_code": "gll",
    "unit_cost": 10
  }
}
```

