<?php

class Solution
{

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n)
    {
        $len = count($flowerbed);
        for ($i = 0; $i < $len; $i++) {

            if (
                $flowerbed[$i] == 0 &&
                ($i == 0 || $flowerbed[$i - 1] == 0) &&
                ($i == $len - 1 || $flowerbed[$i + 1] == 0)
            ) {
                $flowerbed[$i] = 1; // plant
                $n--;

                if ($n == 0) {
                    return true;
                }
            }
        }

        return $n <= 0;
    }
}

$solution = new Solution();
$flowerbed = [1, 0, 0, 0, 1];
//$n = 1;
$n = 2;
var_export($solution->canPlaceFlowers($flowerbed, $n));

/*
Example 1:

Input: flowerbed = [1,0,0,0,1], n = 1
Output: true
Example 2:

Input: flowerbed = [1,0,0,0,1], n = 2
Output: false
 */