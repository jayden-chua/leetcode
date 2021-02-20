<?php declare(strict_types=1);

namespace App\A0046Permutations;

class Solution {

    private $answer = [];

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public function permute($nums) {
        $this->backtrack($nums, []);
        return $this->answer;
    }

    private function backtrack($list, $perms)
    {
        if (count($list) === 0) {
            $this->answer[] = $perms;
            return;
        }

        for ($i = 0; $i < count($list); $i++) {
            $perms[] = $list[$i];
            $clone = $list;
            array_splice($clone, $i, 1);
            $this->backtrack($clone, $perms);
            array_pop($perms);
        }
    }
}