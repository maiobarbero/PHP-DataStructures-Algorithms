<?php

namespace Algorithms\Search;

use Algorithms\Search\BTS\Node;

class BinarySearchTree
{

  public function __construct(private $root = null)
  {
  }

  //Insert
  public function insert($data)
  {
    $this->root = $this->_insert($this->root, $data);
  }
  private function _insert($root, $data)
  {
    if ($root == null) {
      return new Node($data);
    }
    if ($data < $root->data) {
      $root->left = $this->_insert($root->left, $data);
    } elseif ($data > $root->data) {
      $root->right = $this->_insert($root->right, $data);
    }

    return $root;
  }

  //Search
  public function search(int $data)
  {
    return $this->_search($this->root, $data);
  }
  private function _search($root, $data)
  {
    if ($root == null || $root->data == $data) {
      return $root;
    }

    if ($data < $root->data) {
      return $this->_search($root->left, $data);
    }

    return $this->_search($root->right, $data);
  }
}
