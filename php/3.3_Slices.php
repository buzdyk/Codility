<?php

/**
 * @todo rethink, it takes in consideration slices of 2 elements only
 * @param array $a
 * @return mixed
 */
function solution(array $a)
{
    $slices = [];
    for ($i = 0; $i < count($a) - 1; $i++) {
        $slices[$i] = ($a[$i] + $a[$i - 1]) / 2;
    }

    return array_search(min($slices), $slices);
}
