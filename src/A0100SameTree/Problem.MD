## 100. Same Tree

Given the roots of two binary trees `p` and `q`, write a function to check if they are the same or not.

Two binary trees are considered the same if they are structurally identical, and the nodes have the same value.

**Example 1:**
![](img1.jpg)
<pre>
<b>Input:</b> p = [1,2,3], q = [1,2,3] 
<b>Output:</b> true

</pre>

**Example 2:**
![](img2.jpg)
<pre>
<b>Input:</b> p = [1,2], q = [1,null,2]
<b>Output:</b> false 

</pre>

**Example 3:**
![](img3.jpg)
<pre>
<b>Input:</b> p = [1,2,1], q = [1,1,2]
<b>Output:</b> false 

</pre>

**Constraints:**
- The number of nodes in both trees is in the range `[0, 100]`.
- `-104 <= Node.val <= 104`