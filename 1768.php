<?php

class Solution
{

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2)
    {
        $i = 0;
        $result = '';

        while (isset($word1[$i]) || isset($word2[$i])) {

            if (isset($word1[$i])) {
                $result .= $word1[$i];
            }

            if (isset($word2[$i])) {
                $result .= $word2[$i];
            }

            $i++;
        }

        return $result;
    }
}

$solution = new Solution();
echo $solution->mergeAlternately("abc", "pqr");