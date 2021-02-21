<?php declare(strict_types=1);

namespace App\A0104MaximumDepthOfBinaryTree;
use Lib\Helper\TreeNode;

class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    public function maxDepthRecursive($root) {
        $total = 0;
        if (!($root instanceof TreeNode)) {
            return $total;
        }

        return $this->backtrack($root, $total);
    }

    /**
     * @param TreeNode $node
     * @param int $total
     * @return int|mixed
     */
    private function backtrack($node, $total)
    {
        $total++;

        if ($node->left == null && $node->right == null) {
            return $total;
        }

        $leftTotal = 1;
        if ($node->left) {
            $result = $this->backtrack($node->left, $total);
            $leftTotal = $result > $total ? $result : $total;
        }

        $rightTotal = 1;
        if ($node->right) {
            $result = $this->backtrack($node->right, $total);
            $rightTotal = $result > $total ? $result : $total;
        }

        return $rightTotal > $leftTotal ? $rightTotal : $leftTotal;
    }

    /**
     * @param TreeNode $root
     * @return int
     */
    public function maxDepthIterative($root) {
        if (!($root instanceof TreeNode)) {
            return 0;
        }

        $depth = 1;
        $nextNodes = [[$root, $depth]];

        while ($nextNodes) {
            $node = $nextNodes[0][0];
            $depth = $nextNodes[0][1];
            if ($node->left) {
                $nextNodes[] = [$node->left, $depth+1];
            }
            if ($node->right) {
                $nextNodes[] = [$node->right, $depth+1];
            }
            array_splice($nextNodes, 0, 1);
        }

        return $depth;
    }
}