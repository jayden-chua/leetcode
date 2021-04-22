## 42. Trapping Rain Water

Given `n` non-negative integers representing an elevation map where the width of each bar is `1`, compute how much water it can trap after raining.

**Example 1:**

![](img0.png)
<pre>
<b>Input:</b> height = [0,1,0,2,1,0,1,3,2,1,2,1]
<b>Output:</b> 6
<b>Explanation:</b> The above elevation map (black section) is represented by array [0,1,0,2,1,0,1,3,2,1,2,1]. In this case, 6 units of rain water (blue section) are being trapped.

</pre>

**Example 2:**

<pre>
<b>Input:</b> height = [4,2,0,3,2,5]
<b>Output:</b> 9 

</pre>

**Constraints:**
- `n == height.length`
- <code>0 <= n <= 3 * 10<sup>4</sup></code>
- <code>0 <= height[i] <= 10<sup>5</sup></code>