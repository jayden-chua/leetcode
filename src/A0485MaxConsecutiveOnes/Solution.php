<?php declare(strict_types=1);

namespace App\A0485MaxConsecutiveOnes;

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function findMaxConsecutiveOnes($nums): int {
        $maxCount = 0;
        $curSeqCount = 0;
        
        foreach ($nums as $num) {
            if ($num) {
                $curSeqCount++;
            } else {
                $curSeqCount = 0;
            }
            
            if ($curSeqCount > $maxCount) {
                $maxCount = $curSeqCount;
            }
        }
        
        return $maxCount;
    }
}