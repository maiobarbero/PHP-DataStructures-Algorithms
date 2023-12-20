<?php

namespace Algorithms\Sort;

use Algorithms\Contracts\SortInterface;


class QuickSort implements SortInterface
{

  public function sort(array &$dataset): array
  {
    if (count($dataset) <= 1) {
      return $dataset;
    }

    $pivot = $dataset[0];
    $leftArray = [];
    $rightArray = [];

    for ($i = 1; $i < count($dataset); $i++) {
      if ($dataset[$i] < $pivot) {
        $leftArray[] = $dataset[$i];
      } else {
        $rightArray[] = $dataset[$i];
      }
    }
    $dataset = array_merge($this->sort($leftArray), [$pivot], $this->sort($rightArray));
    return $dataset;
  }
}
