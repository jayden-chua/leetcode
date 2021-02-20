<?php declare(strict_types=1);

namespace Lib\Helper;

class TreeHelper
{
    /**
     * @param array $vals
     * @return TreeNode|null
     */
    public static function createTreeFromArray(array $vals) {
        if (empty($vals)) {
            return null;
        }
        $map = [];
        $depth = 0;
        $parent = 0;
        $index = 0;
        $map[$index] = new TreeNode($vals[0]);

        while (isset($vals[2**($depth+1)])) {
            $start = (2 ** ($depth+1)) - 1;
            $end = $start + (2 ** ($depth+1));

            for ($i = $start; $i < $end; $i = $i + 2) {
                $leftNode = new TreeNode($vals[$i]);
                $rightNode = new TreeNode($vals[$i+1]);
                $index++;
                $map[$index] = $leftNode;
                $index++;
                $map[$index] = $rightNode;
                $map[$parent]->left = $leftNode;
                $map[$parent]->right = $rightNode;
                $parent++;
            }

            $depth++;
        }

        return $map[0];
    }
}