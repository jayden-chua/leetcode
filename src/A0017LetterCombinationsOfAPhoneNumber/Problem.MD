## 17. Letter Combinations of a Phone Number

Given a string containing digits from `2-9` inclusive, return all possible letter combinations that the number could represent. Return the answer in **any order**.

A mapping of digit to letters (just like on the telephone buttons) is given below. Note that 1 does not map to any letters.

![](img0.png)

**Example 1:**

<pre>
<b>Input:</b> digits = "23"
<b>Output:</b> ["ad","ae","af","bd","be","bf","cd","ce","cf"]

</pre>

**Example 2:**

<pre>
<b>Input:</b> digits = ""
<b>Output:</b> [] 

</pre>

**Example 3:**

<pre>
<b>Input:</b> digits = "2"
<b>Output:</b> ["a","b","c"]

</pre>

**Constraints:**
- `0 <= digits.length <= 4`
- `digits[i]` is a digit in the range `['2', '9']`.
