<?php declare(strict_types=1);

namespace App\A0707DesignLinkedList;

class MyListNode
{
    /**
     * @var MyListNode
     */
    public $next;

    /**
     * @var MyListNode
     */
    public $prev;

    /**
     * @var int
     */
    public $val;

    public function __construct(MyListNode $next = null, MyListNode $prev = null, $val = null)
    {
        $this->next = $next;
        $this->prev = $prev;
        $this->val = $val;
    }
}