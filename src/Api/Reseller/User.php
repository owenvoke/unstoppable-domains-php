<?php

namespace OwenVoke\UnstoppableDomains\Api\Reseller;

use OwenVoke\UnstoppableDomains\Api\AbstractApi;

class User extends AbstractApi
{
    public function show(string $resellerId, string $email): array
    {
        return $this->get("resellers/{$resellerId}/users/{$email}");
    }
}
