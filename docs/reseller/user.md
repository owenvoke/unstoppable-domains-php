# User API

[Back to the navigation](README.md)

Allows interacting with the Reseller User API.

### Get details about a user

```php
$response = $client->reseller()->user()->show($resellerId, $email);
```
