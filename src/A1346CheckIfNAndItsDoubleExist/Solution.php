<?php declare(strict_types=1);

namespace App\A1346CheckIfNAndItsDoubleExist;

class Solution {
    
    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function checkIfExist($arr) {
		foreach ($arr as $i => $m) {
			foreach ($arr as $j => $n) {
				if ($i === $j) {
					continue;
				}
				if ($i * 2 === $j) {
					return true;
				}
			}
		}
		return false;
    }
}