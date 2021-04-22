<?php declare(strict_types=1);

namespace App\A0146LruCache;

use Lib\Helper\DoublyListNode;

class Solution2 {

    private $capacity;

    private $count;

    private $start;

    private $end;

    private $list;
    /**
     * @param Integer $capacity
     */
    function __construct($capacity) {
        $this->capacity = $capacity;
        $this->start = new DoublyListNode(null);
        $this->end = new DoublyListNode(null);
        $this->start->next = $this->end;
        $this->end->prev = $this->start;
        $this->count = 0;
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        if (!isset($this->list[$key])) {
            return -1;
        }

        $this->updatePosition($key);
        return $this->list[$key]->val['value'];
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        if (isset($this->list[$key])) {
            $this->updatePosition($key);
            $this->list[$key]->val = ['key' => $key, 'value' => $value];
        } else {
            $newNode = new DoublyListNode(['key' => $key, 'value' => $value]);
            $newNode->prev = $this->end->prev;
            $newNode->next = $this->end;

            $this->end->prev->next = $newNode;
            $this->end->prev = $newNode;
            $this->list[$key] = $newNode;
            $this->count++;
        }

        if ($this->count > $this->capacity) {
            $this->removeOldestEntries();
        }
    }

    private function updatePosition($key) {
        $node = $this->list[$key];
        if ($node->next === $this->end) {
            return;
        }
        $nodePrev = $node->prev;
        $nodeNext = $node->next;

        $nodePrev->next = $node->next;
        $nodeNext->prev = $node->prev;

        $endPrev = $this->end->prev;
        $endPrev->next = $node;

        $node->prev = $endPrev;
        $node->next = $this->end;

        $this->end->prev = $node;
    }

    private function removeOldestEntries() {
        $oldestNode = $this->start->next;
        $this->start->next = $oldestNode->next;
        $oldestNode->next->prev = $this->start;
        $key = $oldestNode->val['key'];
        unset($this->list[$key]);
        unset($oldestNode);
        $this->count--;
    }
}

/**
 * Your LRUCache object will be instantiated and called as such:
 * $obj = LRUCache($capacity);
 * $ret_1 = $obj->get($key);
 * $obj->put($key, $value);
 */