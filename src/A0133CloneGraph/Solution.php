<?php declare(strict_types=1);

namespace App\A0133CloneGraph;

use Lib\Helper\Node;

class Solution {

    private $visitedNodes = [];

    /**
     * @param Node $node
     * @return Node
     */
    public function cloneGraphDfs($node) {
        if (!($node instanceof Node)) {
            return $node;
        }

        if (isset($this->visitedNodes[spl_object_hash($node)])) {
            return $this->visitedNodes[spl_object_hash($node)];
        }

        $cloneNode = new Node($node->val, []);

        $this->visitedNodes[spl_object_hash($node)] = $cloneNode;

        foreach ($node->neighbors as $neighbor) {
            $cloneNode->neighbors[] = $this->cloneGraphDfs($neighbor);
        }

        return $cloneNode;
    }

    public function cloneGraphBfs($node) {
        if (!($node instanceof Node)) {
            return $node;
        }

        $nodesToProcess = [];
        $nodesToProcess[] = $node;
        $cloneNode = new Node($node->val);
        $this->visitedNodes[spl_object_hash($node)] = $cloneNode;

        while ($nodesToProcess) {
            $node = $nodesToProcess[0];

            foreach ($node->neighbors as $neighbor) {
                if (!isset($this->visitedNodes[spl_object_hash($neighbor)])) {
                    $this->visitedNodes[spl_object_hash($neighbor)] = new Node($neighbor->val);
                    $nodesToProcess[] = $neighbor;
                }
                $this->visitedNodes[spl_object_hash($node)]->neighbors[] = $this->visitedNodes[spl_object_hash($neighbor)];
            }

            array_splice($nodesToProcess, 0, 1);
        }

        return $cloneNode;
    }
}