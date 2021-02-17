## 414. Third Maximum Number

Given integer array `nums`, return the third maximum number in this array. If the third maximum does not exist, return the maximum number.

**Example 1:**

<pre>
<b>Input:</b> nums = [3,2,1]
<b>Output:</b> 1
<b>Explanation:</b> The third maximum is 1.
</pre>

**Example 2:**

<pre>
<b>Input:</b> nums = [1,2]
<b>Output:</b> 2
<b>Explanation:</b> The third maximum does not exist, so the maximum (2) is returned instead.
</pre>

**Example 3:**

<pre>
<b>Input:</b> nums = [2,2,3,1]
<b>Output:</b> 1
<b>Explanation:</b> Note that the third maximum here means the third maximum distinct number.
Both numbers with value 2 are both considered as second maximum.
</pre>

**Constraints:**
- `1 <= nums.length <= 104`
- `-231 <= nums[i] <= 231 - 1`