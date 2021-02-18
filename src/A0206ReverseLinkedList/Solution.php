<?php declare(strict_types=1);

namespace App\A0206ReverseLinkedList;
use Lib\Helper\ListNode;

class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseListRecursive($head) {
        if ($head === null) {
            return $head;
        }

        if ($head->next === null) {
            return $head;
        }

        $lastNode = $this->reverseListRecursive($head->next);
        $head->next->next = $head;
        $head->next = null;
        return $lastNode;
    }

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseListIterative($head) {
        $prevNode = null;

        if ($head->next === null || $head === null) {
            return $head;
        }

        while ($head !== null) {
            $nextNode = $head->next;
            $head->next = $prevNode;
            $prevNode = $head;
            $head = $nextNode;
        }
        return $prevNode;
    }
}