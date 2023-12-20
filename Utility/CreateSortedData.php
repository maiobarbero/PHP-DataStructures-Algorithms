<?php

namespace Utility;

class CreateSortedData
{
  /**
   * Summary of createSortedArray
   * @param int $count number of elements in array
   * @return array
   */
  public static function createSortedArray(int $count): array
  {
    $data = [];

    for ($i = 0; $i < $count; $i++) {
      $data[] = rand(1, $count);
    }
    sort($data);
    return $data;
  }
}