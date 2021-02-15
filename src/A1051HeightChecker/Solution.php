<?php declare(strict_types=1);

namespace App\A1051HeightChecker;

class Solution {

    /**
     * @param Integer[] $heights
     * @return Integer
     */
    function heightChecker($heights) {
        $i = 0;
        $originalHeights = $heights;

        while ($i < count($heights)) {
            $index = $i;

            while (isset($heights[$index-1])) {
                if ($heights[$index-1] > $heights[$index]) {
                    [$heights[$index-1], $heights[$index]] = [$heights[$index], $heights[$index-1]];
                }
                $index--;
            }
            $i++;
        }

        $minMove = 0;
        foreach ($originalHeights as $index => $height) {
            if ($height !== $heights[$index]) {
                $minMove++;
            }
        }

        return $minMove;
    }
}