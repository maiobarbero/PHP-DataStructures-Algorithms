<?php

namespace Algorithms\Contracts;

interface SortInterface
{
  public function sort(array &$dataset): array;
}