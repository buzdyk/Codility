<?php

/**
 * Score - 100%
 * Complexity - O(N)
 * @param array $a
 * @return mixed abs of minimal difference between sum of chunks that can be achieved
 */
function solution(array $a) {
    $count = count($a);

    $sums = [0 => $a[0]];
    $sums_r = [];
    $sums_r[$count-1] = $a[$count-1];

    for ($i=1; $i<count($a); $i++) {
        $sums[$i] = $sums[$i-1] + $a[$i];
        $sums_r[$count-$i-1] = $sums_r[$count-$i] + $a[$count-$i-1];
    }
    $diffs = [];

    for ($i=1; $i<$count; $i++) {
        $diffs[] = abs($sums[$i-1] - $sums_r[$i]);
    }

    return min($diffs);
}