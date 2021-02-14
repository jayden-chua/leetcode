<?php declare(strict_types=1);

namespace App\A0941ValidMountainArray;

class Solution {
    
    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function validMountainArray($arr): bool {
        if (count($arr) < 3) {
        	return false;
        }
        $increasedBefore = false;
        $decreasedBefore = false;
        $maxpoint = null;
        $prevPoint = null;
        
        foreach ($arr as $index => $curPoint) {
        	if ($index === 0) {
        		$prevPoint = $curPoint;
        		continue;	
        	}
        	$prevPoint = $arr[$index-1];
        	if ($prevPoint === $curPoint)  {
        		return false;
        	}
        	if ($curPoint > $prevPoint) {
        		if ($decreasedBefore) {
        			return false;
        		}
        		$maxpoint = $curPoint;
        		$increasedBefore = true;
        	}
        	if ($curPoint < $prevPoint) {
        		if (!$increasedBefore) {
        			return false;
        		}
        		$decreasedBefore = true;
        	}
        }
        if (!$increasedBefore || !$decreasedBefore) {
        	return false;
        }
        return true;
    }
}