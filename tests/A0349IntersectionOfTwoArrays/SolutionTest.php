<?php declare(strict_types=1);

namespace App\A0349IntersectionOfTwoArrays;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[1,2,2,1], [2,2], [2]],
            [[4,9,5], [9,4,9,8,4], [9,4]],
        ];
    }

    /**
     * @dataProvider cases
     *
     * @param array $nums1
     * @param array $nums2
     * @param array $expectedAnswer
     */
    public function testIntersection($nums1, $nums2, $expectedAnswer) {
        $s = new Solution();
        $actualAns = $s->intersection($nums1, $nums2);
        foreach ($expectedAnswer as $ans) {
            $this->assertContains($ans, $actualAns);
        }
    }
}