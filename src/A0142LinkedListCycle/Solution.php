<?php declare(strict_types=1);

namespace App\A0142LinkedListCycle;
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
     * @return Boolean|ListNode
     */
    private function getIntersection($head) {
        $slowPointer = $head;
        $fastPointer = $head;
        while ($slowPointer && $fastPointer) {
            if ($slowPointer->next === null || $fastPointer->next === null || $fastPointer->next->next === null) {
                return false;
            }
            $slowPointer = $slowPointer->next;
            $fastPointer = $fastPointer->next->next;
            if ($slowPointer === $fastPointer) {
                return $fastPointer;
            }
        }
    }

    public function detectCycle($head) {
        if (empty($head)) {
            return null;
        }

        $intersection = $this->getIntersection($head);

        if (!$intersection) {
            return null;
        }

        $pointer1 = $head;
        $pointer2 = $intersection;

        while ($pointer1 !== $pointer2) {
            $pointer1 = $pointer1->next;
            $pointer2 = $pointer2->next;
        }

        return $pointer1;
    }
}