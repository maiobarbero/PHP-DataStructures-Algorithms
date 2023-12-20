<?php

declare(strict_types=1);

use Algorithms\Sort\BubbleSort;
use Algorithms\Sort\MergeSort;
use Algorithms\Sort\QuickSort;
use PHPUnit\Framework\TestCase;

final class SortTest extends TestCase
{

    private array $arrayToSort;
    private array $expectedSortedArray;

    public function setUp(): void
    {
        $this->arrayToSort = [10, 11, 0, 54, 9, 80, 1, 0, 10, 54,100,12,300,11,45,2,5,99];
        $this->expectedSortedArray = $this->arrayToSort;
        sort($this->expectedSortedArray);
    }
    public function testQuickSort(): void
    {
        $algorithm = new QuickSort;
        $arraySorted = $algorithm->sort($this->arrayToSort);

        $this->assertSame($this->expectedSortedArray, $arraySorted);
    }

    public function testBubbleSort(): void
    {
        $algorithm = new BubbleSort;
        $arraySorted = $algorithm->sort($this->arrayToSort);

        $this->assertSame($this->expectedSortedArray, $arraySorted);
    }

    public function testMergeSort(): void
    {
        $algorithm = new MergeSort;
        $arraySorted = $algorithm->sort($this->arrayToSort);

        $this->assertSame($this->expectedSortedArray, $arraySorted);
    }
}
