<?php

namespace Algorithms\Contracts;

interface SearchInterface
{
  public function search(int $value, array $dataset): int;
}
