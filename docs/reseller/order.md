# Order API

[Back to the navigation](README.md)

Allows interacting with the Reseller Order API.

### Get details about an order

```php
$response = $client->reseller()->order()->show($resellerId, $email, $orderId);
```
