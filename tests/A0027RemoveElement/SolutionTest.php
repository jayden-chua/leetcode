<?php declare(strict_types=1);

namespace App\A0027RemoveElement;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[3,2,2,3], 3, 2, [2,2]],
            [[0,1,2,2,3,0,4,2], 2, 5, [0,1,3,0,4]],
        ];
    }

    /**
     * @dataProvider cases
     */ 
    public function testRemoveElement($nums, $val, $expectedCount, $expectedArray) {
        $s = new Solution(); 
        $this->assertEquals($expectedCount, $s->removeElement($nums, $val));
        $this->assertEquals($expectedArray, $nums);
    }
}