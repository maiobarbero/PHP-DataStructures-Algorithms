<?php

namespace Algorithms\Sort;

use Algorithms\Contracts\SortInterface;

class MergeSort implements SortInterface
{
  public function sort(array &$dataset): array
  {
    $n = count($dataset);
    
    // ===Divide untile is not possibile to divide further=== //
    if ($n > 1) {
      $midValue = intval($n / 2);
      $leftArray = array_slice($dataset, 0, $midValue);
      $rightArray = array_slice($dataset, $midValue);



      // Recursion on left and right array
      $this->sort($leftArray);
      $this->sort($rightArray);

      // Perform the merge
      // Create 3 indexes ($leftArray, $rightArray, $dataset)
      $i = 0;
      $j = 0;
      $k = 0;

      // While both have content
      while ($i < count($leftArray) && $j < count($rightArray)) {
        if ($leftArray[$i] <= $rightArray[$j]) {
          $dataset[$k] = $leftArray[$i];
          $i++;
        } else {
          $dataset[$k] = $rightArray[$j];
          $j++;
        }
        $k++;
      }

      // If left array has value add them
      while ($i < count($leftArray)) {
        $dataset[$k] = $leftArray[$i];
        $i++;
        $k++;
      }

      // If right array has value add them
      while ($j < count($rightArray)) {
        $dataset[$k] = $rightArray[$j];
        $j++;
        $k++;
      }
    }
    return $dataset;
  }
}