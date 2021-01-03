<?php

   
    $arr = array(
        
        0 => array( 0, -4, -6, 0, -7, -6),
        1 => array(-1, -2, -6, -8, -3, -1),
        2 => array(-8, -4, -2, -8, -8, -6),
        3 => array(-3, -1, -2, -5, -7, -4),
        4 => array(-3, -5, -3, -6, -6, -6),
        5 => array(-3, -6,  0, -8, -6, -7)

    );

_echo(" Expected Output " , -19);
_echo(" Output " , hourglassSum($arr));

/**
 * hourglassSum
 *
 * @param  mixed $arr1
 * @return void
 */
function hourglassSum($arr1){
        echo $result = PHP_INT_MIN;   
        for($r=0; $r <= 3; ++$r){
            for($c=0; $c <= 3; ++$c){
                $sum = (
                        ($arr1[$r][$c] + $arr1[$r][$c+1] + $arr1[$r][$c+2]) 
                                        + ($arr1[$r+1][$c+1])
                       + ($arr1[$r+2][$c] + $arr1[$r+2][$c+1] + $arr1[$r+2][$c+2]) 
                );
                $result = max($sum , $result);
            }
        } 
        return $result;
}


/**
 * _echo
 *
 * @param  mixed $prefix
 * @param  mixed $val
 * @return void
 */
function _echo($prefix, $val){
    echo '<br> '.$prefix .' ' . $val.' <br>';
}