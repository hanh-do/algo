<?php
class Solution {
    /**
     * @param string $s
     * @param string $t
     * @return bool
     */
    function isIsomorphic(string $s, string $t) {
        if ( strlen($s) != strlen($t) ) {
            return false;
        }
        
        $s = str_split($s);
        $t = str_split($t);
        $n = count($s);
        
        // create a new map to store each letter with its corresponse {'a' => 'e'}
        $smap = [];
        $tmap = [];
        
        for($i=0; $i<$n; $i++) {
            $schar = $s[$i];
            $tchar = $t[$i];
            
            if ( !isset($smap[$schar]) && !isset($tmap[$tchar])) {
                $smap[$schar] = $tchar;
                $tmap[$tchar] = $schar;
            } else {
                if ($smap[$schar] != $tchar && $tmap[$tchar] != $schar) {
                    return false;
                }
            }
        }
        return true;
    }
}