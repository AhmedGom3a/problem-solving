<?php

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        
        for($i=0; $i<strlen($haystack); $i++){
            if($haystack[$i] !== $needle[0]) continue;
            
            $k = $i;
            for($j=0; $j<strlen($needle); $j++){
                if($haystack[$k] != $needle[$j]) break;
                
                if($j+1 == strlen($needle)) return $i;
                
                $k+=1;
            }   
        }
        return -1;
    }
}
