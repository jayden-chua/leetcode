<?php declare(strict_types=1);

namespace App\A0017LetterCombinationsOfAPhoneNumber;

class Solution {

    const TEL_MAP = [
        '2' => ['a', 'b', 'c'],
        '3' => ['d', 'e', 'f'],
        '4' => ['g', 'h', 'i'],
        '5' => ['j', 'k', 'l'],
        '6' => ['m', 'n', 'o'],
        '7' => ['p', 'q', 'r', 's'],
        '8' => ['t', 'u', 'v'],
        '9' => ['w', 'x', 'y', 'z']
    ];

    /**
     * @param String $digits
     * @return array
     */
    function letterCombinations($digits) {
        if (empty($digits)) {
            return [];
        }

        if (strlen($digits) === 1) {
            return self::TEL_MAP[$digits[0]];
        }

        $returnArr = [];
        foreach ($this->letterCombinations(substr($digits, 1)) as $letters) {
            foreach (self::TEL_MAP[$digits[0]] as $currentLetters) {
                $returnArr[] = $currentLetters.$letters;
            }
        }

        return $returnArr;
    }
}