<?php declare(strict_types=1);

namespace App\A0283MoveZeros;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[0,1,0,3,12], [1,3,12,0,0]],
        ];
    }

    /**
     * @dataProvider cases
     * @param array $nums
     * @param array $expectedAnswer
     */
    public function testSample($nums, $expectedAnswer) {
        $s = new Solution();
        $s->moveZeroes($nums);
        $this->assertEquals($expectedAnswer, $nums);
    }
}