<?php declare(strict_types=1);

namespace App\A0078Subsets;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[1,2,3], [[],[1],[2],[1,2],[3],[1,3],[2,3],[1,2,3]]],
            [[0], [[], [0]]]
        ];
    }

    /**
     * @dataProvider cases
     */ 
    public function testSample($nums, $expectedAnswer) {
        $s = new Solution();
        $answers = $s->subsets($nums);
        foreach ($expectedAnswer as $ans) {
            $this->assertContains($ans, $answers);
        }

    }
}