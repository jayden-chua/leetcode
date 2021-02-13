<?php declare(strict_types=1);

namespace App\A1295FindNumbersWithEvenNumberOfDigits;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[12,345,2,6,7986], 2],
            [[555,901,482,1771], 1],
        ];
    }

    /**
     * @dataProvider cases
     */ 
    public function testFindNumbers($nums, $expectedAnswer) {
       $s = new Solution();
       $this->assertEquals($expectedAnswer, $s->findNumbers($nums));
    }
}