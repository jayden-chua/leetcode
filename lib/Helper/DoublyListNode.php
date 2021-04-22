<?php declare(strict_types=1);

namespace Lib\Helper;

class DoublyListNode
{
    public $val = 0;

    /**
     * @var DoublyListNode
     */
    public $next = null;

    /**
     * @var DoublyListNode
     */
    public $prev = null;

    function __construct($val) {
        $this->val = $val;
    }
}