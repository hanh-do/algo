<?php
class Solution {
    /**
     * Input: s = "()"
     * Output: true
     * Input: s = "(]"
     * Output: false
     * Input: s = "[()]"
     * Output: true
     * @param string $s
     * @return bool $isValid
     */
    function validParenthesis(string $s) {
        $stack = [];
        $characters = str_split($s);

        if (count($characters) % 2 !== 0) {
            return false;
        }

        foreach($characters as $c) {
            if ($c === '(') {
                array_push($stack, ')');
            }
            elseif (($c === '[')) {
                array_push($stack, ']');
            }
            elseif (($c === '{')) {
                array_push($stack, '}');
            }
            elseif (empty($stack) || array_pop($stack) != $c) {
                return false;
            }
        }
        return empty($stack);
    }
}