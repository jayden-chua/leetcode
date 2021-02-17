<?php declare(strict_types=1);

namespace App\A0141LinkedListCycle;
use Lib\Helper\ListNode;

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        $slowPointer = $head;
        $fastPointer = $head;
        while ($slowPointer && $fastPointer) {
            if ($slowPointer->next === null || $fastPointer->next === null || $fastPointer->next->next === null) {
                return false;
            }
            $slowPointer = $slowPointer->next;
            $fastPointer = $fastPointer->next->next;
            if ($slowPointer === $fastPointer) {
                return true;
            }
        }
    }
}