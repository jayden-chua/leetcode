<?php declare(strict_types=1);

namespace App\A0146LruCache;

class Solution {

    private $capacity;

    private $keyValues = [];

    private $keyPositions = [];
    /**
     * @param Integer $capacity
     */
    function __construct($capacity) {
        $this->capacity = $capacity;
    }

    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        if (!isset($this->keyValues[$key])) {
            return -1;
        }

        $this->updatePosition($key);
        return $this->keyValues[$key];
    }

    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        if (isset($this->keyValues[$key])) {
            $this->updatePosition($key);
        } else {
            $this->keyPositions[] = $key;
        }

        $this->keyValues[$key] = $value;
        if (count($this->keyValues) > $this->capacity) {
            $this->removeOldestEntries();
        }
    }

    private function updatePosition($key) {
        $position = array_search($key, $this->keyPositions, true);
        array_splice($this->keyPositions, $position, 1);
        $this->keyPositions[] = $key;
    }

    private function removeOldestEntries() {
        $oldestKey = $this->keyPositions[0];
        unset($this->keyValues[$oldestKey]);
        array_splice($this->keyPositions, 0, 1);
    }
}

/**
 * Your LRUCache object will be instantiated and called as such:
 * $obj = LRUCache($capacity);
 * $ret_1 = $obj->get($key);
 * $obj->put($key, $value);
 */