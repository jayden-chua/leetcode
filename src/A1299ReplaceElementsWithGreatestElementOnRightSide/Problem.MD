## 1299. Replace Elements with Greatest Element on Right Side

Given an array `arr`, replace every element in that array with the greatest element among the elements to its right, and replace the last element with `-1`.

After doing so, return the array.

**Example 1:**

<pre>
<b>Input:</b> arr = [17,18,5,4,6,1]
<b>Output:</b> [18,6,6,6,1,-1]
<b>Explanation:</b>
- index 0 --> the greatest element to the right of index 0 is index 1 (18).
- index 1 --> the greatest element to the right of index 1 is index 4 (6).
- index 2 --> the greatest element to the right of index 2 is index 4 (6).
- index 3 --> the greatest element to the right of index 3 is index 4 (6).
- index 4 --> the greatest element to the right of index 4 is index 5 (1).
- index 5 --> there are no elements to the right of index 5, so we put -1.
</pre>

**Example 2:**

<pre>
<b>Input:</b> arr = [400]
<b>Output:</b> [-1]
<b>Explanation:</b> There are no elements to the right of index 0.

</pre>

**Constraints:**
- `1 <= arr.length <= 104`
- `1 <= arr[i] <= 105`