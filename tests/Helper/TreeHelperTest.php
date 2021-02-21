<?php declare(strict_types=1);

namespace App\A0100SameTree;
use PHPUnit\Framework\TestCase;
use Lib\Helper\TreeNode;
use Lib\Helper\TreeHelper;

final class TreeHelperTest extends TestCase
{
    public function testHelper()
    {
        $node = new TreeNode(1);
        $node->left = new TreeNode(2);
        $node->right = new TreeNode(3);

        $this->assertEquals($node, TreeHelper::createTreeFromArray([1,2,3]));
    }

    public function testHelper2()
    {
        $node = new TreeNode(1);
        $node->left = new TreeNode(2, new TreeNode(4), new TreeNode(5));
        $node->right = new TreeNode(3, new TreeNode(6), new TreeNode(7));

        $this->assertEquals($node, TreeHelper::createTreeFromArray([1, 2, 3, 4, 5, 6, 7]));
    }

    public function testHelper3()
    {
        $this->assertNull(TreeHelper::createTreeFromArray([]));
    }

    public function testHelper4()
    {
        $node = new TreeNode(3);
        $node->left = new TreeNode(9);
        $node->right = new TreeNode(20, new TreeNode(15), new TreeNode(7));

        $this->assertEquals($node, TreeHelper::createTreeFromArray([3,9,20,null,null,15,7]));
    }
}