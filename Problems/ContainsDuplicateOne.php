<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $map = [];
        foreach($nums as $value){
            
            if(isset($map[$value])) return true;
            
            $map[$value] = true;
        }
        
        return false;
    }
}