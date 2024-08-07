<?php

declare(strict_types=1);

namespace OrangeMoney;

final class OrangeMoney
{
  public static function client(string $accessToken): Client
  {
    return new Client();
  }
}
