<?php
class Solution {

    function isParindrome($s) {
        $s = preg_replace("/[^a-zA-Z0-9]/", "", $s);
        $s = strtolower(str_replace(' ', '', $s));
        return $s == strrev($s);
    }
}

$solution = new Solution();
$isPalindrome = $solution->isParindrome('"A man, a plan, a canal: Panama"');
print_r($isPalindrome);