<?php declare(strict_types=1);

namespace App\A0100SameTree;
use Lib\Helper\TreeNode;

class Solution {

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    public function isSameTree($p, $q)
    {
        if ($p == null && $q == null) {
            return true;
        }

        if ($p->val !== $q->val) {
            return false;
        }

        if ($p->left == null && $p->right == null && $q->left == null && $q->right == null) {
            return true;
        }

        $same = $this->isSameTree($p->left, $q->left);

        if ($same === false) {
            return false;
        }

        $same = $this->isSameTree($p->right, $q->right);

        if ($same === false) {
            return false;
        }

        return true;
    }
}