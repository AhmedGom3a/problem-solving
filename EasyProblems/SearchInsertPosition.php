<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function searchInsert($nums, $target) {
        $left = 0;
        $right = count($nums) -1;
        return $this->recursiveBinarySearch($nums, $target, $left, $right);
    }

    private function recursiveBinarySearch($searchArray, $target, $left, $right, $mid = 0){
        if($left > $right){
            return $mid;
        }
        
        $mid = $left + (int) (($right - $left) / 2);
        if($searchArray[$mid] == $target) {
            return $mid;
        }

        if($left == $right){
            $mid = $target > $searchArray[$mid]? $mid + 1 : $mid;
            return $mid;
        }

        if($searchArray[$mid] > $target) return $this->recursiveBinarySearch($searchArray, $target, $left, $mid - 1, $mid);

        if($searchArray[$mid] < $target) return $this->recursiveBinarySearch($searchArray, $target, $mid + 1, $right, $mid);
    }
}