<?php declare(strict_types=1);

namespace App\A0236LowestCommonAncestorOfABinaryTree;
use Lib\Helper\TreeNode;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [
                new TreeNode(3,
                    new TreeNode(5,
                        new TreeNode(6),
                        new TreeNode(2,
                            new TreeNode(7),
                            new TreeNode(4)
                        )
                    ),
                    new TreeNode(1,
                        new TreeNode(0),
                        new TreeNode(8)
                    )
                ),
                new TreeNode(5,
                    new TreeNode(6),
                    new TreeNode(2,
                        new TreeNode(7),
                        new TreeNode(4)
                    )
                ),
                new TreeNode(1,
                    new TreeNode(0),
                    new TreeNode(8)
                ),
                new TreeNode(3,
                    new TreeNode(5,
                        new TreeNode(6),
                        new TreeNode(2,
                            new TreeNode(7),
                            new TreeNode(4)
                        )
                    ),
                    new TreeNode(1,
                        new TreeNode(0),
                        new TreeNode(8)
                    )
                )
            ],[
                new TreeNode(3,
                    new TreeNode(5,
                        new TreeNode(6),
                        new TreeNode(2,
                            new TreeNode(7),
                            new TreeNode(4)
                        )
                    ),
                    new TreeNode(1,
                        new TreeNode(0),
                        new TreeNode(8)
                    )
                ),
                new TreeNode(5,
                    new TreeNode(6),
                    new TreeNode(2,
                        new TreeNode(7),
                        new TreeNode(4)
                    )
                ),
                new TreeNode(4),
                new TreeNode(5,
                    new TreeNode(6),
                    new TreeNode(2,
                        new TreeNode(7),
                        new TreeNode(4)
                    )
                )
            ],[
                new TreeNode(1,
                    new TreeNode(2)
                ),
                new TreeNode(1,
                    new TreeNode(2)
                ),
                new TreeNode(2),
                new TreeNode(1,
                    new TreeNode(2)
                )
            ]
        ];
    }

    /**
     * @dataProvider cases
     * @param TreeNode $input
     * @param TreeNode $p
     * @param TreeNode $q
     * @param TreeNode $expectedAnswer
     */
    public function testSample(TreeNode $input, TreeNode $p, TreeNode $q, TreeNode $expectedAnswer) {
        $s = new Solution();
        $this->assertEquals($expectedAnswer, $s->lowestCommonAncestor($input, $p, $q));
    }
}