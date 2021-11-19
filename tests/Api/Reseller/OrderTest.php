<?php

use OwenVoke\UnstoppableDomains\Api\Reseller\Order;

beforeEach(fn () => $this->apiClass = Order::class);

it('can get an order as a reseller', function () {
    $expectedArray = [
        'orderNumber' => '-Lm9wiYytgrpf4YCWYv6',
        'payment' => [
            'type' => 'stripe',
            'tokenId' => 'tok_1FAeVFG8PQyZCUJhJp7emswP',
        ],
        'subtotal' => 10,
        'items' => [
            // ...
        ],
    ];

    $api = $this->getApiMock();

    $api->expects($this->once())
        ->method('get')
        ->with('resellers/1234abc/users/user@example.com/orders/-Lm9wiYytgrpf4YCWYv6')
        ->willReturn($expectedArray);

    expect($api->show('1234abc', 'user@example.com', '-Lm9wiYytgrpf4YCWYv6'))->toBe($expectedArray);
});
