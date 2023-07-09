# PWHexParser

This is a PHP library for decoding PW's item's hexadecimal strings based on their predefined structure.

## Features

- Decode the structure for Weapon, Armor, Fashion, Jewelry, Flight and much more
- Retrieve the decoded data as json
- Error handling and validation for input data

## Example

Here's an example usage of the PWHexParser library:

```php
<?php

require __DIR__ . '/../vendor/autoload.php';

$decoder = new App\Decoder();
$decoder->setItemType('Fashion');
$decoder->sethexString('1e00000092470100010a620072007500630065000000'); //Mandarin Silk Gown
$decoder->validateHex();
$result = $decoder->decodeHexString();

header('Content-Type: application/json');
echo json_encode($result, JSON_PRETTY_PRINT);
```

### Wich will output:

```php
{
  "level_req": 30,
  "color": 18322,
  "gender": 1,
  "creator_type": 1,
  "name_length": 5,
  "name": "bruce",
  "color_mask": 0
}
```