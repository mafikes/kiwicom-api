About
------------
Library in php for communication with [kiwi.com API](https://docs.kiwi.com).

Install
------------
```
composer require mafikes/kiwiapi
```

Example
------------
#### Init Client
```php
$client = new \Mafikes\KiwiApi\Client();
```

#### Locations query
```php
$client->getLocations()->searchByQuery([
    'term' => 'PRG',
    'locale' => 'en-US',
    'location_types' => 'airport',
    'limit' => '10',
    'active_only' => 'true',
    'sort' => 'name'
]);
```

#### Get all airlines
```php
$client->getAirlines()->getAll();
```

#### Get link logo of airline company
```php
$client->getAirlines()->getImage('JQ'); // id airline
```

#### Get basic query for flights
```php
$client->getFlights()->searchByQuery([
    'fly_from' => 'PRG',
    'fly_to' => 'LGW',
    'date_from' => '08/08/2019',
    'date_to' => '08/09/2019',
    'partners' => 'picky',
]);
```

More examples you can find in example folder.

Todo
------------
- search deeplink
- check flights
- save booking
- confirm payment
- webhooks


