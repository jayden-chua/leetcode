<?php declare(strict_types=1);

namespace App\A0142LinkedListCycle;
use Lib\Helper\ListNode;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[3,2,0,-4], 1, 'tail connects to node index 1'],
            [[1,2], 0, 'tail connects to node index 0'],
            [[1], -1, 'no cycle']
        ];
    }

    /**
     * @dataProvider cases
     *
     * @param $heads
     * @param $pos
     * @param $expectedAnswer\
     */
    public function testDetectCycle($heads, $pos, $expectedAnswer) {
        $head = $this->createLinkList($heads, $pos);

        $s = new Solution();
        $answer = $s->detectCycle($head);

        if ($answer === null) {
            $preparedAnswer = 'no cycle';
        } else {
            $index = $this->getIndexOfNode($head, $answer);
            $preparedAnswer = "tail connects to node index $index";
        }
        $this->assertEquals($expectedAnswer, $preparedAnswer);
    }

    /**
     * @param ListNode $heads
     * @param int $pos
     * @return ListNode|null
     */
    private function createLinkList($heads, $pos) {
        $head = null;
        $node = null;
        $cacheNode = null;

        $length = count($heads);

        foreach ($heads as $index => $val) {
            if ($node && $node instanceof ListNode) {
                $node->next = new ListNode($val);
                $node = $node->next;
            } else {
                $node = new ListNode($val);
            }

            if ($index + 1 === $length && $pos !== -1) {
                $node->next = $cacheNode;
            }

            if ($index === $pos) {
                $cacheNode = $node;
            }

            if ($index === 0) {
                $head = $node;
            }
        }
        return $head;
    }

    /**
     * @param ListNode $head
     * @param ListNode $node
     * @return int
     */
    private function getIndexOfNode($head, $node) {
        $currentNode = $head;
        $index = 0;
        while ($currentNode) {
            if ($currentNode === $node) {
                return $index;
            }
            $currentNode = $currentNode->next;
            $index++;
        }
    }
}