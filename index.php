<?php
include './vendor/autoload.php';


use Algorithms\Search\BinarySearch;
use Utility\CreateData;
use Utility\SortingUtility;
use Algorithms\Sort\MergeSort;
use Algorithms\Sort\QuickSort;
use Algorithms\Sort\BubbleSort;
use Utility\CreateSortedData;
use Utility\SearchingUtility;

/*
$small = 10;
$medium = 100;
$big = 1000;

// ===Bubble Sort=== //
// ===O(N^2)=== // 
echo PHP_EOL."===========Bubble Sort===========".PHP_EOL;
SortingUtility::sortAndMeasureTime(new BubbleSort, CreateData::createArray($small));
SortingUtility::sortAndMeasureTime(new BubbleSort, CreateData::createArray($medium));
SortingUtility::sortAndMeasureTime(new BubbleSort, CreateData::createArray($big));


// ===Merge Sort=== //
// ===O(NlgN)=== // 
echo PHP_EOL."===========Merge Sort===========".PHP_EOL;
SortingUtility::sortAndMeasureTime(new MergeSort, CreateData::createArray($small));
SortingUtility::sortAndMeasureTime(new MergeSort, CreateData::createArray($medium));
SortingUtility::sortAndMeasureTime(new MergeSort, CreateData::createArray($big));

// ===Quick Sort=== //
// ===O(N^2) - O(NlgN)=== // 
echo PHP_EOL."===========Quick Sort===========".PHP_EOL;
SortingUtility::sortAndMeasureTime(new QuickSort, CreateData::createArray($small));
SortingUtility::sortAndMeasureTime(new QuickSort, CreateData::createArray($medium));
SortingUtility::sortAndMeasureTime(new QuickSort, CreateData::createArray($big));
*/



// ===Serach Array=== //
$searchArray = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
// ===Binary Search=== //
echo PHP_EOL."===========Binary Search===========".PHP_EOL;
SearchingUtility::searchAndMeasureTime(new BinarySearch,0, $searchArray);