<?php

class Solution {

    private $romanSymbols = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    ];
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($chars) {
        $sum = 0;

        $current = $this->romanSymbols[$chars[0]];

        for($i = 0; $i<strlen($chars); $i++)
        {
            if(!isset($chars[$i+1])){
                $sum += $current;
                return $sum;
            }

            $next = $this->romanSymbols[$chars[$i + 1]];

            if($next > $current){
                $sum -= $current;
                $current = $next;
                continue;
            }

            $sum += $current;
            $current = $next;
        }
    }
}