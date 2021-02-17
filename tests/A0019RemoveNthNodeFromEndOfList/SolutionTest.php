<?php declare(strict_types=1);

namespace App\A0019RemoveNthNodeFromEndOfList;
use Lib\Helper\LinkedListHelper;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[1,2,3,4,5], 2, [1,2,3,5]],
            [[1], 1, []],
            [[1,2], 1, [1]]
        ];
    }

    /**
     * @dataProvider cases
     *
     * @param array $inputArr
     * @param int $pos
     * @param array $outputArr
     */
    public function testRemoveNthFromEnd(array $inputArr, int $pos, array $outputArr) {
        $head = LinkedListHelper::createLinkedListFromArray($inputArr);
        $s = new Solution();
        $newHead = $s->removeNthFromEnd($head, $pos);
        $expectedAnswer = LinkedListHelper::createLinkedListFromArray($outputArr);
        $this->assertEquals($expectedAnswer, $newHead);
    }
}