<?php

use OwenVoke\UnstoppableDomains\Api\Domain;

beforeEach(fn () => $this->apiClass = Domain::class);

it('can get a domain', function () {
    $expectedArray = [
        'domain' => [
            'name' => 'domain.crypto',
            'owner' => '0x033dc48B5dB4CA62861643e9D2C411D9eb6D1975',
            'addresses' => [/** ... */],
            // ...
        ],
    ];

    $api = $this->getApiMock();

    $api->expects($this->once())
        ->method('get')
        ->with('domain.crypto')
        ->willReturn($expectedArray);

    expect($api->show('domain.crypto'))->toBe($expectedArray);
});
