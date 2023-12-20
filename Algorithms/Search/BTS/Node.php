<?php

namespace Algorithms\Search\BTS;

class Node
{

  public function __construct(
    public $data, 
    public $left = null, 
    public $right = null)
  {
  }
}
