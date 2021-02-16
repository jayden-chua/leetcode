<?php declare(strict_types=1);

namespace App\A707DesignLinkedList;

class MyLinkedList {

    /**
     * @var MyListNode
     */
    public $head;

    /**
     * @var MyListNode
     */
    public $tail;

    private $length = 0;

    /**
     * MyLinkedList constructor.
     */
    function __construct() {
        $this->head = new MyListNode(null, null, 0);
        $this->tail = new MyListNode(null, null, 0);
        $this->head->next = $this->tail;
        $this->tail->prev = $this->head;
    }

    /**
     * Get the value of the index-th node in the linked list. If the index is invalid, return -1.
     * @param Integer $index
     * @return Integer
     */
    function get($index) {
        $node = $this->getNodeAtIndex($index);
        if ($node === -1 || $node === $this->tail) {
            return -1;
        }
        return $node->val;
    }

    /**
     * Add a node of value val before the first element of the linked list. After the insertion, the new node will be the first node of the linked list.
     * @param Integer $val
     * @return NULL
     */
    function addAtHead($val) {
        $newNode = new MyListNode($this->head->next, $this->head, $val);
        $this->head->next->prev = $newNode;
        $this->head->next = $newNode;
        $this->length++;
    }

    /**
     * Append a node of value val to the last element of the linked list.
     * @param Integer $val
     * @return NULL
     */
    function addAtTail($val) {
        $newNode = new MyListNode($this->tail, $this->tail->prev, $val);
        $this->tail->prev->next = $newNode;
        $this->tail->prev = $newNode;
        $this->length++;
    }

    /**
     * Add a node of value val before the index-th node in the linked list. If index equals to the length of linked list, the node will be appended to the end of linked list. If index is greater than the length, the node will not be inserted.
     * @param Integer $index
     * @param Integer $val
     * @return NULL
     */
    function addAtIndex($index, $val) {
        $node = $this->getNodeAtIndex($index);
        if ($node === -1) {
            return;
        }
        $newNode = new MyListNode($node, $node->prev, $val);
        $node->prev->next = $newNode;
        $node->prev = $newNode;
        $this->length++;
    }

    /**
     * Delete the index-th node in the linked list, if the index is valid.
     * @param Integer $index
     * @return NULL
     */
    function deleteAtIndex($index) {
        $node = $this->getNodeAtIndex($index);
        if ($node === -1 || $node === $this->tail) {
            return;
        }
        if ($node->next !== null) {
            $node->next->prev = $node->prev;
        }
        if ($node->prev !== null) {
            $node->prev->next = $node->next;
        }

        unset($node);
        $this->length--;
    }

    public function getNodeAtIndex($index) {
        if ($index > $this->length) {
            return -1;
        }

        $node = $this->head->next;

        while ($index >= 0) {
            if ($index === 0) {
                return $node;
            }

            $node = $node->next;
            $index--;
        }
    }

    public function printNodes()
    {
        $node = $this->head;
        $output = 's';
        $index = 0;
        while ($node->next != null) {
            $node = $node->next;
            $output .= ", [$index]:" . (string) $node->val;
            $index++;
        }
        return $output;
    }
}

/**
 * Your MyLinkedList object will be instantiated and called as such:
 * $obj = MyLinkedList();
 * $ret_1 = $obj->get($index);
 * $obj->addAtHead($val);
 * $obj->addAtTail($val);
 * $obj->addAtIndex($index, $val);
 * $obj->deleteAtIndex($index);
 */