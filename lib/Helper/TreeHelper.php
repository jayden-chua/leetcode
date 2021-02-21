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

        while (array_key_exists(2**($depth+1), $vals)) {
            $start = (2 ** ($depth+1)) - 1;
            $end = $start + (2 ** ($depth+1));
            for ($i = $start; $i < $end; $i = $i + 2) {
                $leftNode = is_null($vals[$i]) ? null : new TreeNode($vals[$i]);
                $index++;
                $map[$index] = $leftNode;

                $rightNode = is_null($vals[$i+1]) ? null : new TreeNode($vals[$i+1]);
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