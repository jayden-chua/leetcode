<?php declare(strict_types=1);

namespace App\A0100SameTree;
use PHPUnit\Framework\TestCase;
use Lib\Helper\TreeHelper;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[], [], true],
            [[1,2,3], [1,2,3], true],
        ];
    }

    /**
     * @dataProvider cases
     *
     * @param array $p
     * @param array $q
     * @param bool $expectedAnswer
     */
    public function testIsSameTree(array $p, array $q, bool $expectedAnswer) {
        $s = new Solution();
        $pNode = TreeHelper::createTreeFromArray($p);
        $qNode = TreeHelper::createTreeFromArray($q);

        $this->assertEquals($expectedAnswer, $s->isSameTree($pNode, $qNode));
    }
}