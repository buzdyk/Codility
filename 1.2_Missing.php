<?php

/**
 * Score - 100%
 * Complexity - O(N) or O(N * log(N))
 * @param $a
 * @return int missing element
 */
function solution($a)
{
    $b = array_fill(1, count($a) + 1, false);
    for ($i = 0; $i < count($a); $i++) {
        $b[$a[$i]] = true;
    }
    return (int)array_search(false, $b);
}