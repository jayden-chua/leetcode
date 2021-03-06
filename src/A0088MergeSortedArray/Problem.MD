## 88. Merge Sorted Array

Given two sorted integer arrays nums1 and nums2, merge nums2 into nums1 as one sorted array.

The number of elements initialized in nums1 and nums2 are m and n respectively. You may assume that nums1 has a size equal to m + n such that it has enough space to hold additional elements from nums2.

**Example 1:**

<pre>
<b>Input:</b> nums1 = [1,2,3,0,0,0], m = 3, nums2 = [2,5,6], n = 3
<b>Output:</b> [1,2,2,3,5,6]
</pre>

**Example 2:**

<pre>
<b>Input:</b> nums1 = [1], m = 1, nums2 = [], n = 0
<b>Output:</b> [1]
</pre>

**Constraints:**

- <code>nums1.length == m + n</code>
- <code>nums2.length == n</code>
- <code>0 <= m, n <= 200</code>
- <code>1 <= m + n <= 200</code>
- <code>-10<sup>9</sup> <= nums1[i], nums2[i] <= 10<sup>9</sup></code>