# Algorithms and Data Structures

This repository contains PHP implementations of various sorting algorithms and a binary search algorithm. It is meant to serve as a learning resource and reference for understanding the efficiency and implementation details of these algorithms.

## Table of Contents

- [Sorting Algorithms](#sorting-algorithms)
  - [Bubble Sort](#bubble-sort)
  - [Merge Sort](#merge-sort)
  - [Quick Sort](#quick-sort)
- [Searching Algorithm](#searching-algorithm)
  - [Binary Search](#binary-search)
  - [Binary Search Tree](#binary-search-tree)

## Sorting Algorithms

### Bubble Sort

Bubble Sort is a simple sorting algorithm that repeatedly steps through the list, compares adjacent elements, and swaps them if they are in the wrong order.

#### Time Complexity:
- Best Case: O(N)
- Average Case: O(N^2)
- Worst Case: O(N^2)

### Merge Sort

Merge Sort is a divide-and-conquer algorithm that divides the unsorted list into N sub-lists, each containing one element, and then repeatedly merges sub-lists to produce new sorted sub-lists until there is only one sub-list remaining.

#### Time Complexity:
- Best Case: O(N log N)
- Average Case: O(N log N)
- Worst Case: O(N log N)

### Quick Sort

Quick Sort is another divide-and-conquer algorithm that works by selecting a 'pivot' element from the array and partitioning the other elements into two sub-arrays, according to whether they are less than or greater than the pivot.

#### Time Complexity:
- Best Case: O(N log N)
- Average Case: O(N log N)
- Worst Case: O(N^2)

## Searching Algorithm

### Binary Search

Binary Search is an efficient algorithm for finding an item from a sorted list of items. It works by repeatedly dividing in half the portion of the list that could contain the item until you've narrowed down the possible locations to just one.

#### Time Complexity:
- Best Case: O(1)
- Average Case: O(log N)
- Worst Case: O(log N)

### Binary Search Tree

A Binary Search Tree (BST) is a hierarchical data structure composed of nodes where each node contains a value, and the values in the left subtree are less than the value of the node, while the values in the right subtree are greater.

#### Insertion Operation

The insertion operation in a BST involves adding a new node with a specific value while maintaining the binary search tree property.

#### Search Operation

The search operation in a BST is efficient, leveraging the tree structure. It starts at the root and traverses the tree, comparing the search value with the values in each node. The search narrows down the possible locations until the target value is found or determined to be absent.

#### Time Complexity:

- Average Case (balanced tree): O(log N)
- Worst Case (unbalanced tree): O(N)

## Usage

The code includes utility functions for generating arrays of various sizes and measuring the execution time of each algorithm. Uncomment the relevant sections in the `index.php` file to test the algorithms with different input sizes.

Feel free to explore and modify the code for educational purposes or use it as a reference for implementing these algorithms in other projects.

## Contributing

If you find any issues or have suggestions for improvements, feel free to open an issue or submit a pull request. Contributions are welcome!
