<?php declare(strict_types=1);

namespace App\A414ThirdMaximumNumber;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[3,2,1], 1],
            [[1,2], 2],
            [[2,2,3,1], 1],
        ];
    }

    /**
     * @dataProvider cases
     * @param $nums
     * @param $expectedAnswer
     */
    public function testThirdMax($nums, $expectedAnswer) {
        $s = new Solution();
        $this->assertEquals($expectedAnswer, $s->thirdMax($nums));
    }
}