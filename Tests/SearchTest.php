<?php

declare(strict_types=1);

use Algorithms\Search\BinarySearch;
use Algorithms\Sort\BubbleSort;
use Algorithms\Sort\MergeSort;
use Algorithms\Sort\QuickSort;
use PHPUnit\Framework\TestCase;

final class SearchTest extends TestCase
{

  private array $array;
  private int $valueToSearch;
  private int $correctIndex;

  public function setUp(): void
  {
    $this->array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
    $this->valueToSearch = rand(0,20);
    $this->correctIndex = array_search($this->valueToSearch, $this->array);
  }
  public function testBinarySearch(): void
  {
    $algorithm = new BinarySearch;
    $index = $algorithm->search( $this->valueToSearch,$this->array);

    $this->assertSame($index, $this->correctIndex);
  }
}
