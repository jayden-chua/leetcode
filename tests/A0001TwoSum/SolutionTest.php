<?php declare(strict_types=1);

namespace App\A0001TwoSum;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[2,7,11,15], 9, [0,1]],
            [[3,2,4], 6, [1,2]],
            [[3,3], 6, [0,1]]
        ];
    }

    /**
     * @dataProvider cases
     * @param $input
     * @param $target
     * @param $expected
     */
    public function testTwoSum($input, $target, $expected) {
        $s = new Solution();
        $this->assertEquals($expected, $s->twoSum($input, $target));
    }
}