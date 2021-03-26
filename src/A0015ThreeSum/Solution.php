<?php declare(strict_types=1);

namespace App\A0015ThreeSum;

class Solution {
    /**
     * @param $nums
     * @return array
     */
    public function threeSum($nums) {
        $triplets = [];
        sort($nums);
        $leftIndex = 0;
        $numSize = count($nums);
        while (isset($nums[$leftIndex]) && $nums[$leftIndex] <= 0) {
            $centerIndex = $leftIndex + 1;
            $rightIndex = $numSize - 1;
            while ($centerIndex < $rightIndex) {
                if (!isset($nums[$centerIndex]) || !isset($nums[$rightIndex])) {
                    break;
                }

                $sumArray = [$nums[$leftIndex], $nums[$centerIndex], $nums[$rightIndex]];
                sort($sumArray);
                $total = array_sum($sumArray);

                if ($total === 0) {
                    $arrayIndex = implode('_', $sumArray);
                    if (!isset($triplets[$arrayIndex])) {
                        $triplets[$arrayIndex] = $sumArray;
                    } else {
                        $centerIndex++;
                        $rightIndex--;
                    }
                } else {
                    if ($total < 0) {
                        $centerIndex++;
                    } else {
                        $rightIndex--;
                    }
                }
            }
            $leftIndex++;
        }
        return array_values($triplets);
    }

    //TODO: implement non-sortable solution
}