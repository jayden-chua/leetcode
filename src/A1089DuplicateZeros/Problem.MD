## 1089. Duplicate Zeros

Given a fixed length array `arr` of integers, duplicate each occurrence of zero, shifting the remaining elements to the right.

Note that elements beyond the length of the original array are not written.

Do the above modifications to the input array **in place**, do not return anything from your function.

**Example 1:**

<pre>
<b>Input:</b> [1,0,2,3,0,4,5,0]
<b>Output:</b> null
<b>Explanation:</b> After calling your function, the **input** array is modified to: [1,0,0,2,3,0,0,4]
</pre>

**Example 2:**

<pre>
<b>Input:</b> [1,2,3]
<b>Output:</b> null
<b>Explanation:</b> After calling your function, the **input** array is modified to: [1,2,3]
</pre>

**Note:**

- `1 <= arr.length <= 10000`
- `0 <= arr[i] <= 9`