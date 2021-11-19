<?php

namespace OwenVoke\UnstoppableDomains\Api;

use OwenVoke\UnstoppableDomains\Api\Reseller\Domain;

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
}
