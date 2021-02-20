## 79. Word Search

Given an `m x n` `board` and a `word`, find if the word exists in the grid.

The word can be constructed from letters of sequentially adjacent cells, where "adjacent" cells are horizontally or vertically neighboring. The same letter cell may not be used more than once.

**Example 1:**
![](img1.jpg)
<pre>
<b>Input:</b> board = [["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], word = "ABCCED"
<b>Output:</b> true

</pre>

**Example 2:**
![](img2.jpg)
<pre>
<b>Input:</b> board = [["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], word = "SEE"
<b>Output:</b> true 

</pre>

**Example 3:**
![](img3.jpg)
<pre>
<b>Input:</b> board = [["A","B","C","E"],["S","F","C","S"],["A","D","E","E"]], word = "ABCB"
<b>Output:</b> false

</pre>

**Constraints:**
- `m == board.length`
- `n = board[i].length`
- `1 <= m, n <= 200`
- `1 <= word.length <= 103`
- `board` and `word` consists only of lowercase and uppercase English letters.