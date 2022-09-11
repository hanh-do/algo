<?php
class Solution {
    /**
     * @var int $k
     * @var int[] $arr
     * @return ?int[] $rotated
     */
    public function rotateArray(array $nums, int $k) {
        // array that need to rotate 
        // ------->-->
        // array after rotation
        // -->-------->
        if (empty($nums) || count($nums) < 2) {
            return null;
        }
        $n = count($nums);
        $times = $k % $n;

        // revers entire array
        // <--<--------
        $nums = $this->reverse($nums, 0, $n-1);

        // reverse the part that need rotation
        // --><---------
        $nums = $this->reverse($nums, 0, $times-1);

        // reverse the remaining part of original array back
        // -->---------->
        $nums = $this->reverse($nums, $times, $n-1);

        return $nums;
    }
    /**
     * @var int[] $nums
     * @var int $start
     * @var int $end
     * @return int[]
     */
    public function reverse(array $nums, int $start, int $end) {
        while($start < $end) {
            $tmp = $nums[$start];
            $nums[$start] = $nums[$end];
            $nums[$end] = $tmp;
            $start++;
            $end--;
        }
        return $nums;
    }
}

$solution = new Solution();
$rotatedArr = $solution->rotateArray([1,2,3,4,6,7,8], 3);
print_r($rotatedArr);