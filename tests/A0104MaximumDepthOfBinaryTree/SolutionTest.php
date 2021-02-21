<?php declare(strict_types=1);

namespace App\A0104MaximumDepthOfBinaryTree;
use Lib\Helper\TreeHelper;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[3,9,20,null,null,15,7], 3],
            [[1,null,2], 2],
            [[1,2,3,4,null,null,5], 3],
            [[0], 1]
        ];
    }

    /**
     * @dataProvider cases
     * @param array $inputNodes
     * @param int $expectedOutput
     */
    public function testMaxDepthRecursive(array $inputNodes, int $expectedOutput) {
        $s = new Solution();
        $treeNodes = TreeHelper::createTreeFromArray($inputNodes);
        $this->assertEquals($expectedOutput, $s->maxDepthRecursive($treeNodes));
    }

    /**
     * @dataProvider cases
     * @param array $inputNodes
     * @param int $expectedOutput
     */
    public function testMaxDepthIterative(array $inputNodes, int $expectedOutput) {
        $s = new Solution();
        $treeNodes = TreeHelper::createTreeFromArray($inputNodes);
        $this->assertEquals($expectedOutput, $s->maxDepthIterative($treeNodes));
    }
}