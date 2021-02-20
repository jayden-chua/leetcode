<?php declare(strict_types=1);

namespace App\A0046Permutations;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[1,2,3], [[1,2,3],[1,3,2],[2,1,3],[2,3,1],[3,1,2],[3,2,1]]],
            [[0,1], [[0,1],[1,0]]],
            [[1], [[1]]]
        ];
    }

    /**
     * @dataProvider cases
     * @param array $input
     * @param array $expectedOutput
     */
    public function testPermute($input, $expectedOutput) {
        $s = new Solution();
        $this->assertEquals($expectedOutput, $s->permute($input));
    }
}