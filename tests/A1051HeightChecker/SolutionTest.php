<?php declare(strict_types=1);

namespace App\A1051HeightChecker;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[1,1,4,2,1,3], 3],
            [[5,1,2,3,4], 5],
            [[1,2,3,4,5], 0],
        ];
    }

    /**
     * @dataProvider cases
     * @param array $nums
     * @param int $expectedAnswer
     */
    public function testHeightChecker($nums, $expectedAnswer) {
        $s = new Solution();
        $this->assertEquals($expectedAnswer, $s->heightChecker($nums));
    }
}