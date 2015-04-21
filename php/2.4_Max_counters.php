<?php

/**
 * @todo improve performance
 * 
 * Score - 77%
 * Complexity - N*M
 * @param $n
 * @param array $a
 * @return array
 */
function solution($n, array $a) {
    $counters = array_fill(0, $n, 0);

    foreach($a as $b) {
        if ($b <= $n) {
            $counters[$b-1]++;
        } else if ($b == ($n+1)) {
            $counters = array_fill(0, $n, max($counters));
        } else {
            continue;
        }
    }

    return $counters;
}