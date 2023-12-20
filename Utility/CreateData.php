<?php

namespace Utility;

class CreateData
{
  /**
   * Summary of createArray
   * @param int $count number of elements in array
   * @return array
   */
  public static function createArray(int $count): array
  {
    $data = [];

    for ($i = 0; $i < $count; $i++) {
      $data[] = rand(1, $count);
    }

    return $data;
  }
}