<?php declare(strict_types=1);

namespace App\A0039CombinationSum;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[2,3,6,7], 7, [[2,2,3],[7]]],
            [[2,3,5], 8, [[2,2,2,2],[2,3,3],[3,5]]],
            [[2], 1, []],
            [[1], 1, [[1]]],
            [[1], 2, [[1,1]]]
        ];
    }

    /**
     * @dataProvider cases
     * @param $combinations
     * @param $target
     * @param $expectedAnswer
     */
    public function testCombinationSum($combinations, $target, $expectedAnswer) {
        $s = new Solution();
        $this->assertEquals($expectedAnswer, $s->combinationSum($combinations, $target));
    }
}