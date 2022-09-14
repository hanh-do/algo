<?php
class Solution {
    /**
     * @param string $s
     * @return string $reversed
     */
    function reverse(string $s) {
        $s = explode(" ", $s);
        $reversed = [];
        foreach ($s as $word) {
            $reversed[] = strrev($word);
        }
        return join(" ", $reversed);
    }
}
$solution = new Solution();
$reversed = $solution->reverse("Let's take LeetCode contest");
print_r($reversed);
