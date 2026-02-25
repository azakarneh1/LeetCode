<?php

class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s)
    {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $letters = str_split($s);
        $left = 0;
        $right = count($letters) - 1;

        while ($left < $right) {

            while ($left < $right && !in_array($letters[$left], $vowels)) {
                $left++;
            }

            while ($right > $left && !in_array($letters[$right], $vowels)) {
                $right--;
            }

            $temp_value = $letters[$left];
            $letters[$left] = $letters[$right];
            $letters[$right] = $temp_value;
            $left++;
            $right--;
        }

        return implode("", $letters);
    }
}

$solution = new Solution();
$s = "IceCreAm";
//$s = "leetcode";
var_export($solution->reverseVowels($s));

/*
Example 1:

Input: s = "IceCreAm"

Output: "AceCreIm"

Explanation:

The vowels in s are ['I', 'e', 'e', 'A']. On reversing the vowels, s becomes "AceCreIm".

Example 2:

Input: s = "leetcode"

Output: "leotcede"
 */