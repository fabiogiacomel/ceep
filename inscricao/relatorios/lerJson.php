<?php
$json = file_get_contents("inscricoesnovas.json");

$arr = json_decode($json, true);

$inscrito = $arr->inscricoes;

foreach($inscrito as $key => $value) {
        echo $key . " => " . $value . "<br>";
}

?>