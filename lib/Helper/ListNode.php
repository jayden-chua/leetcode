<?php declare(strict_types=1);

namespace Lib\Helper;

class ListNode
{
    public $val = 0;

    /**
     * @var ListNode
     */
    public $next = null;

    function __construct($val) {
        $this->val = $val;
    }
}