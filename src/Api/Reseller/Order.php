<?php

namespace OwenVoke\UnstoppableDomains\Api\Reseller;

use OwenVoke\UnstoppableDomains\Api\AbstractApi;

class Order extends AbstractApi
{
    public function show(string $resellerId, string $email, string $orderId): array
    {
        return $this->get("resellers/{$resellerId}/users/{$email}/orders/{$orderId}");
    }
}
