<?php

class Solution {
    
    private $romanSymbols = [
        1000 => "M",
        900 => "CM",
        500 => "D",
        400 => "CD",
        100 => "C",
        90 => "XC",
        50 => "L",
        40 => "XL",
        10 => "X",
        9 => "IX",
        5 => "V",
        4 => "IV",
        1 => "I",
    ];
    
    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {

        $result = "";
        foreach($this->romanSymbols as $value => $symbol){
            if(($num % $value) == $num) continue;

            $rem = $num % $value;
            $diff = $num - $rem;

            $count = $diff / $value;
            for($i=0; $i<$count; $i++){
                $result .= $symbol;
            }

            $num = $rem;
        }

        return $result;
    }
}