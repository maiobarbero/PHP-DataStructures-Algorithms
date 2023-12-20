<?php

namespace Algorithms\Search;

use Algorithms\Contracts\SearchInterface;

class BinarySearch implements SearchInterface
{

  public function search(int $value, array $dataset): int
  {

    if (count($dataset) === 0) {
      return false;
    }

    $lowIndex = 0;
    $highIndex = count($dataset) - 1;

    while ($lowIndex <= $highIndex) {
      $midIndex = intval(($lowIndex + $highIndex) / 2);

      if ($dataset[$midIndex] === $value) {
        return $midIndex;
      }

      if ($value < $dataset[$midIndex]) {
        $highIndex = $midIndex - 1;
      } else {
        $lowIndex = $midIndex + 1;
      }
    }
    return -1;
  }
}
