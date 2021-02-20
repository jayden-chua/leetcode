<?php declare(strict_types=1);

namespace App\A0079WordSearch;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], "ABCCED", true],
            [[["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], "SEE", true],
            [[["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], "ABCB", false],
            [[["A"]], "A", true],
            [[["a","a","a","a"],["a","a","a","a"],["a","a","a","a"]], "aaaaaaaaaaaaa", false],
            [[["a","a","a","a"],["a","a","a","a"],["a","a","a","a"],["a","a","a","a"],["a","a","a","b"]], "aaaaaaaaaaaaaaaaaaaa", false]
        ];
    }

    /**
     * @dataProvider cases
     * @param $board
     * @param $word
     * @param $expectedAnswer
     */
    public function testSample($board, $word, $expectedAnswer) {
        $s = new Solution();
        $this->assertEquals($expectedAnswer, $s->exist($board, $word));
    }
}