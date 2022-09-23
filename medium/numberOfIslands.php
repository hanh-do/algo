<?php
class Solution {
     /**
     * @param String[][] $grid
     * @return Integer
     */
    public function numIslands($grid) {
        if (count($grid) == 0) {
            return 0;
        }
        $count = 0;
        foreach ($grid as $i => $row) {
            foreach ($row as $j => $column) {
                if ($grid[$i][$j] == '1') {
                    $count++;
                    $this->dfs($grid, $i, $j);
                }
            }
        }
        return $count;
    }

    /**
     * @param String[][] $grid
     * @param int $i
     * @param int $j
     * @return void
     */
    public function dfs(&$grid, int $i, int $j) {
        if (
            $i < 0 ||
            $i >= count($grid) ||
            $j < 0 ||
            $j >= count($grid[0])
        ) {
            return;
        }
        if ( isset($grid[$i]) &&
            isset($grid[$i][$j]) &&
            $grid[$i][$j] !== '1') {
            return;
        }
        $grid[$i][$j] = "#"; // visited
        $this->dfs($grid, $i+1, $j); // up
        $this->dfs($grid, $i-1, $j); // down
        $this->dfs($grid, $i, $j+1); // right
        $this->dfs($grid, $i, $j-1); // left
    }
}
$solution = new Solution();
// $numIsland = $solution->numIslands([
//     ["1","1","1","1","0"],
//     ["1","1","0","1","0"],
//     ["1","1","0","0","0"],
//     ["0","0","0","0","0"]
// ]);
$numIsland = $solution->numIslands([
    ["1","1","0","0","0"],
    ["1","1","0","0","0"],
    ["0","0","1","0","0"],
    ["0","0","0","1","1"]
]);
print_r($numIsland);