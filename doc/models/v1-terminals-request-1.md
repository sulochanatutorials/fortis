
# V1 Terminals Request 1

## Structure

`V1TerminalsRequest1`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `defaultProductTransactionId` | `?string` | Optional | Product Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getDefaultProductTransactionId(): ?string | setDefaultProductTransactionId(?string defaultProductTransactionId): void |
| `terminalApplicationId` | `?string` | Optional | Terminal Application ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getTerminalApplicationId(): ?string | setTerminalApplicationId(?string terminalApplicationId): void |
| `terminalCvmId` | `?string` | Optional | Terminal CVM ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getTerminalCvmId(): ?string | setTerminalCvmId(?string terminalCvmId): void |
| `terminalManufacturerCode` | [`?int (TerminalManufacturerCodeEnum)`](../../doc/models/terminal-manufacturer-code-enum.md) | Optional | Terminal Manufacturer Code | getTerminalManufacturerCode(): ?int | setTerminalManufacturerCode(?int terminalManufacturerCode): void |
| `title` | `?string` | Optional | Terminal Name<br>**Constraints**: *Maximum Length*: `64` | getTitle(): ?string | setTitle(?string title): void |
| `macAddress` | `?string` | Optional | Terminal MAC Address<br>**Constraints**: *Pattern*: `^([0-9a-fA-F]{2}[:-]?){5}([0-9a-fA-F]{2})$` | getMacAddress(): ?string | setMacAddress(?string macAddress): void |
| `localIpAddress` | `?string` | Optional | Terminal Local IP Address | getLocalIpAddress(): ?string | setLocalIpAddress(?string localIpAddress): void |
| `port` | `?int` | Optional | Terminal Port<br>**Default**: `10009`<br>**Constraints**: `>= 0`, `<= 65535` | getPort(): ?int | setPort(?int port): void |
| `serialNumber` | `?string` | Optional | Terminal Serial Number<br>**Constraints**: *Maximum Length*: `24`, *Pattern*: `^[a-zA-Z0-9]*$` | getSerialNumber(): ?string | setSerialNumber(?string serialNumber): void |
| `terminalNumber` | `?string` | Optional | Terminal Number<br>**Constraints**: *Minimum Length*: `15`, *Maximum Length*: `15` | getTerminalNumber(): ?string | setTerminalNumber(?string terminalNumber): void |
| `terminalTimeouts` | [`?TerminalTimeouts`](../../doc/models/terminal-timeouts.md) | Optional | The following options outlines some configurable timeout values that can be used to customize the experience at the terminal for the cardholder. | getTerminalTimeouts(): ?TerminalTimeouts | setTerminalTimeouts(?TerminalTimeouts terminalTimeouts): void |
| `tipPercents` | [`?TipPercents`](../../doc/models/tip-percents.md) | Optional | A JSON of tip percents the JSON MUST contain only these three fields: percent_1, percent_2, percent_3 | getTipPercents(): ?TipPercents | setTipPercents(?TipPercents tipPercents): void |
| `locationApiId` | `?string` | Optional | Location Api ID<br>**Constraints**: *Maximum Length*: `64` | getLocationApiId(): ?string | setLocationApiId(?string locationApiId): void |
| `terminalApiId` | `?string` | Optional | Terminal Api ID<br>**Constraints**: *Maximum Length*: `64` | getTerminalApiId(): ?string | setTerminalApiId(?string terminalApiId): void |
| `headerLine1` | `?string` | Optional | Header Line 1<br>**Constraints**: *Maximum Length*: `32` | getHeaderLine1(): ?string | setHeaderLine1(?string headerLine1): void |
| `headerLine2` | `?string` | Optional | Header Line 2<br>**Constraints**: *Maximum Length*: `32` | getHeaderLine2(): ?string | setHeaderLine2(?string headerLine2): void |
| `headerLine3` | `?string` | Optional | Header Line 3<br>**Constraints**: *Maximum Length*: `32` | getHeaderLine3(): ?string | setHeaderLine3(?string headerLine3): void |
| `headerLine4` | `?string` | Optional | Header Line 4<br>**Constraints**: *Maximum Length*: `32` | getHeaderLine4(): ?string | setHeaderLine4(?string headerLine4): void |
| `headerLine5` | `?string` | Optional | Header Line 5<br>**Constraints**: *Maximum Length*: `32` | getHeaderLine5(): ?string | setHeaderLine5(?string headerLine5): void |
| `trailerLine1` | `?string` | Optional | Trailer Line 1<br>**Constraints**: *Maximum Length*: `32` | getTrailerLine1(): ?string | setTrailerLine1(?string trailerLine1): void |
| `trailerLine2` | `?string` | Optional | Trailer Line 2<br>**Constraints**: *Maximum Length*: `32` | getTrailerLine2(): ?string | setTrailerLine2(?string trailerLine2): void |
| `trailerLine3` | `?string` | Optional | Trailer Line 3<br>**Constraints**: *Maximum Length*: `32` | getTrailerLine3(): ?string | setTrailerLine3(?string trailerLine3): void |
| `trailerLine4` | `?string` | Optional | Trailer Line 4<br>**Constraints**: *Maximum Length*: `32` | getTrailerLine4(): ?string | setTrailerLine4(?string trailerLine4): void |
| `trailerLine5` | `?string` | Optional | Trailer Line 5<br>**Constraints**: *Maximum Length*: `32` | getTrailerLine5(): ?string | setTrailerLine5(?string trailerLine5): void |
| `defaultCheckin` | `?string` | Optional | Default Checkin<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getDefaultCheckin(): ?string | setDefaultCheckin(?string defaultCheckin): void |
| `defaultCheckout` | `?string` | Optional | Default Checkout<br>**Constraints**: *Maximum Length*: `10`, *Pattern*: `^[\d]{4}-[\d]{2}-[\d]{2}$` | getDefaultCheckout(): ?string | setDefaultCheckout(?string defaultCheckout): void |
| `defaultRoomRate` | `?float` | Optional | Default Room Rate<br>**Constraints**: `>= 0`, `<= 100` | getDefaultRoomRate(): ?float | setDefaultRoomRate(?float defaultRoomRate): void |
| `defaultRoomNumber` | `?string` | Optional | Default Room Number<br>**Constraints**: *Maximum Length*: `12` | getDefaultRoomNumber(): ?string | setDefaultRoomNumber(?string defaultRoomNumber): void |
| `debit` | `?bool` | Optional | Debit | getDebit(): ?bool | setDebit(?bool debit): void |
| `emv` | `?bool` | Optional | EMV | getEmv(): ?bool | setEmv(?bool emv): void |
| `cashbackEnable` | `?bool` | Optional | Cashback Enable | getCashbackEnable(): ?bool | setCashbackEnable(?bool cashbackEnable): void |
| `printEnable` | `?bool` | Optional | Print Enable | getPrintEnable(): ?bool | setPrintEnable(?bool printEnable): void |
| `sigCaptureEnable` | `?bool` | Optional | Sig Capture Enable | getSigCaptureEnable(): ?bool | setSigCaptureEnable(?bool sigCaptureEnable): void |
| `isProvisioned` | `?bool` | Optional | Is Provisioned | getIsProvisioned(): ?bool | setIsProvisioned(?bool isProvisioned): void |
| `tipEnable` | `?bool` | Optional | Tip Enable | getTipEnable(): ?bool | setTipEnable(?bool tipEnable): void |
| `validatedDecryption` | `?bool` | Optional | Validated Decryption | getValidatedDecryption(): ?bool | setValidatedDecryption(?bool validatedDecryption): void |
| `communicationType` | [`?string (CommunicationTypeEnum)`](../../doc/models/communication-type-enum.md) | Optional | Communication Type | getCommunicationType(): ?string | setCommunicationType(?string communicationType): void |

## Example (as JSON)

```json
{
  "location_id": null,
  "default_product_transaction_id": null,
  "terminal_application_id": null,
  "terminal_cvm_id": null,
  "terminal_manufacturer_code": null,
  "title": null,
  "mac_address": null,
  "local_ip_address": null,
  "port": null,
  "serial_number": null,
  "terminal_number": null,
  "terminal_timeouts": null,
  "tip_percents": null,
  "location_api_id": null,
  "terminal_api_id": null,
  "header_line_1": null,
  "header_line_2": null,
  "header_line_3": null,
  "header_line_4": null,
  "header_line_5": null,
  "trailer_line_1": null,
  "trailer_line_2": null,
  "trailer_line_3": null,
  "trailer_line_4": null,
  "trailer_line_5": null,
  "default_checkin": null,
  "default_checkout": null,
  "default_room_rate": null,
  "default_room_number": null,
  "debit": null,
  "emv": null,
  "cashback_enable": null,
  "print_enable": null,
  "sig_capture_enable": null,
  "is_provisioned": null,
  "tip_enable": null,
  "validated_decryption": null,
  "communication_type": null
}
```

