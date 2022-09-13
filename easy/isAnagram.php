<?php
class Solution {
    /**
     * @param string $s
     * @param string $t
     * @return bool
     */
    function isAnagram(string $s, string $t) {
        if ( strlen($s) != strlen($t) ) {
            return false;
        }
        $sArr = str_split($s);
        $tArr = str_split($t);

        sort($sArr);
        sort($tArr);
        return $sArr == $tArr;
    }

}

class OtherSolution {
    /**
     * @param string $s
     * @param string $t
     * @return bool
     */
    function isAnagram(string $s, string $t) {
        if ( strlen($s) != strlen($t) ) {
            return false;
        }
        $alpha = range('a', 'z');
        foreach($alpha as $letter) {
            if ( (substr_count($s, $letter) != substr_count($t, $letter))) {
                return false;
            }
        }
        return true;
    }

}