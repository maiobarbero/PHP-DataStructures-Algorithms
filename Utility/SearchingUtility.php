<?php

namespace Utility;

use Algorithms\Contracts\SearchInterface;

class SearchingUtility
{
  public static function searchAndMeasureTime(SearchInterface $searchAlgorithm, int $value, array $data): void
  {
    $start_time = microtime(true);
    $searched_data = $searchAlgorithm->search($value, $data);
    $end_time = microtime(true);

    if ($searched_data === -1) {
      printf("%s not found\n", $value);
    } else {
      printf("%s found in position %s in %s elements with %s in %fs\n", $value, $searched_data, count($data), get_class($searchAlgorithm), $end_time - $start_time);
    }
  }
}
