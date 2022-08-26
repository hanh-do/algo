<?php
class Solution {
    /**
     * Given an integer array nums, 
     * return an array answer such that answer[i] is equal to the product of all the elements
     * of nums except nums[i].
     * Input: nums = [1,2,3,4]
     * Output: [24,12,8,6]
     * @param int[] $nums
     * @return int[] $result
     */
    function productExceptSelf(array $nums) {
        $n = count($nums);
        $result = [];
        $leftTmp = 1;
        $rightTmp = 1;
        for ($i=0; $i < $n; $i++) {
            $result[$i] = $leftTmp;
            $leftTmp *= $nums[$i];
        }
        for($j=($n-1); $j >= 0; $j--) {
            $result[$j] *= $rightTmp;
            $rightTmp *= $nums[$j];
        }
        return $result;
    }
}