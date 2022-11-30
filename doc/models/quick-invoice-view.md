
# Quick Invoice View

## Structure

`QuickInvoiceView`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Quick Invoice Views Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): ?string | setId(?string id): void |
| `quickInvoiceId` | `string` | Required | Quick Invoice ID<br>**Constraints**: *Maximum Length*: `24` | getQuickInvoiceId(): string | setQuickInvoiceId(string quickInvoiceId): void |
| `remoteIp` | `?string` | Optional | Remote Ip<br>**Constraints**: *Maximum Length*: `45` | getRemoteIp(): ?string | setRemoteIp(?string remoteIp): void |
| `createdTs` | `?int` | Optional | Created Time Stamp | getCreatedTs(): ?int | setCreatedTs(?int createdTs): void |

## Example (as JSON)

```json
{
  "quick_invoice_id": "Quick Invoice ID"
}
```

