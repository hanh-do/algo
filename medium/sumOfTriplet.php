<?php
class Solution {
    /**
     * Return array of triplets whose sum equals 0. 
     * Each number of the triplet should be the value of different index
     * Input: nums = [-1,0,1,2,-1,-4]
     * Output: [[-1,-1,2],[-1,0,1]]
     * @var int[]
     * @return array
     */
    function sumOfTriplet(array $nums) {
        sort($nums);
        $n = count($nums);
        $triplets = [];

        for($i = 0; $i < $n-2; $i++) {
            if (
                ($i > 0) &&
                ($nums[$i] == $nums[$i-1])) { // avoid duplicates
                break;
            }
            // run the checking from left to right side
            $left = $i + 1;
            $right = $n - 1;
            while ($left < $right) {
                $currentSum =
                $nums[$i] + $nums[$left] + $nums[$right];

                if ($currentSum > 0) {
                    // Move the right pointer to toward the left side to reduce sum
                    $right -=1;
                } elseif ($currentSum < 0) {
                    // Move the left pointer to toward the right side to incease sum
                    $left += 1;
                } else {
                    $triplet = [$nums[$i], $nums[$left], $nums[$right]];
                    array_push($triplets, $triplet);
                    while (
                        ($left < $right) &&
                        ($nums[$left] == $nums[$left+1])) {
                        $left +=1;
                    }
                    while (
                        ($left < $right) &&
                        ($nums[$right] == $nums[$right-1])) {
                        $right -=1;
                    }
                    $left ++;
                    $right --;
                }
            }
        }
        return $triplets;
    }
}

$solution = new Solution();
$triplet = $solution->sumOfTriplet([-1,0,1,2,-1,-4]);
print_r($triplet);