<?php declare(strict_types=1);

namespace App\A1089DuplicateZeros;

class Solution {
    /**
     * @param Integer[] $arr
     * @return NULL
     */
    public function duplicateZeros(&$arr): void {
        $index = 0;
        while ($index < count($arr)) {
            if ($arr[$index] == 0) {
                array_splice($arr, $index+1, 0, 0);
                array_pop($arr);
                $index++;
            }
            $index++;
        }
    }
}