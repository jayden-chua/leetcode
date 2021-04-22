<?php declare(strict_types=1);

namespace App\A0042TrappingRainWater;

class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    public function trapBruteForce($height)
    {
        $totalVol = 0;
        $index = 0;
        while ($index < count($height)) {
            $currentHeight = $height[$index];
            $leftMax = $index === 0 ? 0 : max(array_slice($height, 0, $index+1));
            $rightMax = $index === count($height) - 1 ? 0 : max(array_slice($height, $index+1));
            if ($rightMax > $currentHeight & $leftMax > $currentHeight) {
                $totalVol += min($rightMax-$currentHeight, $leftMax-$currentHeight);
            }
            $index++;
        }
        return $totalVol;
    }

    /**
     * @param array $height
     * @return int
     */
    public function trapTwoPointers($height)
    {
        $totalVol = 0;
        $leftMax = 0;
        $rightMax = 0;
        $leftPointer = 0;
        $rightPointer = count($height) - 1;
        while ($leftPointer < $rightPointer) {
            if ($height[$leftPointer] < $height[$rightPointer]) {
                if ($height[$leftPointer] < $leftMax) {
                    $totalVol += ($leftMax - $height[$leftPointer]);
                } else {
                    $leftMax = $height[$leftPointer];
                }
                $leftPointer++;
            } else {
                if ($height[$rightPointer] < $rightMax) {
                    $totalVol += ($rightMax - $height[$rightPointer]);
                } else {
                    $rightMax = $height[$rightPointer];
                }
                $rightPointer--;
            }
        }
        return $totalVol;
    }
}