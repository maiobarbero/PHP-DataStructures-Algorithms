<?php

declare(strict_types=1);

use Algorithms\Search\BinarySearchTree;
use PHPUnit\Framework\TestCase;

final class BTSTEST extends TestCase
{
    public function testInsertAndSearch(): void
    {
        $bst = new BinarySearchTree();

        // Insert values into the BST
        $valuesToInsert = [10, 5, 15, 3, 7, 12, 17];
        foreach ($valuesToInsert as $value) {
            $bst->insert($value);
        }

        // Test search for each inserted value
        foreach ($valuesToInsert as $value) {
            $result = $bst->search($value);
            $this->assertNotNull($result);
            $this->assertSame($value, $result->data);
        }

        // Test search for a value not in the BST
        $nonExistentValue = 999;
        $result = $bst->search($nonExistentValue);
        $this->assertNull($result);
    }
}
