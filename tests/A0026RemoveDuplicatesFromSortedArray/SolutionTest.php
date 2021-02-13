<?php declare(strict_types=1);

namespace App\A0026RemoveDuplicatesFromSortedArray;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[1,1,2], 2, [1,2]],
            [[0,0,1,1,1,2,2,3,3,4], 5, [0,1,2,3,4]],
        ];
    }

    /**
     * @dataProvider cases
     */ 
    public function testRemoveDuplicates($nums, $expectedCount, $expectedArray) {
       $s = new Solution();
       $this->assertEquals($expectedCount, $s->removeDuplicates($nums));
       $this->assertEquals($expectedArray, $nums);
    }
}