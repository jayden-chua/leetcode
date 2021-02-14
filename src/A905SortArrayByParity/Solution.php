<?php declare(strict_types=1);

namespace App\A905SortArrayByParity;

class Solution {

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortArrayByParity($A) {
        $even = [];
        $odd = [];
        foreach ($A as $index => $element) {
            if ($element % 2 === 0) {
                $even[] = $element;
            } else {
                $odd[] = $element;
            }
        }

        return array_merge($even, $odd);
    }

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortArrayByParityInPlace($A) {
        $endIndex = count($A) - 1;
        $index = 0;

        while ($index != $endIndex) {
            if ($A[$index] % 2) {
                $A[] = $A[$index];
                array_splice($A, $index, 1);
                $endIndex--;
                continue;
            }
            $index++;
        }

        return $A;
    }
}
