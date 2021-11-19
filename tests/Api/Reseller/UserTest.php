<?php

use OwenVoke\UnstoppableDomains\Api\Reseller\User;

beforeEach(fn () => $this->apiClass = User::class);

it('can get a domain as a reseller', function () {
    $expectedArray = [
        'user' => [
            'email' => 'user@example.com',
            'registered' => true,
            'ownsDomain' => true,
            'eligibleForFreeDomain' => false,
        ],
    ];

    $api = $this->getApiMock();

    $api->expects($this->once())
        ->method('get')
        ->with('resellers/1234abc/users/user@example.com')
        ->willReturn($expectedArray);

    expect($api->show('1234abc', 'user@example.com'))->toBe($expectedArray);
});
