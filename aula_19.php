<?php
$a = 10;

do{
    echo $a."<br/>";
       $a++
}while($a < 20);

$lista = array(1,4,7,8,10);
echo "<br/><br/><br/>";
foreach($lista as $posicao ==> $item){
    echo $posicao." - ".$item."<br/>"
}
?>