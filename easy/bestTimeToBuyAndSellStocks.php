<?php
class Solution {
    /**
     * Choose a single day to buy one stock and choosing a different day 
     * in the future to sell that stock. Sell day must be future of buy day.
     * Return 0 in case of no profit
     * Input: prices = [7,1,5,3,6,4] Output: 5
     * Input: prices = [7,6,4,3,1] Output: 0
     * @param int[] $prices
     * @return int $maxProfit
     */
    function maxProfit($prices) {
        $maxProfit = 0;
        $minPrice = $prices[0];

        foreach ($prices as $price) {
            $minPrice = min($price, $minPrice);
            $currentProfit = $price - $minPrice;
            $maxProfit = max($currentProfit, $maxProfit);
        }
        return $maxProfit;
    }
}