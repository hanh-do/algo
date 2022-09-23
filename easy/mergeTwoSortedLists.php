<?php
 class ListNode {
     public $val = 0;
     public $next = null;
     function __construct($val = 0, $next = null) {
         $this->val = $val;
         $this->next = $next;
     }
 }
class Solution {
    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists(ListNode $list1, ListNode $list2) {
        if ($list1 == null) {
            return $list2;
        }
        if ($list2 == null) {
            return $list1;
        }
        
        $dummy = new ListNode(0);
        $cur = $dummy;
        
        while ($list1 != null && $list2 != null) {
            
            if ($list1->val < $list2->val) {
                $cur->next = $list1;
                $list1 = $list1->next;
            } else {
                $cur->next = $list2;
                $list2 = $list2->next;
            }
            $cur = $cur->next;
        }
        
        if ($list1 != null) {
            $cur->next = $list1;
        }elseif($list2 != null) {
            $cur->next = $list2;
        }
        return $dummy->next;
    }
}