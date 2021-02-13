<?php declare(strict_types=1);

namespace App\A1295FindNumbersWithEvenNumberOfDigits;

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function findNumbers($nums): int {
        $evenCount = 0;
        foreach ($nums as $num) {
            if ((strlen((string) $num) % 2) === 0) {
                $evenCount++;
            }
        }
        return $evenCount;
    }
}