<?php declare(strict_types=1);

namespace App\A448FindAllNumbersDisappearedInAnArray;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[4,3,2,7,8,2,3,1], [5,6]],
            [[],[]]
        ];
    }

    /**
     * @dataProvider cases
     * @param $nums
     * @param $expectedAnswer
     */
    public function testFindDisappearedNumbers($nums, $expectedAnswer) {
        $s = new Solution();
        $this->assertEquals($expectedAnswer, $s->findDisappearedNumbers($nums));
    }
}