<?php declare(strict_types=1);

namespace Lib\Helper;

class LinkedListHelper
{
    /**
     * @param array $heads
     * @return ListNode|null
     */
    public static function createLinkedListFromArray(array $heads) {
        if (empty($heads)) {
            return null;
        }
        $index = 0;
        $head = null;
        $node = new ListNode($heads[0]);

        while ($index < count($heads)) {
            $index++;
            if (isset($heads[$index])) {
                $node->next = new ListNode($heads[$index]);
            }
            if ($index-1 === 0) {
                $head = $node;
            }
            $node = $node->next;
        }
        return $head;
    }

    /**
     * @param ListNode $head
     * @return array
     */
    public static function createArrayFromLinkedList(ListNode $head) {
        $returnArr = [];
        while ($head) {
            $returnArr[] = $head->val;
            $head = $head->next;
        }
        return $returnArr;
    }
}