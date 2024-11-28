<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram(string $s, string $t): bool
    {
        if (strlen($s) !== strlen($t)) {
            return false;
        }

        $sCount = count_chars($s, 1);
        $tCount = count_chars($t, 1);

        return $sCount === $tCount;
    }
}
