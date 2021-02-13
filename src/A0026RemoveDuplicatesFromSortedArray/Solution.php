<?php declare(strict_types=1);

namespace App\A0026RemoveDuplicatesFromSortedArray;

class Solution {
    
    /**
     * @param Integer[] $nums
     * @return int
     */
    function removeDuplicates(&$nums): int {
    	$index = 0;
    	$lastValue = null;
        while ($index < count($nums)) {
        	$curValue = $nums[$index];
        	if ($curValue === $lastValue) {
        		array_splice($nums, $index, 1);
        	} else {
        		$index++;
        	}
        	$lastValue = $curValue;
        }
        return count($nums);
    }
}