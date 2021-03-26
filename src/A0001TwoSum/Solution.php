<?php declare(strict_types=1);

namespace App\A0001TwoSum;

class Solution {
    function twoSum($nums, $target) {
        $comp = [];
        foreach ($nums as $index => $num) {
            if (isset($comp[$num])) {
                return [$comp[$num], $index];
            }
            if (!isset($comp[$target - $num])) {
                $comp[$target - $num] = $index;
            }
        }
        return [];
    }
}