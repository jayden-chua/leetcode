<?php declare(strict_types=1);

namespace App\A0200NumberOfIslands;

class Solution {

    private $grid = [];
    /**
     * @param array $grid
     * @return Integer
     */
    public function numIslandsDfs(array $grid) {
        $islands = 0;
        $this->grid = $grid;
        foreach ($this->grid as $i => $row) {
            foreach ($row as $j => $cell) {
                if ($this->grid[$i][$j] === '1') {
                    $this->grid[$i][$j] = '0';
                    $this->backtrack($i, $j);
                    $islands++;
                }
            }
        }
        return $islands;
    }

    /**
     * @param array $grid
     * @return int
     */
    public function numIslandsBfs(array $grid) {
        $islands = 0;
        $this->grid = $grid;
        foreach ($this->grid as $i => $row) {
            foreach ($row as $j => $cell) {
                $queue = [];
                if ($this->grid[$i][$j] == '1') {
                    $this->grid[$i][$j] = '0';
                    $queue[] = [$i,$j];
                    while ($queue) {
                        [$y, $x] = $queue[0];

                        if (isset($this->grid[$y-1][$x]) && $this->grid[$y-1][$x] == 1) {
                            $this->grid[$y-1][$x] = 0;
                            $queue[] = [$y-1,$x];
                        }

                        if (isset($this->grid[$y][$x+1]) && $this->grid[$y][$x+1] == 1) {
                            $this->grid[$y][$x+1] = 0;
                            $queue[] = [$y,$x+1];
                        }

                        if (isset($this->grid[$y+1][$x]) && $this->grid[$y+1][$x] == 1) {
                            $this->grid[$y+1][$x] = 0;
                            $queue[] = [$y+1,$x];
                        }

                        if (isset($this->grid[$y][$x-1]) && $this->grid[$y][$x-1] == 1) {
                            $this->grid[$y][$x-1] = 0;
                            $queue[] = [$y,$x-1];
                        }
                        array_splice($queue, 0, 1);
                    }
                    $islands++;
                }
            }
        }
        return $islands;
    }

    private function backtrack($i, $j) {
        if (isset($this->grid[$i-1][$j]) && $this->grid[$i-1][$j] == 1) {
            $this->grid[$i-1][$j] = 0;
            $this->backtrack($i-1, $j);
        }

        if (isset($this->grid[$i][$j+1]) && $this->grid[$i][$j+1] == 1) {
            $this->grid[$i][$j+1] = 0;
            $this->backtrack($i, $j+1);
        }

        if (isset($this->grid[$i+1][$j]) && $this->grid[$i+1][$j] == 1) {
            $this->grid[$i+1][$j] = 0;
            $this->backtrack($i+1, $j);
        }

        if (isset($this->grid[$i][$j-1]) && $this->grid[$i][$j-1] == 1) {
            $this->grid[$i][$j-1] = 0;
            $this->backtrack($i, $j-1);
        }
        return;
    }
}