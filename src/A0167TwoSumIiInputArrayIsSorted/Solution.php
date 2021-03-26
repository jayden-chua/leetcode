<?php declare(strict_types=1);

namespace App\A0167TwoSumIiInputArrayIsSorted;

class Solution {

    /**
     * @param $numbers
     * @param $target
     * @return array
     */
    function twoSum($numbers, $target) {
        $left = 1;
        $right = count($numbers);

        while ($left < $right) {
            $sum = $numbers[$left-1] + $numbers[$right-1];

            if ($sum === $target) {
                return [$left, $right];
            }

            if ($sum < $target) {
                $left++;
            } else {
                $right--;
            }
        }
        return [];
    }
}