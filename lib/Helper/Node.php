<?php declare(strict_types=1);

namespace Lib\Helper;

class Node {

     public $val = null;

     public $neighbors = null;

     public function __construct($val = 0, $neighbors = []) {
         $this->val = $val;
         $this->neighbors;
     }
}
