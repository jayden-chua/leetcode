<?php declare(strict_types=1);

namespace App\A160IntersectionOfTwoLinkedLists;

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
     * Time complexity worst O(mm), best O(n)
     * Space complexity O(1)
     * @param ListNode $headA
     * @param ListNode $headB
     * @return ListNode
     */
    public function getIntersectionBruteForce($headA, $headB) {
        $pointer1 = $headA;

        while ($pointer1) {
            $pointer2 = $headB;
            while ($pointer2) {
                if ($pointer1 === $pointer2) {
                    return $pointer1;
                }
                $pointer2 = $pointer2->next;
            }
            $pointer1 = $pointer1->next;
        }
        return null;
    }

    /**
     * Time complexity worst O(m+m), best O(n)
     * Space complexity O(m)
     * @param $headA
     * @param $headB
     * @return null
     */
    public function getIntersectionHash($headA, $headB) {
        $hash = [];
        $pointer1 = $headA;
        $pointer2 = $headB;

        while ($pointer1) {
            $hash[spl_object_hash($pointer1)] = $pointer1;
            $pointer1 = $pointer1->next;
        }

        while ($pointer2) {
            $key = spl_object_hash($pointer2);
            if (isset($hash[$key]) && $hash[$key] === $pointer2) {
                return $pointer2;
            }
            $pointer2 = $pointer2->next;
        }
        return null;
    }

    /**
     * Time complexity worst O(n+m) best O(n)
     * Space complexity O(1)
     * @param $headA
     * @param $headB
     * @return null
     */
    public function getIntersection($headA, $headB) {
        $pointer1 = $headA;
        $pointer2 = $headB;
        $nextPointer1 = $headB;
        $nextPointer2 = $headA;

        $pointer1Times = 0;
        $pointer2Times = 0;

        while (!($pointer1Times > 1)  && !($pointer2Times > 1)) {
            if ($pointer1 === $pointer2) {
                return $pointer1;
            }
            $pointer1 = $pointer1->next;
            if ($pointer1 === null) {
                $pointer1 = $nextPointer1;
                $nextPointer1 = $nextPointer1 == $headA ? $headB : $headA;
                $pointer1Times++;
            }
            $pointer2 = $pointer2->next;
            if ($pointer2 === null) {
                $pointer2 = $nextPointer2;
                $nextPointer2 = $nextPointer2 == $headA ? $headB : $headA;
                $pointer2Times++;
            }
        }

        return null;
    }
}