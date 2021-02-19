<?php declare(strict_types=1);

namespace App\A0022GenerateParentheses;

class Solution {

    private $curValidBrackets = '';

    private $count = 0;

    private $validBrackets = [];
    /**
     * @param Integer $n
     * @return array
     */
    function generateParenthesis($n) {
        $this->count = $n;
        $openBrackets = 0;
        $closedBrackets = 0;

        $this->addValidBrackets($openBrackets, $closedBrackets);

        return $this->validBrackets;
    }

    function addValidBrackets($openBrackets, $closedBrackets) {

        if ($openBrackets === $closedBrackets && $closedBrackets === $this->count ) {
            $this->validBrackets[] = $this->curValidBrackets;
            return;
        }

        if ($openBrackets < $this->count) {
            $this->curValidBrackets .= '(';
            $this->addValidBrackets($openBrackets+1, $closedBrackets);
            $this->curValidBrackets = substr($this->curValidBrackets, 0, -1);
        }

        if ($closedBrackets < $openBrackets) {
            $this->curValidBrackets .= ')';
            $this->addValidBrackets($openBrackets, $closedBrackets+1);
            $this->curValidBrackets = substr($this->curValidBrackets, 0, -1);
        }
    }
}