<?php declare(strict_types=1);

namespace App\A0236LowestCommonAncestorOfABinaryTree;
use Lib\Helper\TreeNode;

class Solution {

    /**
     * @var null
     */
    private $answer = null;

    /**
     * @param TreeNode $root
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    public function lowestCommonAncestor(TreeNode $root, TreeNode $p, TreeNode $q) {
        $this->backtrack($root, $p, $q);
        return $this->answer;
    }

    /**
     * @param TreeNode $node
     * @param TreeNode $p
     * @param TreeNode $q
     * @return int
     */
    private function backtrack($node, $p, $q) {
        if ($node == null) {
            return 0;
        }

        $leftFound = $this->backtrack($node->left, $p, $q);

        $rightFound = $this->backtrack($node->right, $p, $q);

        $currentFound = ($node == $p || $node == $q) ? 1 : 0;

        if ($rightFound + $leftFound + $currentFound > 1) {
            $this->answer = $node;
        }

        return ($rightFound || $leftFound || $currentFound);
    }
}