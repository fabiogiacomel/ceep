<?php
$json = file_get_contents("inscricoesnovas.json");

$arr = json_decode($json, true);

foreach($arr as $key => $value) {
    foreach($value as $inscrito => $campo)
        echo $inscrito . " => " . $campo . "<br>";
}

?>