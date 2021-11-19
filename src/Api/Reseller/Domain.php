<?php

namespace OwenVoke\UnstoppableDomains\Api\Reseller;

use OwenVoke\UnstoppableDomains\Api\AbstractApi;

class Domain extends AbstractApi
{
    public function all(string $resellerId, string $owner, string $extension, array $parameters = []): array
    {
        return $this->get("resellers/{$resellerId}/domains", array_merge($parameters, [
            'owner' => $owner,
            'extension' => $extension,
        ]));
    }

    public function show(string $resellerId, string $domain): array
    {
        return $this->get("resellers/{$resellerId}/domains/{$domain}");
    }

    public function variations(string $resellerId, array $domains): array
    {
        return $this->get("resellers/{$resellerId}/domains/variations", [
            'domains' => $domains,
        ]);
    }
}
