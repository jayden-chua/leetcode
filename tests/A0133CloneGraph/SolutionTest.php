<?php declare(strict_types=1);

namespace App\A0133CloneGraph;
use Lib\Helper\Node;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[[2,4],[1,3],[2,4],[1,3]]],
            [[]],
            [[[2], [1]]]
        ];
    }

    /**
     * @dataProvider cases
     * @param array $input
     */
    public function testCloneGraphDfs($input) {
        $s = new Solution();
        $node = $this->createGraph($input);
        $this->assertEquals($node, $s->cloneGraphDfs($node));
    }

    /**
     * @dataProvider cases
     * @param array $input
     */
    public function testCloneGraphBfs($input) {
        $s = new Solution();
        $node = $this->createGraph($input);
        $this->assertEquals($node, $s->cloneGraphBfs($node));
    }

    /**
     * @param $nodes
     * @return mixed|null
     */
    private function createGraph($nodes) {
        if (empty($nodes)) {
            return null;
        }
        $createdNodes = [];

        foreach ($nodes as $index => $neighbors) {
            if (!isset($createdNodes[$index+1])) {
                $createdNodes[$index+1] = new Node($index+1);
            }
            $newNode = $createdNodes[$index+1];

            foreach ($neighbors as $neighbor) {

                if (!isset($createdNodes[$neighbor])) {
                    $createdNodes[$neighbor] = new Node($neighbor);
                }
                $newNode->neighbors[] = $createdNodes[$neighbor];
            }
        }
        return $createdNodes[1];
    }
}