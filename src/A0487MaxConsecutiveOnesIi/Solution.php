<?php declare(strict_types=1);

namespace App\A0487MaxConsecutiveOnesIi;

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function findMaxConsecutiveOnes($nums) {
        if (empty($nums)) {
            return 0;
        }

        $zeroIndexes = [];
        foreach ($nums as $index => $num) {
            if ($num === 0) {
                $zeroIndexes[] = $index;
            }
        }

        if (empty($zeroIndexes)) {
            return count($nums);
        }

        $maxConsecutiveOnes = 0;

        foreach ($zeroIndexes as $i => $index) {
            $leftIndex = isset($zeroIndexes[$i-1]) ? $zeroIndexes[$i-1] + 1 : 0;
            $rightIndex = isset($zeroIndexes[$i+1]) ? $zeroIndexes[$i+1] : count($nums);
            if ($maxConsecutiveOnes < $rightIndex - $leftIndex) {
                $maxConsecutiveOnes = $rightIndex - $leftIndex;
            }
        }

        return $maxConsecutiveOnes;
    }


}