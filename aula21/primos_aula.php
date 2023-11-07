<?php
 function numero_primo($posicao){
    $primos = array(2);


    $n = 3;
    while(count($primos) < $posicao){
        $e_primos = true;
        foreach($primos as $primos){
          if($n%$primo == 0){
            $e_primo = false;
          }
        }
        if ($e_primos){
            $primos[] = $n;
        }
       $n++;

    }
    if($e_primos)[$posicao - 1];
 }

 echo numero_primo(10);

?>