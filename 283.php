<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums)
    {
        $pos = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] !== 0) {
                $nums[$pos] = $nums[$i];
                $pos++;
            }
        }

        while ($pos < count($nums)) {
            $nums[$pos] = 0;
            $pos++;
        }
    }

}

$solution = new Solution();
$nums = [0, 1, 0, 3, 12];

$solution->moveZeroes($nums);
var_export($nums);

/*
Example 1:

Input: nums = [0,1,0,3,12]
Output: [1,3,12,0,0]
Example 2:

Input: nums = [0]
Output: [0]
 */