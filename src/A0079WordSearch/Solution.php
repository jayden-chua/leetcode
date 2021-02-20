<?php declare(strict_types=1);

namespace App\A0079WordSearch;

class Solution {

    private $board;

    /**
     * @param String[][] $board
     * @param String $word
     * @return Boolean
     */
    public function exist($board, $word) {
        $this->board = $board;
        $totalLength = count($board[0]) * count($board);
        if (strlen($word) > $totalLength) {
            return false;
        }
        foreach ($board as $i => $row) {
            foreach ($row as $j => $cell) {
                $found = $this->backtrack($cell, $word, [$this->getCellIndex([$i, $j]) => $cell], [$i, $j]);
                if ($found) {
                    return true;
                }
            }
        }
        return false;
    }

    private function backtrack($cachedWord, $searchWord, $prevCells, $cell) {
        if ($cachedWord === $searchWord) {
            return true;
        }

        if ($cachedWord != substr($searchWord, 0, strlen($cachedWord))) {
            return false;
        }

        $nextCells = $this->getAdjCells($cell);

        foreach ($nextCells as $nextCell) {
            $cellIndex = $this->getCellIndex($nextCell);
            if (!isset($prevCells[$cellIndex])) {
                $prevCells[$cellIndex] = $nextCell;
                $cachedWord .= $this->board[$nextCell[0]][$nextCell[1]];
                $found = $this->backtrack($cachedWord, $searchWord, $prevCells, $nextCell);
                if ($found) {
                    return $found;
                }
                $cachedWord = substr($cachedWord, 0, strlen($cachedWord) - 1);
                unset($prevCells[$cellIndex]);
            }
        }

        return false;
    }

    private function getAdjCells($cell) {
        $board = $this->board;
        $adjCells = [];
        if (isset($board[$cell[0] - 1][$cell[1]])) $adjCells[] = [$cell[0] - 1, $cell[1]];
        if (isset($board[$cell[0]][$cell[1] + 1])) $adjCells[] = [$cell[0], $cell[1] + 1];
        if (isset($board[$cell[0] + 1][$cell[1]])) $adjCells[] = [$cell[0] + 1, $cell[1]];
        if (isset($board[$cell[0]][$cell[1] - 1])) $adjCells[] = [$cell[0], $cell[1] - 1];
        return $adjCells;
    }

    private function getCellIndex($cell) {
        $rowLength = count($this->board[0]);
        return $rowLength * $cell[0] + $cell[1] + 1;
    }
}