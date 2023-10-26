<?php

function fibonacci($a){
    $sequencia = array();
    $sequencia[0] = 1;
    $sequencia[1] = 1;

    for($i = 2; $i < $a; $i++){
        $sequencia[$i] = $sequencia[$i-1];
    }

    return $sequencia[$a-1];
}

echo fibonacci(2);

?>