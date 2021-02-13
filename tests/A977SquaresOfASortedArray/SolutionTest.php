<?php declare(strict_types=1);

namespace App\A977SquaresOfASortedArray;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[-4,-1,0,3,10], [0,1,9,16,100]],
            [[-7,-3,2,3,11], [4,9,9,49,121]],
        ];
    }

    /**
     * @dataProvider cases
     */ 
    public function testSortedSquares($nums, $expectedAnswer) {
       $s = new Solution();
       $this->assertEquals($expectedAnswer, $s->sortedSquares($nums));
       $this->assertEquals($expectedAnswer, $s->sortedSquaresDualPointer($nums));
    }
}