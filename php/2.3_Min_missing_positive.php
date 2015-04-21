<?php

/**
 * Returns the minimal positive integer that does not occur in array
 * Score - 100%
 * Complexity - O(N)
 * @param array $a
 * @return int
 */
function solution(array $a)
{
    $b = array_flip($a);

    for ($i = 1; $i < 2147483647; $i++) {
        if (!isset($b[$i])) {
            return $i;
        }
    }

    return 1;
}