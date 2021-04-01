<?php declare(strict_types=1);

namespace App\A0053MaximumSubarray;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[-2,1,-3,4,-1,2,1,-5,4], 6],
            [[1], 1],
            [[5,4,-1,7,8], 23],
        ];
    }

    /**
     * @dataProvider cases
     * @param $input
     * @param $expected
     *
     */
    public function testMaxSubArrayBruteForce($input, $expected) {
        $s = new Solution();
        $this->assertEquals($expected, $s->maxSubArrayBruteForce($input));
    }
}