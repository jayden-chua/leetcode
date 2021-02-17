<?php declare(strict_types=1);

namespace App\A0905SortArrayByParity;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[3,1,2,4], [2,4,3,1]],
        ];
    }

    /**
     * @dataProvider cases
     * @param array $A
     * @param array $expectedAnswer
     */
    public function testSortArrayByParity($A, $expectedAnswer) {
        $s = new Solution();
        $this->assertEquals($expectedAnswer, $s->sortArrayByParity($A));
    }

    /**
     * @dataProvider cases
     * @param array $A
     * @param array $expectedAnswer
     */
    public function testSortArrayByParityInPlace($A, $expectedAnswer) {
        $s = new Solution();
        $this->assertEquals($expectedAnswer, $s->sortArrayByParityInPlace($A));
    }
}