<?php

class Solution {

    private $dividers = [
        3 => "Fizz",
        5 => "Buzz"
    ];

    function fizzBuzz($n) {
        $output = [];
        for ($i = 1; $i <= $n; $i++){
            $res = "";

            foreach($this->dividers as $key => $divider){
                if($i % $key == 0) $res .= $divider;
            }

            $output [] = $res == ""? "$i" : $res;
        }

        return $output;
    }
}