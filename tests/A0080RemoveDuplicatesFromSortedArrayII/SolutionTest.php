<?php declare(strict_types=1);

namespace App\A0080RemoveDuplicatesFromSortedArrayII;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[1,1,1,2,2,3], 5, [1,1,2,2,3]],
            [[0,0,1,1,1,1,2,3,3], 7, [0,0,1,1,2,3,3]],
        ];
    }

    /**
     * @dataProvider cases
     * @param array $nums
     * @param int $expectedCount
     * @param array $expectedNewSums
     */
    public function testRemoveDuplicates($nums, $expectedCount, $expectedNewSums) {
       $s = new Solution();
       $this->assertEquals($expectedCount, $s->removeDuplicates($nums));
        $this->assertEquals($expectedNewSums, $nums);
    }
}