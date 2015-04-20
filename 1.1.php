<?php

/**
 * Task score - 100%
 * @param $start
 * @param $end
 * @param $step
 * @return int the minimal number of jumps from position X to a position equal to or greater than Y.
 */
function solution($start, $end, $step) {
    return (int) ceil(($end-$start)/$step);
}