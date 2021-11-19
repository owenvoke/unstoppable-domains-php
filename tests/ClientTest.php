<?php

declare(strict_types=1);

use OwenVoke\UnstoppableDomains\Api\Reseller;
use OwenVoke\UnstoppableDomains\Client;

it('gets instances from the client', function () {
    $client = new Client();

    // Get an instance of the Reseller class
    expect($client->reseller('abc123'))->toBeInstanceOf(Reseller::class);
    expect($client->resellers('abc123'))->toBeInstanceOf(Reseller::class);
});
