## 200. Number of Islands

Given an `m x n` 2d `grid` map of '`1`'s (land) and '0's (water), return the _number of islands_.

An **island** is surrounded by water and is formed by connecting adjacent lands horizontally or vertically. You may assume all four edges of the grid are all surrounded by water.

**Example 1:**

<pre>
<b>Input:</b> grid = [
    ["1","1","1","1","0"],
    ["1","1","0","1","0"],
    ["1","1","0","0","0"],
    ["0","0","0","0","0"]
]
<b>Output:</b> 1

</pre>

**Example 2:**

<pre>
<b>Input:</b> grid = [
    ["1","1","0","0","0"],
    ["1","1","0","0","0"],
    ["0","0","1","0","0"],
    ["0","0","0","1","1"]
]
<b>Output:</b> 3 

</pre>

**Constraints:**
- `m == grid.length`
- `n == grid[i].length`
- `1 <= m, n <= 300`
- `grid[i][j]` is '`0`' or '`1`'.