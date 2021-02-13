<?php declare(strict_types=1);

namespace App\A0027RemoveElement;

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $index = 0;
        while ($index < count($nums)) {
            if ($nums[$index] === $val) {
                array_splice($nums, $index, 1);
            } else {
                $index++;
            }
        }
        return count($nums);
    }
}