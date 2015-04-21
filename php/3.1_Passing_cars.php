<?php

/**
 * returns the number of pairs of passing cars,
 * −1 if the number of pairs of passing cars exceeds 1,000,000,000.
 * @param array $cars - zeros = east, ones = west
 * @return int
 */
function solution(array $cars) {
    if (!isset($cars[0])) {
        return 0;
    }

    $passing = $sum = 0;

    if ($cars[0] == 0) {
        for($i=0; $i<count($cars); $i++) {
            if ($cars[$i]) {
                $passing += $sum;
                if ($passing > 1000000000) {
                    return -1;
                }
            } else {
                $sum++;
            }
        }
    }

    return $passing;
}