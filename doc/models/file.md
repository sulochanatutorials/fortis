
# File

## Structure

`File`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `file` | `array` | Required | File Object | getFile(): array | setFile(array file): void |
| `resourceId` | `string` | Required | Resource Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getResourceId(): string | setResourceId(string resourceId): void |
| `resource` | [`string (Resource2Enum)`](../../doc/models/resource-2-enum.md) | Required | Resource | getResource(): string | setResource(string resource): void |
| `productFileId` | `?string` | Optional | Product File Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getProductFileId(): ?string | setProductFileId(?string productFileId): void |
| `fileCategoryId` | `?string` | Optional | File Category Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getFileCategoryId(): ?string | setFileCategoryId(?string fileCategoryId): void |
| `visibilityGroupId` | `?string` | Optional | Visibility Group Id<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getVisibilityGroupId(): ?string | setVisibilityGroupId(?string visibilityGroupId): void |
| `fileDescription` | `?string` | Optional | File Description<br>**Constraints**: *Maximum Length*: `128` | getFileDescription(): ?string | setFileDescription(?string fileDescription): void |
| `id` | `string` | Required | Resource<br>**Constraints**: *Pattern*: `^(([0-9a-fA-F]{24})\|(([0-9a-fA-F]{8})-(([0-9a-fA-F]{4}\-){3})([0-9a-fA-F]{12})))$` | getId(): string | setId(string id): void |
| `fileName` | `?string` | Optional | File Name | getFileName(): ?string | setFileName(?string fileName): void |
| `fileExtension` | `?string` | Optional | File Extension<br>**Constraints**: *Maximum Length*: `4` | getFileExtension(): ?string | setFileExtension(?string fileExtension): void |
| `fileSizeBytes` | `?int` | Optional | File Size Bytes | getFileSizeBytes(): ?int | setFileSizeBytes(?int fileSizeBytes): void |
| `createdTs` | `int` | Required | Created Time Stamp | getCreatedTs(): int | setCreatedTs(int createdTs): void |
| `modifiedTs` | `int` | Required | Modified Time Stamp | getModifiedTs(): int | setModifiedTs(int modifiedTs): void |

## Example (as JSON)

```json
{
  "file": {
    "key1": "val1",
    "key2": "val2"
  },
  "resource_id": "resource_id4",
  "resource": "QuickInvoice",
  "product_file_id": null,
  "file_category_id": null,
  "visibility_group_id": null,
  "file_description": null,
  "id": "id0",
  "file_name": null,
  "file_extension": null,
  "file_size_bytes": null,
  "created_ts": 168,
  "modified_ts": 92
}
```

