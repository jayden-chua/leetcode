<?php declare(strict_types=1);

namespace App\A0200NumberOfIslands;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[["1","1","1","1","0"],
              ["1","1","0","1","0"],
              ["1","1","0","0","0"],
              ["0","0","0","0","0"]], 1],
            [[["1","0","0","1","1","1","0","1","1","0","0","0","0","0","0","0","0","0","0","0"],
              ["1","0","0","1","1","0","0","1","0","0","0","1","0","1","0","1","0","0","1","0"],
              ["0","0","0","1","1","1","1","0","1","0","1","1","0","0","0","0","1","0","1","0"],
              ["0","0","0","1","1","0","0","1","0","0","0","1","1","1","0","0","1","0","0","1"],
              ["0","0","0","0","0","0","0","1","1","1","0","0","0","0","0","0","0","0","0","0"],
              ["1","0","0","0","0","1","0","1","0","1","1","0","0","0","0","0","0","1","0","1"],
              ["0","0","0","1","0","0","0","1","0","1","0","1","0","1","0","1","0","1","0","1"],
              ["0","0","0","1","0","1","0","0","1","1","0","1","0","1","1","0","1","1","1","0"],
              ["0","0","0","0","1","0","0","1","1","0","0","0","0","1","0","0","0","1","0","1"],
              ["0","0","1","0","0","1","0","0","0","0","0","1","0","0","1","0","0","0","1","0"],
              ["1","0","0","1","0","0","0","0","0","0","0","1","0","0","1","0","1","0","1","0"],
              ["0","1","0","0","0","1","0","1","0","1","1","0","1","1","1","0","1","1","0","0"],
              ["1","1","0","1","0","0","0","0","1","0","0","0","0","0","0","1","0","0","0","1"],
              ["0","1","0","0","1","1","1","0","0","0","1","1","1","1","1","0","1","0","0","0"],
              ["0","0","1","1","1","0","0","0","1","1","0","0","0","1","0","1","0","0","0","0"],
              ["1","0","0","1","0","1","0","0","0","0","1","0","0","0","1","0","1","0","1","1"],
              ["1","0","1","0","0","0","0","0","0","1","0","0","0","1","0","1","0","0","0","0"],
              ["0","1","1","0","0","0","1","1","1","0","1","0","1","0","1","1","1","1","0","0"],
              ["0","1","0","0","0","0","1","1","0","0","1","0","1","0","0","1","0","0","1","1"],
              ["0","0","0","0","0","0","1","1","1","1","0","1","0","0","0","1","1","0","0","0"]], 58]
        ];
    }

    /**
     * @dataProvider cases
     * @param array $grid
     * @param int $expectedAnswer
     */
    public function testNumIslandsDfs(array $grid, $expectedAnswer) {
        $s = new Solution();
        $this->assertEquals($expectedAnswer, $s->numIslandsDfs($grid));
    }

    /**
     * @dataProvider cases
     * @param array $grid
     * @param int $expectedAnswer
     */
    public function testNumIslandsBfs(array $grid, $expectedAnswer) {
        $s = new Solution();
        $this->assertEquals($expectedAnswer, $s->numIslandsBfs($grid));
    }
}