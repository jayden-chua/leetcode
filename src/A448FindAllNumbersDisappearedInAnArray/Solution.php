<?php declare(strict_types=1);

namespace App\A448FindAllNumbersDisappearedInAnArray;

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {
        if (empty($nums)) {
            return [];
        }
        $returnArr = [];
        foreach ($nums as $index => $value) {
            $returnArr[$value] = $value-1;
        }

        $missingArr = range(1, count($nums));
        foreach ($returnArr as $value) {
            unset($missingArr[$value]);
        }
        return array_values($missingArr);
    }
}