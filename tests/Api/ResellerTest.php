<?php

use OwenVoke\UnstoppableDomains\Api\Reseller;
use OwenVoke\UnstoppableDomains\Api\Reseller\Domain;
use OwenVoke\UnstoppableDomains\Api\Reseller\Order;
use OwenVoke\UnstoppableDomains\Api\Reseller\User;

beforeEach(fn () => $this->apiClass = Reseller::class);

it('can retrieve a Domain class from the Reseller class', function () {
    $api = $this->getApiMock();

    expect($api->domain())->toBeInstanceOf(Domain::class);
    expect($api->domains())->toBeInstanceOf(Domain::class);
});

it('can retrieve an Order class from the Reseller class', function () {
    $api = $this->getApiMock();

    expect($api->order())->toBeInstanceOf(Order::class);
    expect($api->orders())->toBeInstanceOf(Order::class);
});

it('can retrieve a User class from the Reseller class', function () {
    $api = $this->getApiMock();

    expect($api->user())->toBeInstanceOf(User::class);
    expect($api->users())->toBeInstanceOf(User::class);
});
