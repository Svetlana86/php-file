<?php

/*
* function gcd()
* returns gcd two number
*/
function gcd($a, $b)
{
    if ($a == 0 || $b == 0)
        return abs( max(abs($a), abs($b)) );
       
    $r = $a % $b;
    return ($r != 0) ? gcd($b, $r) : abs($b);
}