<?php
class Solution {
    /**
     * Given an array of integers nums and an integer target,
     * return indices of the two numbers such that they add up to target.
     * Input: nums = [2,7,11,15], target = 9
     * Output: [0,1]
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function twoSum(array $nums, int $target) {
        $n = count($nums);
        for ($i=0; $i < $n; $i++) { 
            for($j=$n-1; $j > $i; $j--) {
                if(($nums[$i] + $nums[$j]) == $target) {
                    return [$i, $j];
                }
            }
        }
        return [];
    }
}