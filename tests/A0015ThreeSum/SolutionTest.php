<?php declare(strict_types=1);

namespace App\A0015ThreeSum;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[-1,0,1,2,-1,-4], [[-1,-1,2],[-1,0,1]]],
            [[], []],
            [[0], []],
        ];
    }

    /**
     * @dataProvider cases
     */ 
    public function testSample($input, $expected) {
        $s = new Solution();
        $this->assertEquals($expected, $s->threeSum($input));
    }
}