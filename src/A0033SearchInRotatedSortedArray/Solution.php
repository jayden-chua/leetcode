<?php declare(strict_types=1);

namespace App\A0033SearchInRotatedSortedArray;

class Solution {

    private $nums;

    private $target;

    /**
     * @param $nums
     * @param $target
     * @return int
     */
    public function search($nums, $target) {
        $numSize = count($nums);

        $this->nums = $nums;
        $this->target = $target;

        $pivot = $this->findPivot(0, $numSize - 1);

        if ($this->nums[$pivot] === $this->target) {
            return $pivot;
        }

        if ($this->target < $this->nums[0]) {
            return $this->searchRange($pivot, $numSize - 1);
        }

        return $this->searchRange(0, $pivot);
    }

    /**
     * @param $left
     * @param $right
     * @return int
     */
    private function searchRange($left, $right) {
        while ($left <= $right) {
            $pivot = (int) (($left + $right) / 2);
            if ($this->nums[$pivot] === $this->target) {
                return $pivot;
            }

            if ($this->target < $this->nums[$pivot]) {
                $right = $pivot - 1;
            } else {
                $left = $pivot + 1;
            }
        }
        return -1;
    }

    /**
     * @param $left
     * @param $right
     * @return int
     */
    private function findPivot($left, $right): int {
        $pivot = 0;
        if ($this->nums[$pivot] < $this->nums[count($this->nums) - 1]) {
            return $pivot;
        }

        $pivot = (int) (($left + $right) / 2);

        while ($left <= $right) {
            if ($this->nums[$pivot] > $this->nums[$pivot+1]) {
                return $pivot + 1;
            } else {
                if ($this->nums[$pivot] < $this->nums[$left]) {
                    $right = $pivot - 1;
                } else {
                    $left = $pivot + 1;
                }
            }
        }

        return 0;
    }
}