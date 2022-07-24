<?php

class Solution
{
    private $map = [];
    /**
     * @param Integer $n
     * @return Integer
     */
    function fib($n) {
        if ($n === 0 || $n === 1) return $n;
        
        if (!isset($this->map[$n-1])){
            $this->map[$n-1] = $this->fib($n - 1);
        }
        
        if (!isset($this->map[$n-2])){
            $this->map[$n-2] = $this->fib($n - 2);
        }
        return $this->map[$n-1] + $this->map[$n-2];
    }
}