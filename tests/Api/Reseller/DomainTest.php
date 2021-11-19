<?php

use OwenVoke\UnstoppableDomains\Api\Reseller\Domain;

beforeEach(fn () => $this->apiClass = Domain::class);

it('can get a domain as a reseller', function () {
    $expectedArray = [
        'domain' => [
            'name' => 'domain.crypto',
            'owner' => '0x033dc48B5dB4CA62861643e9D2C411D9eb6D1975',
            // ...
        ],
    ];

    $api = $this->getApiMock();

    $api->expects($this->once())
        ->method('get')
        ->with('resellers/1234abc/domains/domain.crypto')
        ->willReturn($expectedArray);

    expect($api->show('1234abc', 'domain.crypto'))->toBe($expectedArray);
});

it('can retrieve an owners domains as a reseller', function () {
    $expectedArray = [
        'domains' => [
            [
                'name' => 'domain.crypto',
                'owner' => '0x033dc48B5dB4CA62861643e9D2C411D9eb6D1975',
                'registered' => true,
                // ...
            ],
        ]
    ];

    $api = $this->getApiMock();

    $api->expects($this->once())
        ->method('get')
        ->with('resellers/1234abc/domains', ['owner' => '0x033dc48B5dB4CA62861643e9D2C411D9eb6D1975', 'extension' => 'crypto'])
        ->willReturn($expectedArray);

    expect($api->all('1234abc', '0x033dc48B5dB4CA62861643e9D2C411D9eb6D1975', 'crypto'))->toBe($expectedArray);
});


it('can retrieve domain variations as a reseller', function () {
    $expectedArray = [
        'domain.crypto' => [
            'label' => 'thedomain',
            'extension' => 'crypto',
            'price' => 20000,
        ],
    ];

    $api = $this->getApiMock();

    $api->expects($this->once())
        ->method('get')
        ->with('resellers/1234abc/domains/variations', ['domains' => ['domain.crypto']])
        ->willReturn($expectedArray);

    expect($api->variations('1234abc', ['domain.crypto']))->toBe($expectedArray);
});
