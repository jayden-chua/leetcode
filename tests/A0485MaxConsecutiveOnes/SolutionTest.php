<?php declare(strict_types=1);

namespace App\A0485MaxConsecutiveOnes;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[1,1,0,0,1,1,1], 3],
            [[1,1,0,1,1,1,0,1,1,1,1,1,1,0,1,1,1], 6],
        ];
    }

    /**
     * @dataProvider cases
     */ 
    public function testFindMaxConsecutiveOnes($nums, $expectedAnswer) {
       $s = new Solution();
       $this->assertEquals($expectedAnswer, $s->findMaxConsecutiveOnes($nums));
    }
}