<?php declare(strict_types=1);

namespace App\A0039CombinationSum;

class Solution {

    private $answer = [];

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    public function combinationSum($candidates, $target) {
        $this->backtrack($target, $candidates, []);

        return $this->answer;
    }

    /**
     * @param int $remain
     * @param array $combinations
     * @param array $currentSolution
     */
    private function backtrack($remain, $combinations, $currentSolution)
    {
        if ($remain === 0) {
            $this->answer[] = $currentSolution;
            return;
        }

        if ($remain < 0) {
            return;
        }

        for ($i = 0 ; $i < count($combinations) ; $i++) {
            $currentSolution[] = $combinations[$i];
            $this->backtrack($remain - $combinations[$i], array_slice($combinations, $i), $currentSolution);
            array_pop($currentSolution);
        }
    }
}