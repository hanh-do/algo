<?php
class Solution {
    /**
     * Return the numeric of roman letter
     * Input 'XII' Output 12
     * Input 'III' Output 3
     * Input 'MCMXCIV' Output 1994
     * @param string $s
     * @return int $numeric
     */
    function romanToInt($s) {
        $pairs = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];
        $romanLetters = str_split($s);
        $n = count($romanLetters);
        $numeric = 0;

        for ($i = 0; $i <= $n ; $i++) {
            if($pairs[$romanLetters[$i]] < $pairs[$romanLetters[$i+1]]) {
                $numeric += ($pairs[$romanLetters[$i+1]] - $pairs[$romanLetters[$i]]);
                $i+=1;
            } else {
                $numeric += $pairs[$romanLetters[$i]];
            }
        }
        return $numeric;
    }
}