<?php declare(strict_types=1);

namespace App\A0080RemoveDuplicatesFromSortedArrayII;

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $index = 0;
        while ($index < count($nums)) {
            if (isset($nums[$index-1]) && isset($nums[$index-2]) && $nums[$index-2] == $nums[$index-1] && $nums[$index] == $nums[$index-1]) {
                array_splice($nums, $index, 1);
                continue;
            }
            $index++;
        }
        return count($nums);
    }
}