<?php

namespace OwenVoke\UnstoppableDomains\Api;

class Domain extends AbstractApi
{
    public function show(string $domain): array
    {
        return $this->get($domain);
    }
}
