<?php

/**
 * Score - 100%
 * Complexity - O(1)
 * $a <= $b, $k in [1, max int]
 * @param $a
 * @param $b
 * @param $k
 * @return int
 */
function solution($a, $b, $k)
{
    $a = $a % $k == 0 ? $a : $a + ($k - $a % $k);
    $b = $b - $a % $k;

    if ($a == $b) return 1;
    if ($a < $b) return (int)(($b - $a) / $k + 1);

    return 0;
}