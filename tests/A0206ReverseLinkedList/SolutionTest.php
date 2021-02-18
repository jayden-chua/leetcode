<?php declare(strict_types=1);

namespace App\A0206ReverseLinkedList;
use Lib\Helper\LinkedListHelper;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[1,2,3,4,5], [5,4,3,2,1]],
        ];
    }

    /**
     * @dataProvider cases
     * @param array $input
     * @param array $expectedAns
     */
    public function testReverseListRecursive($input, $expectedAns) {
        $s = new Solution();
        $inputLinkedList = LinkedListHelper::createLinkedListFromArray($input);
        $output = $s->reverseListRecursive($inputLinkedList);
        $expectedOutput = LinkedListHelper::createLinkedListFromArray($expectedAns);
        $this->assertEquals($expectedOutput, $output);
    }

    /**
     * @dataProvider cases
     * @param array $input
     * @param array $expectedAns
     */
    public function testReverseListIterative($input, $expectedAns) {
        $s = new Solution();
        $inputLinkedList = LinkedListHelper::createLinkedListFromArray($input);
        $output = $s->reverseListIterative($inputLinkedList);
        $expectedOutput = LinkedListHelper::createLinkedListFromArray($expectedAns);
        $this->assertEquals($expectedOutput, $output);
    }
}