<?php

namespace Utility;

use Algorithms\Contracts\SortInterface;

class SortingUtility
{
  public static function sortAndMeasureTime(SortInterface $sortAlgorithm, array $data, bool $printArray = false): void
  {
    $start_time = microtime(true);
    $sorted_data = $sortAlgorithm->sort($data);
    $end_time = microtime(true);

    if ($printArray) {
      print_r($sorted_data);
    }

    printf("%s elements sorted with %s in %fs\n", count($data), get_class($sortAlgorithm), $end_time - $start_time);

  }
}