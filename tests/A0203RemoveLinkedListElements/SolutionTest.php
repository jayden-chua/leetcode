<?php declare(strict_types=1);

namespace App\A0203RemoveLinkedListElements;
use PHPUnit\Framework\TestCase;
use Lib\Helper\LinkedListHelper;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [[1,2,6,3,4,5,6], 6, [1,2,3,4,5]],
            [[1], 1, []],
        ];
    }

    /**
     * @dataProvider cases
     *
     * @param $inputArr
     * @param $val
     * @param $outputArr
     */
    public function testRemoveElements($inputArr, $val, $outputArr) {
        $s = new Solution();
        $head = LinkedListHelper::createLinkedListFromArray($inputArr);
        $expectedAns = LinkedListHelper::createLinkedListFromArray($outputArr);
        $this->assertEquals($expectedAns, $s->removeElements($head, $val));
    }
}