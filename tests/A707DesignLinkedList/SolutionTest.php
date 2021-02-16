<?php declare(strict_types=1);

namespace App\A707DesignLinkedList;
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    public function cases() {
        return [
            [
                ["MyLinkedList", "addAtHead", "addAtTail", "addAtIndex", "get", "deleteAtIndex", "get"],
                [[], [1], [3], [1, 2], [1], [1], [1]],
                [null, null, null, null, 2, null, 3]
            ],
            [
                ["MyLinkedList","addAtHead","addAtHead","addAtHead","addAtIndex","deleteAtIndex","addAtHead","addAtTail","get","addAtHead","addAtIndex","addAtHead"],
                [[],[7],[2],[1],[3,0],[2],[6],[4],[4],[4],[5,0],[6]],
                [null,null,null,null,null,null,null,null,4,null,null,null]
            ],
            [
                ["MyLinkedList","addAtIndex","addAtIndex","addAtIndex","get"],
                [[],[0,10],[0,20],[1,30],[0]],
                [null,null,null,null,20]
            ],
            [
                ["MyLinkedList","addAtHead","get","addAtHead","addAtHead","deleteAtIndex","addAtHead","get","get","get","addAtHead","deleteAtIndex"],
                [[],[4],[1],[1],[5],[3],[7],[3],[3],[3],[1],[4]],
                [null,null,-1,null,null,null,null,4,4,4,null,null]
            ],
            [
                ["MyLinkedList","addAtHead","addAtIndex","addAtTail","addAtTail","addAtTail","addAtIndex","addAtTail","addAtHead","deleteAtIndex","deleteAtIndex","deleteAtIndex","addAtIndex","addAtTail","get","get","addAtHead","addAtTail","addAtTail","get","addAtTail","addAtTail","deleteAtIndex","deleteAtIndex","addAtHead","addAtTail","addAtIndex","get","addAtTail","addAtIndex","addAtHead","addAtTail","addAtIndex","get","addAtHead","addAtTail","addAtIndex","addAtHead","addAtIndex","addAtTail","addAtHead","addAtIndex","addAtTail","addAtHead","deleteAtIndex","get","addAtIndex","get","addAtIndex","addAtTail","addAtTail","get","deleteAtIndex","get","addAtHead","addAtTail","addAtIndex","addAtIndex","addAtIndex","addAtHead","addAtTail","addAtIndex","deleteAtIndex","addAtHead","addAtHead","addAtTail","get","addAtTail","addAtIndex","addAtHead","deleteAtIndex","addAtHead","deleteAtIndex","get","get","addAtTail","addAtIndex","get","deleteAtIndex","deleteAtIndex","addAtHead","addAtHead","addAtIndex","get","addAtTail","addAtHead","addAtIndex","get","addAtHead","deleteAtIndex","deleteAtIndex","deleteAtIndex","addAtHead","addAtTail","get","addAtHead","addAtTail","addAtHead","addAtHead","deleteAtIndex","get","addAtHead"],
                [[],[55],[1,90],[51],[91],[12],[2,72],[17],[82],[4],[7],[7],[5,75],[54],[6],[2],[8],[35],[36],[10],[40],[43],[12],[3],[78],[89],[3,41],[10],[96],[5,37],[51],[26],[16,91],[18],[11],[66],[22,20],[44],[17,16],[95],[2],[14,2],[99],[51],[1],[11],[22,99],[20],[25,42],[72],[45],[2],[4],[32],[55],[84],[32,64],[26,14],[30,80],[88],[51],[27,71],[15],[8],[60],[37],[25],[96],[25,53],[36],[8],[85],[42],[20],[34],[78],[42,76],[26],[30],[39],[27],[93],[19,75],[8],[24],[32],[25,98],[21],[95],[18],[45],[24],[38],[8],[20],[83],[71],[78],[55],[29],[11],[84]],
                [null,null,null,null,null,null,null,null,null,null,null,null,null,null,12,90,null,null,null,35,null,null,null,null,null,null,null,54,null,null,null,null,null,96,null,null,null,null,null,null,null,null,null,null,null,91,null,43,null,null,null,11,null,-1,null,null,null,null,null,null,null,null,null,null,null,null,89,null,null,null,null,null,null,35,20,null,null,53,null,null,null,null,null,51,null,null,null,12,null,null,null,null,null,null,75,null,null,null,null,null,8,null]
            ]
        ];
    }

    /**
     * @dataProvider cases
     * @param $actions
     * @param $inputs
     * @param $expectedAnswers
     */
    public function testMyLinkedList($actions, $inputs, $expectedAnswers) {
        foreach ($actions as $index => $action) {
            if ($index === 0) {
                $obj = new MyLinkedList();
            } else {
                $this->assertEquals($expectedAnswers[$index], $obj->$action(...$inputs[$index]), "index: $index, action: $action" );
            }
        }
    }

    private function debugLinkList(MyLinkedList $obj, $action, $inputs, $index)
    {
        $inputParam0 = isset($inputs[$index][0]) ? (string) $inputs[$index][0] : '';
        $inputParam1 = isset($inputs[$index][1]) ? ',' . (string) $inputs[$index][1] : '';
        echo PHP_EOL . "$action($inputParam0$inputParam1)" . PHP_EOL;
        echo $obj->printNodes();
    }
}