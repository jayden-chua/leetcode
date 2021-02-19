<?php declare(strict_types=1);

namespace App\A0022GenerateParentheses;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [3, ["((()))","(()())","(())()","()(())","()()()"]],
            [1, ["()"]],
        ];
    }

    /**
     * @dataProvider cases
     *
     * @param $input
     * @param $expectedOutput
     */
    public function testGenerateParenthesis($input, $expectedOutput) {
        $s = new Solution();
        $output = $s->generateParenthesis($input);
        if (empty($expectedOutput)) {
            $this->assertEquals($expectedOutput, $output);
        } else {
            foreach ($expectedOutput as $expected) {
                $this->assertContains($expected, $output);
            }
            $this->assertEquals(count($expectedOutput), count($output));
        }
    }
}