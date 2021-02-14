<?php declare(strict_types=1);

namespace App\A0283MoveZeros;

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        $readIndex = 0;
        $writeIndex = 0;
        $numLength = count($nums);
        while ($readIndex < $numLength) {
            if ($nums[$readIndex] === 0) {
                $readIndex++;
                continue;
            }
            [$nums[$writeIndex], $nums[$readIndex]] = [$nums[$readIndex], $nums[$writeIndex]];
            $writeIndex++;
            $readIndex++;
        }
    }
}