<?php declare(strict_types=1);

namespace App\A0088MergeSortedArray;

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n): void {
        $pointer1 = 0;
        $pointer2 = 0;

        array_splice($nums1, $m);

        while ($pointer1 < count($nums1)) {
            if (isset($nums2[$pointer2]) && $nums2[$pointer2] < $nums1[$pointer1]) {
                array_splice($nums1, $pointer1, 0, $nums2[$pointer2]);
                $pointer2++;
            } else {
                $pointer1++;
            }
        }

        while ($pointer2 < $n) {
            $nums1[] = $nums2[$pointer2];
            $pointer2++;
        }
    }
}