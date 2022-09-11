<?php

class Solution {

    /**
     * @params int[] $nums
     * @return int $k (Count of array after duplicates had been removed)
     * Input: nums = [0,0,1,1,1,2,2,3,3,4]
     * Output: 5, nums = [0,1,2,3,4,_,_,_,_,_]
     */
    function removeDuplicates(array $nums) {
        $expectedNums = [];
        $i = 0;
        for( $j=1; $i < count($nums); $j++) {
            if ( $nums[$j] !== $nums[$i]) {
                $i++;
                $nums[$i] = $nums[$j];
            }
        }
        return count($expectedNums);
    }
}

$solution = new Solution();
$expectedNums = $solution->removeDuplicates([0,1,1,1,2,2,3,3,4]);
print_r($expectedNums);