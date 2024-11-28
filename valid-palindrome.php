<?php

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome(string $s): bool
    {
        $s = strtolower(preg_replace("/[^a-z0-9]/i", "", $s));

        return $s === strrev($s);
    }
}
