<?php

class Solution
{

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2)
    {
        if ($str1 . $str2 !== $str2 . $str1) {
            return '';
        }
        $len = $this->gcd(strlen($str1), strlen($str2));

        return substr($str1, 0, $len);
    }

    private function gcd($l1, $l2)
    {
        return $l2 == 0 ? $l1 : $this->gcd($l2, $l1 % $l2);
    }
}

$solution = new Solution();
echo $solution->gcdOfStrings("ABCABC", "ABC");


/*
 * Example 1:

Input: str1 = "ABCABC", str2 = "ABC"

Output: "ABC"

Example 2:

Input: str1 = "ABABAB", str2 = "ABAB"

Output: "AB"

Example 3:

Input: str1 = "LEET", str2 = "CODE"

Output: ""

Example 4:

Input: str1 = "AAAAAB", str2 = "AAA"

Output: ""
 *
 */