<?php declare(strict_types=1);

namespace App\A0003LongestSubstringWithoutRepeatingCharacters;

class Solution {
    /**
     * @param int $s
     * @return int
     */
    public function lengthOfLongestSubstringBruteForce($s)
    {
        if (empty($s)) {
            return 0;
        }
        $strArr = str_split($s);
        $maxLength = 0;
        $accessTable = [];
        for ($i = 0; $i < count($strArr); $i++) {
            for ($j = $i; $j < count($strArr); $j++) {
                $char = ord($strArr[$j]);
                if (isset($accessTable[$char])) {
                    $maxLength = count($accessTable) > $maxLength ? count($accessTable) : $maxLength;
                    $accessTable = [];
                    break;
                } else {
                    $accessTable[$char] = $j;
                }
            }
        }
        $maxLength = count($accessTable) > $maxLength ? count($accessTable) : $maxLength;
        return $maxLength;
    }

    public function lengthOfLongestSubstringSlidingWindow($s) {
        if (empty($s)) {
            return 0;
        }
        $left = 0;
        $right = 0;
        $maxLength = 0;
        $map = [];
        $strArr = str_split($s);

        while ($right < strlen($s)) {
            $char = ord($strArr[$right]);
            if (!isset($map[$char])) {
                $map[$char] = $right;
                $right++;
            } else {
                $leftChar = ord($strArr[$left]);
                unset($map[$leftChar]);
                $left++;
            }
            $maxLength = max($maxLength, count($map));
        }

        return $maxLength;
    }

    public function lengthOfLongestSubstringSlidingWindowOptimized($s) {
        if (empty($s)) {
            return 0;
        }
        $left = 0;
        $right = 0;
        $maxLength = 0;
        $map = [];
        $strArr = str_split($s);

        while ($right < strlen($s)) {
            $char = ord($strArr[$right]);
            if (!isset($map[$char])) {
                $map[$char] = $right;
                $right++;
            } else {
                $repeatedPos = $map[$char];
                for ($i = $left; $i <= $repeatedPos; $i++) {
                    $leftChar = ord($strArr[$i]);
                    unset($map[$leftChar]);
                }
                $left = $repeatedPos + 1;
            }
            $maxLength = max($maxLength, count($map));
        }

        return $maxLength;
    }
}