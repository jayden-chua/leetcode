<?php declare(strict_types=1);

namespace App\A977SquaresOfASortedArray;

class Solution {

    /**
     * Trivial solution using built-in sort
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function sortedSquares($nums): array {
        $result = [];
        foreach ($nums as $num) {
            $result[] = $num ** 2;
        }
        sort($result);
        return $result;
    }

    /**
     * Using 2 pointers that move from left and right of array
     * @param Integer[] $nums
     * @return Integer[]
     */
    public function sortedSquaresDualPointer($nums): array {
        if (empty($nums)) {
            return $nums;
        }
        $result = [];
        $leftPointer = 0;
        $rightPointer = count($nums) - 1;
        while ($leftPointer !== $rightPointer) {
            if (abs($nums[$leftPointer]) > abs($nums[$rightPointer])) {
                array_unshift($result, $nums[$leftPointer] ** 2);
                $leftPointer++;
            } else {
                array_unshift($result, $nums[$rightPointer] ** 2);
                $rightPointer--;
            }
        }
        array_unshift($result, $nums[$leftPointer] ** 2);
        return $result;
    }
}