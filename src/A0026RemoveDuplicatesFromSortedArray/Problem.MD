## 26. Remove Duplicates from Sorted Array

Given a sorted array nums, remove the duplicates in-place such that each element appears only once and returns the new length.

Do not allocate extra space for another array, you must do this by modifying the input array in-place with O(1) extra memory.

**Clarification:**

Confused why the returned value is an integer but your answer is an array?

Note that the input array is passed in by reference, which means a modification to the input array will be known to the caller as well.

Internally you can think of this:

<pre>
// <b>nums</b> is passed in by reference. (i.e., without making a copy)
int len = removeDuplicates(nums);

// any modification to <b>nums</b> in your function would be known by the caller.
// using the length returned by your function, it prints the first <b>len</b> elements.
for (int i = 0; i < len; i++) {
    print(nums[i]);
}
</pre>

**Example 1:**

<pre>
<b>Input:</b> nums = [1,1,2]
<b>Output:</b> 2, nums = [1,2]
<b>Explanation:</b> Your function should return length = 2, with the first two elements of nums being 1 and 2 respectively. It doesn't matter what you leave beyond the returned length.
</pre>

**Example 2:**

<pre>
<b>Input:</b> nums = [0,0,1,1,1,2,2,3,3,4]
<b>Output:</b> 5, nums = [0,1,2,3,4]
<b>Explanation:</b> Your function should return length = 5, with the first five elements of nums being modified to 0, 1, 2, 3, and 4 respectively. It doesn't matter what values are set beyond the returned length.
</pre>

**Constraints:**

- `0 <= nums.length <= 3 * 104`
- `104 <= nums[i] <= 104`
- `nums` is sorted in ascending order.