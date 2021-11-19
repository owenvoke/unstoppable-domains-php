<?php

use OwenVoke\UnstoppableDomains\Api\Reseller;
use OwenVoke\UnstoppableDomains\Api\Reseller\Domain;

beforeEach(fn () => $this->apiClass = Reseller::class);

it('can retrieve a Domain class from the Reseller method', function () {
    $api = $this->getApiMock();

    expect($api->domain())->toBeInstanceOf(Domain::class);
    expect($api->domains())->toBeInstanceOf(Domain::class);
});
