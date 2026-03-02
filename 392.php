<?php

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t)
    {
        $arr1 = str_split($s);
        $arr2 = str_split($t);
        if (count($arr1) > count($arr2)) {
            return false;
        }
        $exists = 0;
        $pointer = 0;

        for ($i = 0; $i < count($arr2); $i++) {
            if (isset($arr1[$pointer]) && $arr1[$pointer] == $arr2[$i]) {
                $exists++;
                $pointer++;
            }
        }

        return $exists == count($arr1);
    }

}

$solution = new Solution();
//$s = "abc";
$s = "axc";
$t = "ahbgdc";

var_export($solution->isSubsequence($s, $t));

/*
Example 1:

Input: s = "abc", t = "ahbgdc"
Output: true
Example 2:

Input: s = "axc", t = "ahbgdc"
Output: false
 */