<?php declare(strict_types=1);

namespace App\A0033SearchInRotatedSortedArray;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[4,5,6,7,0,1,2], 0, 4],
            [[4,5,6,7,0,1,2], 3, -1],
            [[1], 0, -1],
        ];
    }

    /**
     * @dataProvider cases
     * @param $input
     * @param $target
     * @param $expected
     */
    public function testSearch($input, $target, $expected) {
        $s = new Solution();
        $this->assertEquals($expected, $s->search($input, $target));
    }
}