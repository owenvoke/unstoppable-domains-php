<?php

namespace OwenVoke\UnstoppableDomains\Api;

use OwenVoke\UnstoppableDomains\Api\Reseller\Domain;
use OwenVoke\UnstoppableDomains\Api\Reseller\User;

class Reseller extends AbstractApi
{
    public function domain(): Domain
    {
        return new Domain($this->getClient());
    }

    public function domains(): Domain
    {
        return $this->domain();
    }

    public function user(): User
    {
        return new User($this->getClient());
    }

    public function users(): User
    {
        return $this->user();
    }
}
