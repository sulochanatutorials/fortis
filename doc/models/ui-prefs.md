
# Ui Prefs

Ui Prefs

## Structure

`UiPrefs`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `entryPage` | `?string` | Optional | Ui Prefs Entry Page | getEntryPage(): ?string | setEntryPage(?string entryPage): void |
| `pageSize` | `?int` | Optional | Ui Prefs Page Size<br>**Constraints**: `>= 0`, `<= 99` | getPageSize(): ?int | setPageSize(?int pageSize): void |
| `reportExportType` | [`?string (ReportExportTypeEnum)`](../../doc/models/report-export-type-enum.md) | Optional | Ui Prefs Export Type | getReportExportType(): ?string | setReportExportType(?string reportExportType): void |
| `processMethod` | [`?string (ProcessMethodEnum)`](../../doc/models/process-method-enum.md) | Optional | Ui Prefs Process Method | getProcessMethod(): ?string | setProcessMethod(?string processMethod): void |
| `defaultTerminal` | `?string` | Optional | Ui Prefs Default Termianl<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getDefaultTerminal(): ?string | setDefaultTerminal(?string defaultTerminal): void |

## Example (as JSON)

```json
{
  "entry_page": null,
  "page_size": null,
  "report_export_type": null,
  "process_method": null,
  "default_terminal": null
}
```

