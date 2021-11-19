# Domain API

[Back to the navigation](README.md)

Allows interacting with the Reseller Domain API.

### Get details about a domain name

```php
$response = $client->reseller()->domain()->get($resellerId, 'domain.crypto');
```

### Get a list of domains with a specific extension for an owner

```php
$response = $client->reseller()->domains()->all($resellerId, $address, $extension);
```

### Get a list of variations for domain names

```php
$response = $client->reseller()->domains()->variations($resellerId, [
    'domain.crypto'
]);
```
