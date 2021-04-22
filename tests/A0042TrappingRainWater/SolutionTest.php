<?php declare(strict_types=1);

namespace App\A0042TrappingRainWater;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[0,1,0,2,1,0,1,3,2,1,2,1], 6],
            [[4,2,0,3,2,5], 9],
        ];
    }

    /**
     * @dataProvider cases
     *
     * @param $input
     * @param $expected
     */
    public function testTrapBruteForce($input, $expected) {
        $s = new Solution();
        $this->assertEquals($expected, $s->trapBruteForce($input));
    }

    /**
     * @dataProvider cases
     *
     * @param $input
     * @param $expected
     */
    public function testTrapTwoPointers($input, $expected) {
        $s = new Solution();
        $this->assertEquals($expected, $s->trapTwoPointers($input));
    }
}