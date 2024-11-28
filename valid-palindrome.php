<?php

class Solution {
    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome(string $string): bool
    {
        $stringClear = strtolower(preg_replace("/[^a-z0-9]/i", "", $string));

        return $stringClear === strrev($stringClear);
    }
}

