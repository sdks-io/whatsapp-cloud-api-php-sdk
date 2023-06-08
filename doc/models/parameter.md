
# Parameter

## Structure

`Parameter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`string (ParameterTypeEnum)`](../../doc/models/parameter-type-enum.md) | Required | Describes the parameter type. For text-based templates, the only supported parameter types are text, currency, date_time. | getType(): string | setType(string type): void |
| `text` | `?string` | Optional | Required when type=text. The message’s text. For the header component, the character limit is 60 characters. For the body component, the character limit is 1024 characters. | getText(): ?string | setText(?string text): void |
| `currency` | [`?Currency`](../../doc/models/currency.md) | Optional | Required when type=currency. | getCurrency(): ?Currency | setCurrency(?Currency currency): void |
| `dateTime` | [`?DateTimeObject`](../../doc/models/date-time-object.md) | Optional | Required when type=date_time. | getDateTime(): ?DateTimeObject | setDateTime(?DateTimeObject dateTime): void |
| `image` | [`?Image`](../../doc/models/image.md) | Optional | Required when type=image. | getImage(): ?Image | setImage(?Image image): void |
| `document` | [`?Document`](../../doc/models/document.md) | Optional | Required when type=document. Only PDF documents are supported for media-based message templates. | getDocument(): ?Document | setDocument(?Document document): void |
| `video` | [`?Video`](../../doc/models/video.md) | Optional | Required when type=video. | getVideo(): ?Video | setVideo(?Video video): void |

## Example (as JSON)

```json
{
  "type": "text",
  "text": "text-string",
  "currency": {
    "fallback_value": "fallback_value8",
    "code": "code8",
    "amount_1000": 144
  },
  "date_time": {
    "fallback_value": "fallback_value6",
    "day_of_week": 108,
    "year": 76,
    "month": 148,
    "day_of_month": 20,
    "hour": 190
  },
  "image": {
    "id": "id6",
    "link": "link6",
    "caption": "caption0"
  },
  "document": {
    "id": "id6",
    "link": "link6",
    "caption": "caption0",
    "filename": "filename8"
  }
}
```

