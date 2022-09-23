<?php
class Solution {
    /**
     * 
     */
    function combineLetter(string $digit) {
        $map = array(
            0 => [],
            1 => [],
            2 => ['a','b','c'],
            3 => ['d','e','f'], 
            4 => ['g','h','i'],
            5 => ['j','k','l'],
            6 => ['m','n','o'],
            7 => ['p','q','r','s'],
            8 => ['t','u','v'],
            9 => ['w','x','y','z']
        );

        $res = [];

        if ($digit == '' || strlen($digit) >= 4) {
            return $res;
        }

        $res = $map[$digit[0]]; // example: digit = 23. $res = ['a','b','c']
        for($i=1; $i < strlen($digit); $i++) {
            $temp = [];
            $chars = $map[$digit[$i]]; 
            foreach($chars as $c) { // $chars = ['d','e','f'];
                foreach($res as $r) {
                    $temp[] = $r . $c; // ad, bd, cd
                }
            }
            $res = $temp;
        }
        return $res;
    }
}

$solution = new Solution();
$combi = $solution->combineLetter('23');
print_r($combi);