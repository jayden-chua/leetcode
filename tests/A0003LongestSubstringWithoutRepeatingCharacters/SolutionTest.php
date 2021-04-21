<?php declare(strict_types=1);

namespace App\A0003LongestSubstringWithoutRepeatingCharacters;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            ['abcabcbb', 3],
            ['bbbbb', 1],
            ['pwwkew', 3],
            ['', 0],
        ];
    }

    /**
     * @dataProvider cases
     * @param string $input
     * @param string $expected
     */
    public function testLengthOfLongestSubstringBruteForce($input, $expected) {
        $s = new Solution();
        $this->assertEquals($expected, $s->lengthOfLongestSubstringBruteForce($input));
    }

    /**
     * @dataProvider cases
     * @param string $input
     * @param string $expected
     */
    public function testLengthOfLongestSubstringSlidingWindow($input, $expected) {
        $s = new Solution();
        $this->assertEquals($expected, $s->lengthOfLongestSubstringSlidingWindow($input));
    }

    /**
     * @dataProvider cases
     * @param string $input
     * @param string $expected
     */
    public function testLengthOfLongestSubstringSlidingWindowOptimized($input, $expected) {
        $s = new Solution();
        $this->assertEquals($expected, $s->lengthOfLongestSubstringSlidingWindowOptimized($input));
    }
}