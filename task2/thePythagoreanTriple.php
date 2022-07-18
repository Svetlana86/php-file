<?php

/*
* function thePythagoreanTriple()
* returns true or false the Pythagorean Triple
*/
function thePythagoreanTriple($a, $b, $c)
{
    $maxNumber = 0;
    $sumSqrtMinNumber = 0;
    if ($a>$b && $a>$c){
        $maxNumber = $a**2;
        $sumSqrtMinNumber = $b**2 + $c**2;
    }
    else { 
        if ($b>$c){
            $maxNumber = $b**2; 
            $sumSqrtMinNumber = $a**2 + $c**2;
        }    
        else {
            $maxNumber = $c**2;
            $sumSqrtMinNumber = $b**2 + $a**2;
        }
    } 
    if ($maxNumber==$sumSqrtMinNumber) return true;
    else return false;
    }