<?php

require "Helpers/Print.php";

class Solution {

    private int $maxNumber = 2147483648;

    /**
     * @param int $num
     * @return int
     */
    function reverseInt(int $num) {
        $sign = $num < 0 ? -1 : 1;
        
        $result = 0;

        $num = $num * $sign;
        
        while($num > 0) {
            $stringNum = (string) $num;
            $currentChar = substr($stringNum, -1);

            $result = ($result * 10) + (int) $currentChar;
            $num = (int) ($num / 10);
        }

        if (($this->maxNumber - 1) < $result || $result < ($this->maxNumber * -1)) {
            return 0;
        }

        return $result * $sign;
    }
}