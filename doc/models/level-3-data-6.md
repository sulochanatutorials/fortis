
# Level 3 Data 6

Level 3 data object

## Structure

`Level3Data6`

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
| `customerVatRegistration` | `?string` | Optional | Customer VAT Registration<br>**Constraints**: *Maximum Length*: `13` | getCustomerVatRegistration(): ?string | setCustomerVatRegistration(?string customerVatRegistration): void |
| `merchantVatRegistration` | `?string` | Optional | Merchant VAT Registration<br>**Constraints**: *Maximum Length*: `20` | getMerchantVatRegistration(): ?string | setMerchantVatRegistration(?string merchantVatRegistration): void |
| `orderDate` | `?string` | Optional | Order Date<br>**Constraints**: *Minimum Length*: `6`, *Maximum Length*: `6` | getOrderDate(): ?string | setOrderDate(?string orderDate): void |
| `summaryCommodityCode` | `?string` | Optional | Summary Commodity Code<br>**Constraints**: *Maximum Length*: `4` | getSummaryCommodityCode(): ?string | setSummaryCommodityCode(?string summaryCommodityCode): void |
| `taxRate` | `?float` | Optional | Tax rate used to calculate the sales tax amount, can accept 2 decimal places.<br>**Constraints**: `<= 9999` | getTaxRate(): ?float | setTaxRate(?float taxRate): void |
| `uniqueVatRefNumber` | `?string` | Optional | Unique VAT Reference Number<br>**Constraints**: *Maximum Length*: `15` | getUniqueVatRefNumber(): ?string | setUniqueVatRefNumber(?string uniqueVatRefNumber): void |
| `lineItems` | [`LineItem6[]`](../../doc/models/line-item-6.md) | Required | Array of line items in transaction | getLineItems(): array | setLineItems(array lineItems): void |

## Example (as JSON)

```json
{
  "line_items": {
    "description": "cool drink",
    "commodity_code": "cc123456",
    "product_code": "fanta123456",
    "unit_code": "gll",
    "unit_cost": 3
  }
}
```

