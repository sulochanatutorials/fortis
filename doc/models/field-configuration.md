
# Field Configuration

field_configuration

## Structure

`FieldConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cssMini` | `bool` | Required | CSS Mini | getCssMini(): bool | setCssMini(bool cssMini): void |
| `stack` | [`string (StackEnum)`](../../doc/models/stack-enum.md) | Required | Stack | getStack(): string | setStack(string stack): void |
| `header` | [`?Header`](../../doc/models/header.md) | Optional | Header | getHeader(): ?Header | setHeader(?Header header): void |
| `body` | [`Body`](../../doc/models/body.md) | Required | Body | getBody(): Body | setBody(Body body): void |
| `footer` | [`Footer`](../../doc/models/footer.md) | Required | Footer | getFooter(): Footer | setFooter(Footer footer): void |

## Example (as JSON)

```json
{
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
}
```

