<?php declare(strict_types=1);

namespace App\A0033SearchInRotatedSortedArray;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[12,345,2,6,7986], 2],
        ];
    }

    /**
     * @dataProvider cases
     */ 
    public function testSample() {
        $s = new Solution();
        $this->assertEquals('', '');
    }
}