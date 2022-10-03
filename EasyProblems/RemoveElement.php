<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $countOfOccurances = 0;
        $lastOccurancePosition = -1;

        for($i = 0; $i< count($nums); $i++){

            if($nums[$i] != $val && $nums[$i] != "*" && $lastOccurancePosition == -1){
                continue;
            }

            if(($nums[$i] == $val || $nums[$i] == "*") && $lastOccurancePosition != -1){
                if($nums[$i] == $val){
                    $nums[$i] = "*";
                    $countOfOccurances += 1;
                }

                continue;
            }

            if(($nums[$i] == $val || $nums[$i] == "*") && $lastOccurancePosition == -1){
                if($nums[$i] == $val){
                    $nums[$i] = "*";
                    $countOfOccurances += 1;
                }

                $lastOccurancePosition = $i;
                continue;
            }

            $temp = $nums[$i];
            $nums[$i] = $nums[$lastOccurancePosition];
            $nums[$lastOccurancePosition] = $temp;
            $i = $lastOccurancePosition;
            $lastOccurancePosition = -1;
        }
        return count($nums) - $countOfOccurances;
    }
}