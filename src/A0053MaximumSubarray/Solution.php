<?php declare(strict_types=1);

namespace App\A0053MaximumSubarray;

class Solution {

    function maxSubArrayOnePass($nums) {
        $size = count($nums);
        $max = -INF;


        return $max;
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArrayBruteForce($nums) {
        $size = count($nums);
        $max = -INF;

        for ($i = 0; $i < $size; $i++) {
            $currentSubArray = 0;
            for ($j = $i; $j < $size; $j++) {
                $currentSubArray += $nums[$j];
                $max = max($max, $currentSubArray);
            }
        }
        return $max;
    }
}
