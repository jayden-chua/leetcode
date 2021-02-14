<?php declare(strict_types=1);

namespace App\A0941ValidMountainArray;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[2,1], false],
            [[3,5,5], false],
            [[0,3,2,1], true],
            [[0,1,2,3,4,5,6,7,8,9], false],
            [[9,8,7,6,5,4,3,2,1,0], false]
        ];
    }

    /**
     * @dataProvider cases
     */ 
    public function testValidMountainArray($arr, $expectedAnswer) {
       $s = new Solution();
       $this->assertEquals($expectedAnswer, $s->validMountainArray($arr));
    }
}