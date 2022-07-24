<?php

class Solution
{

    /**
     * @param Integer $s
     * @return Integer
     */
    public function lengthOfLastWord($s)
    {
        $s = trim(preg_replace('/\s+/', ' ', $s));
        $last = explode(" ", $s);
        $last = array_pop($last);
        return strlen($last);
    }
}