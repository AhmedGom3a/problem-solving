<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $last = array_pop($digits);
        
        if ($last == 9){
            $zeros = 0;
            while($last == 9){
                $zeros += 1;
                $last = array_pop($digits);
            }

            if(!$last) $last = 0;

            $digits [] = $last + 1;

            while($zeros > 0){
                $zeros -= 1;
                $digits [] = 0;
            }

            return $digits;
        }

        $digits [] = $last + 1;
        return $digits;
    }
}