
# V1 Elements Transaction Intention Request

## Structure

`V1ElementsTransactionIntentionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `action` | [`?string (ActionEnum)`](../../doc/models/action-enum.md) | Optional | The action to be performed<br>**Default**: `ActionEnum::SALE` | getAction(): ?string | setAction(?string action): void |
| `methods` | [`?(Method[])`](../../doc/models/method.md) | Optional | Byt default the system will try to offer all the availables payment methods from your account. But if you like, you can specify exactly what services you want to use.<br>**Constraints**: *Minimum Items*: `1`, *Unique Items Required* | getMethods(): ?array | setMethods(?array methods): void |
| `amount` | `?int` | Optional | The total amount to be charged. Allowed on the actions: `sale`, `auth-only`, `refund`<br>**Constraints**: `>= 1`, `<= 999999999` | getAmount(): ?int | setAmount(?int amount): void |
| `taxAmount` | `?int` | Optional | Amount of Sales Tax. If supplied, this amount should be already included in the transaction amount. Allowed on the actions: `sale`, `auth-only`, `refund`<br>**Constraints**: `>= 1`, `<= 999999999` | getTaxAmount(): ?int | setTaxAmount(?int taxAmount): void |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `contactId` | `?string` | Optional | Contact ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getContactId(): ?string | setContactId(?string contactId): void |
| `saveAccount` | `?bool` | Optional | Specifies to tokenize card/bank information within the transaction. Allowed on the actions: `sale`, `auth-only`, `avs-only`, `refund` | getSaveAccount(): ?bool | setSaveAccount(?bool saveAccount): void |
| `achSecCode` | [`?string (AchSecCodeEnum)`](../../doc/models/ach-sec-code-enum.md) | Optional | SEC code for the transaction if it's an ACH transaction<br>**Default**: `AchSecCodeEnum::WEB` | getAchSecCode(): ?string | setAchSecCode(?string achSecCode): void |

## Example (as JSON)

```json
{
  "action": null,
  "methods": null,
  "amount": null,
  "tax_amount": null,
  "location_id": null,
  "contact_id": null,
  "save_account": null,
  "ach_sec_code": null
}
```

