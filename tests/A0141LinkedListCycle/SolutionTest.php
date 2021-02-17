<?php declare(strict_types=1);

namespace App\A0141LinkedListCycle;
use Lib\Helper\ListNode;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[3,2,0,-4], 1, true],
            [[1,2], 0, true],
            [[1], -1, false]
        ];
    }

    /**
     * @dataProvider cases
     *
     * @param $heads
     * @param $pos
     * @param $expectedAnswer\
     */
    public function testHasCycle($heads, $pos, $expectedAnswer) {
        $head = $this->createLinkList($heads, $pos);

        $s = new Solution();
        $this->assertEquals($expectedAnswer, $s->hasCycle($head));
    }

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
}