<?php declare(strict_types=1);

namespace App\A487MaxConsecutiveOnesIi;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[1,0,1,1,0], 4],
            [[1,0,1,1,0,1], 4],
            [[1,1,0,1], 4],
            [[1], 1],
            [[], 0],
        ];
    }

    /**
     * @dataProvider cases
     * @param $nums
     * @param $expectedAnswer
     */
    public function testFindMaxConsecutiveOnes($nums, $expectedAnswer) {
        $s = new Solution();
        $this->assertEquals($expectedAnswer, $s->findMaxConsecutiveOnes($nums));
    }
}