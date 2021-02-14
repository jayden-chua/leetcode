<?php declare(strict_types=1);

namespace App\A1346CheckIfNAndItsDoubleExist;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[10,2,5,3], true],
            [[7,1,14,11], true],
            [[3,1,7,11], false],
            [[0,0], true],
        ];
    }

    /**
     * @dataProvider cases
     */ 
    public function testCheckIfExist($arr, $expectedAnswer) {
       $s = new Solution();
       $this->assertEquals($expectedAnswer, $s->checkIfExist($arr));
    }
}