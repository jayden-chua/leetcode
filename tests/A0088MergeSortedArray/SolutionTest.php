<?php declare(strict_types=1);

namespace App\A0088MergeSortedArray;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[1,2,3,0,0,0], 3, [2,5,6], 3, [1,2,2,3,5,6]],
            [[-1,0,0,1,2,3,0,0,0], 6, [2,5,6], 3, [-1,0,0,1,2,2,3,5,6]],
            [[1], 1, [], 0, [1]],
        ];
    }

    /**
     * @dataProvider cases
     */ 
    public function testMerge($arr1, $m, $arr2, $n, $expectedAnswer) {
       $s = new Solution();
       $s->merge($arr1, $m, $arr2, $n);
       $this->assertEquals($expectedAnswer, $arr1);
    }
}