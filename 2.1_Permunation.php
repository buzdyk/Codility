<?php

/**
 * @todo improve perfomance, fails on large numbers
 * Score - 90%
 * Complexity - O(N) or O(N * log(N))
 * Checks if the array is permutation
 * @param array $a
 * @return int
 */
function solution(array $a) {
    if (count($a) == 1 && $a[0] != 1) {
        return 0;
    }

    $b = array_fill(1, max($a), 0);
    for ($i = 0; $i < count($a); $i++) {
        $b[$a[$i]]++;
        if ($b[$a[$i]] > 1) {
            return 0;
        }
    }

    return array_search(0, $b) === false ? 1 : 0;
}