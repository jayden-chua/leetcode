<?php declare(strict_types=1);

namespace App\A0017LetterCombinationsOfAPhoneNumber;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            ["23", ["ad","ae","af","bd","be","bf","cd","ce","cf"]],
            ["", []],
            ["2", ["a", "b" ,"c"]]
        ];
    }

    /**
     * @dataProvider cases
     * @param $input
     * @param $expectedOutput
     */
    public function testLetterCombinations($input, $expectedOutput) {
        $s = new Solution();
        $output = $s->letterCombinations($input);
        if (empty($expectedOutput)) {
            $this->assertEquals($expectedOutput, $output);
        } else {
            foreach ($expectedOutput as $expected) {
                $this->assertContains($expected, $output);
            }
        }
    }
}