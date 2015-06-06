<?php

function words(array $words) {
    $nw = []; // new words

    foreach ($words as $w) {
        $length = strlen($w);
        if (!isset($nw[$length])) {
            $nw[$length] = [];
        }
        $nw[$length][] = $w;
    }

    $maxLength = max(array_keys($nw));

    if ($maxLength <= 1) {
        return 0;
    }

    $chains = $chain = [];

    // split large chain in lesser ones if needed
    for ($i=1; $i<=$maxLength; $i++) {
        if (!isset($nw[$i])) {
            if (count($chain) > 1) {
                $chains[] = $chain;
            }
            $chain = [];
            continue;
        }
        $chain[$i] = $nw[$i];
        if ($i == $maxLength) {
            if (count($chain) > 1)
                $chains[] = $chain;
        }
    }
    unset($nw); unset($chain);

    $counts = [];
    foreach ($chains as $chain) {
        $maxLength = max(array_keys($chain));
        foreach ($chain[$maxLength] as $word) {
            $counts[] = cnt($word, $chain);
        }
    }

    $max = count($counts) ? max($counts) : 0;
    if ($max) $max++;
    return $max;
}

function cnt($word, array $chain) {
    $length = strlen($word);

    $counts = [];
    if (!isset($chain[$length-1])) {
        return 0;
    }

    $words = $chain[$length-1];
    foreach ($words as $w) {
        if (levenshtein($word, $w) == 1) {
            $counts[] = 1 + cnt($w, $chain);
        } else {
            continue;
        }
    }

    return count($counts) ? max($counts) : 0;
}

$w = ['a', 'b', 'ba', 'bca', 'bda', 'bdca', 'asdfasdf', 'asdfasdf1q'];

var_dump(words($w));