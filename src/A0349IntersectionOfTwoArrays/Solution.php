<?php declare(strict_types=1);

namespace App\A0349IntersectionOfTwoArrays;

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return array
     */
    public function intersection($nums1, $nums2) {
        $answer = [];
        foreach ($nums1 as $num1) {
            foreach ($nums2 as $num2) {
                if ($num1 === $num2 && !in_array($num1, $answer)) {
                    $answer[$num1] = $num1;
                }
            }
        }
        return array_keys($answer);
    }
}