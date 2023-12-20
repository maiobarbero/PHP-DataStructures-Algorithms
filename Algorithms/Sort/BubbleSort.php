<?php

namespace Algorithms\Sort;

use Algorithms\Contracts\SortInterface;


class BubbleSort implements SortInterface
{

  public function sort(array &$dataset): array
  {
    $n = count($dataset);

    for ($i = 0; $i < $n - 1; $i++) {
      for ($j = 0; $j < $n - $i - 1; $j++) {

        if ($dataset[$j] > $dataset[$j + 1]) {

          $this->swap($dataset[$j], $dataset[$j + 1]);
        }

      }
    }
    return $dataset;
  }

  private function swap(&$first, &$second)
  {
    $tmp = $first;
    $first = $second;
    $second = $tmp;
  }
}