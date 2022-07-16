<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $findings = [];
        
        foreach($nums as $index => $currentIteration){
            
            $diff = $target - $currentIteration;
            
            if(isset($findings["$diff"])){
                return [$index, $findings["$diff"]];
            }
            
            $findings["$currentIteration"] = $index;            
        }
    }
}