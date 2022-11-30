
# Hosted Payment Page

Hosted Payment Page Information on `expand`

## Structure

`HostedPaymentPage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `userId` | `?string` | Optional | User ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getUserId(): ?string | setUserId(?string userId): void |
| `locationId` | `?string` | Optional | Location ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getLocationId(): ?string | setLocationId(?string locationId): void |
| `locationApiId` | `?string` | Optional | Location Api Id | getLocationApiId(): ?string | setLocationApiId(?string locationApiId): void |
| `productTransactionId` | `string` | Required | Product Transaction ID<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getProductTransactionId(): string | setProductTransactionId(string productTransactionId): void |
| `title` | `string` | Required | Title<br>**Constraints**: *Maximum Length*: `64` | getTitle(): string | setTitle(string title): void |
| `redirectUrlDelay` | `?float` | Optional | Redirect Url Delay<br>**Default**: `15`<br>**Constraints**: `<= 15` | getRedirectUrlDelay(): ?float | setRedirectUrlDelay(?float redirectUrlDelay): void |
| `minPaymentAmount` | `?float` | Optional | Min Payment Amount<br>**Constraints**: `>= 0` | getMinPaymentAmount(): ?float | setMinPaymentAmount(?float minPaymentAmount): void |
| `maxPaymentAmount` | `?float` | Optional | Max Payment Amount<br>**Default**: `99999999.99`<br>**Constraints**: `<= 99999999.99` | getMaxPaymentAmount(): ?float | setMaxPaymentAmount(?float maxPaymentAmount): void |
| `redirectUrlOnApprove` | `?string` | Optional | Redirect Url On Approval | getRedirectUrlOnApprove(): ?string | setRedirectUrlOnApprove(?string redirectUrlOnApprove): void |
| `redirectUrlOnDecline` | `?string` | Optional | Redirect Url On Decline | getRedirectUrlOnDecline(): ?string | setRedirectUrlOnDecline(?string redirectUrlOnDecline): void |
| `fieldConfiguration` | [`FieldConfiguration`](../../doc/models/field-configuration.md) | Required | field_configuration | getFieldConfiguration(): FieldConfiguration | setFieldConfiguration(FieldConfiguration fieldConfiguration): void |
| `encryptionKey` | `?string` | Optional | Encryption Key<br>**Constraints**: *Minimum Length*: `32`, *Maximum Length*: `32` | getEncryptionKey(): ?string | setEncryptionKey(?string encryptionKey): void |
| `stylesheetUrl` | `?string` | Optional | Stylesheet Url | getStylesheetUrl(): ?string | setStylesheetUrl(?string stylesheetUrl): void |
| `parentSendMessage` | `?bool` | Optional | Parent Send Message | getParentSendMessage(): ?bool | setParentSendMessage(?bool parentSendMessage): void |
| `hideOptionalFields` | `?bool` | Optional | Hide Optional Fields | getHideOptionalFields(): ?bool | setHideOptionalFields(?bool hideOptionalFields): void |
| `id` | `string` | Required | Hosted Payment Page Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `createdTs` | `int` | Required | Created Time Stamp | getCreatedTs(): int | setCreatedTs(int createdTs): void |
| `modifiedTs` | `int` | Required | Modified Time Stamp | getModifiedTs(): int | setModifiedTs(int modifiedTs): void |
| `createdUserId` | `?string` | Optional | System generated id for user who created record<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getCreatedUserId(): ?string | setCreatedUserId(?string createdUserId): void |
| `modifiedUserId` | `?string` | Optional | System generated id for user who created record<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getModifiedUserId(): ?string | setModifiedUserId(?string modifiedUserId): void |

## Example (as JSON)

```json
{
  "product_transaction_id": "11e95f8ec39de8fbdb0a4f1a",
  "title": "Sample title",
  "field_configuration": {
    "css_mini": true,
    "stack": "vertical",
    "body": {
      "settings": {
        "enabled": true,
        "columns": 1,
        "rows": 1
      },
      "fields": {
        "id": "transaction_amount",
        "label": "Header",
        "field_type": "heading",
        "position": [
          "1",
          "0",
          "1",
          "1"
        ]
      }
    },
    "footer": {
      "settings": {
        "enabled": true,
        "columns": 1,
        "rows": 1
      },
      "fields": {
        "id": "transaction_amount",
        "label": "Header",
        "field_type": "heading",
        "position": [
          "1",
          "0",
          "1",
          "1"
        ]
      }
    }
  },
  "id": "11e95f8ec39de8fbdb0a4f1a",
  "created_ts": 1422040992,
  "modified_ts": 1422040992
}
```

