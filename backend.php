<?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

$delta = ($b * $b) - (4 * $a * $c);

$x1 = (-$b + sqrt($delta)) / (2 * $a);
$x2 = (-$b - sqrt($delta)) / (2 * $a);


echo '<pre>';
$saida = array();
$saida['delta'] = $delta;
$saida['x1'] = $x1;
$saida['x2'] = $x2;



$valorJson = json_encode($saida);


var_dump($valorJson);


?>