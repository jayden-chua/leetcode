<?php declare(strict_types=1);

namespace App\A1089DuplicateZeros;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[1,0,2,3,0,4,5,0], [1,0,0,2,3,0,0,4]],
            [[1,2,3], [1,2,3]],
        ];
    }

    /**
     * @dataProvider cases
     */ 
    public function testDuplicateZeros($nums, $expectedAnswer) {
       $s = new Solution();
       $s->duplicateZeros($nums);
       $this->assertEquals($expectedAnswer, $nums);
    }
}