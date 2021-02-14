<?php declare(strict_types=1);

namespace App\A1299ReplaceElementsWithGreatestElementOnRightSide;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[17,18,5,4,6,1], [18,6,6,6,1,-1]],
            [[400], [-1]],
        ];
    }

    /**
     * @dataProvider cases
     * @param $arr
     * @param $expectedAnswer
     */
    public function testSample($arr, $expectedAnswer) {
       $s = new Solution();
       $this->assertEquals($expectedAnswer, $s->replaceElements($arr));
    }
}