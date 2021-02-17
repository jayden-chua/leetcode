<?php declare(strict_types=1);

namespace App\A0019RemoveNthNodeFromEndOfList;
use Lib\Helper\ListNode;

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $index = 0;
        $hash = [];
        while ($head !== null) {
            $hash[$index] = $head;
            $head = $head->next;
            $index++;
        }

        $indexToRemove = count($hash)-$n;
        if (isset($hash[$indexToRemove])) {
            $prev = null;
            if (isset($hash[$indexToRemove - 1])) {
                $prev = $hash[$indexToRemove - 1];
                if (isset($hash[$indexToRemove + 1])) {
                    $prev->next = $hash[$indexToRemove + 1];
                } else {
                    $prev->next = null;
                }
                $hash[$indexToRemove - 1] = $prev;
            }
            array_splice($hash, $indexToRemove, 1);
        }

        return isset($hash[0]) ? $hash[0] : null;
    }
}