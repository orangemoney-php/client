<?php

use OrangeMoney\Client;
use OrangeMoney\OrangeMoney;

it('may create a client', function () {
  $orangeMoney = OrangeMoney::client('foo');

  expect($orangeMoney)->toBeInstanceOf(Client::class);
});
