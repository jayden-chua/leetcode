<?php declare(strict_types=1);

namespace App\A0078Subsets;

class Solution {

    private $answer = [];

    /**
     * @param array $nums
     * @return array
     */
    public function subsets($nums) {
        $this->backtrack($nums, []);
        return $this->answer;
    }

    private function backtrack($remain, $solution) {
        $this->answer[] = $solution;

        if (count($remain) === 0) {
            return;
        }

        for ($i = 0; $i < count($remain); $i++) {
            $solution[] = $remain[$i];
            $this->backtrack(array_slice($remain, $i+1), $solution);
            array_pop($solution);
        }
    }
}