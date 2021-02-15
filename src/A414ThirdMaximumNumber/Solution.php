<?php declare(strict_types=1);

namespace App\A414ThirdMaximumNumber;

class Solution {

    private $maxes = [];

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function thirdMax($nums)
    {
        foreach ($nums as $num) {
            $this->updateMaxes($num);
        }

        if (!isset($this->maxes[2])) {
            return ($this->maxes[0]);
        }
        return isset($this->maxes[2]) ? $this->maxes[2] : $this->maxes[0];
    }

    /**
     * @param int $num
     */
    private function updateMaxes($num)
    {
        if (empty($this->maxes)) {
            $this->maxes[] = $num;
            return;
        }

        if (in_array($num, $this->maxes)) {
            return;
        }

        foreach ($this->maxes as $index => $current) {
            if ($num > $current) {
                array_splice($this->maxes, $index, 0, $num);
                if (count($this->maxes) > 3) {
                    array_pop($this->maxes);
                }
                return;
            }
        }

        if (count($this->maxes) < 3) {
            $this->maxes[] = $num;
        }
    }
}