<?php declare(strict_types=1);

namespace App\A0203RemoveLinkedListElements;
use Lib\Helper\ListNode;

class Solution {

    /**
     * @param ListNode $head
     * @param Integer $val
     * @return ListNode
     */
    function removeElements(ListNode $head, $val) {
        $prevNode = null;
        $newHead = $head;
        while ($head !== null) {
            $nextNode = $head->next;
            if ($head->val === $val) {
                if ($head === $newHead) {
                    $newHead = $nextNode;
                }
                unset($head);
                if ($prevNode !== null) {
                    $prevNode->next = $nextNode;
                }
            } else {
                $prevNode = $head;
            }
            $head = $nextNode;
        }
        return $newHead;
    }
}