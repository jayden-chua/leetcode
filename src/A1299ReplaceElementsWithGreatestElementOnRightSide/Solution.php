<?php declare(strict_types=1);

namespace App\A1299ReplaceElementsWithGreatestElementOnRightSide;

class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer[]
     */
    function replaceElements($arr): array {
        $arrLength = count($arr);

        foreach ($arr as $index => $item) {
            $currentIndex = $index;

            if ($index === $arrLength - 1) {
                $arr[$currentIndex] = -1;
                break;
            }

            $max = 0;

            $index++;
            while ($index < $arrLength) {
                if ($arr[$index] > $max) {
                    $max = $arr[$index];
                }
                $index++;
            }

            $arr[$currentIndex] = $max;
        }

        return $arr;
    }
}