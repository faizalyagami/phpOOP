<?php

function run($n, $u) {
    if ($n >= 2000000 && $n < 5000000) {
        $disc = 0.05;
    } elseif ($n >= 5000000 && $n < 10000000) {
        $disc = 0.1;
    } elseif ($n >= 10000000) {
        $disc = 0.2;
    } else {
      $disc = 0;  
    }

    $pay = $n - ($n * $disc);
    $payback = $u - $pay;

    //return ($payback >= 0) ? $payback : 0;
    if ($payback >= 0) {
        return $payback;
    } else {
        0;
    }
}

echo run(7550000, 9000000);

?>