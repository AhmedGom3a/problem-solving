<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Boolean
     */
    public function isPalindrome($x)
    {
        $x = (string) $x;
        
        $length = strlen($x);

        $even = ($length % 2) == 0;

        $splitLength = ((int) $length/2);
        $left = substr($x, 0, $splitLength);
        $right = substr($x, $splitLength, $splitLength);

        if(!$even){
            $right = substr($x, $splitLength+1, $splitLength);
        }

        $right = strrev($right);

        return $right == $left;
    }
}
