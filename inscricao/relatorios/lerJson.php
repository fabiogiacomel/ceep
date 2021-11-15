<?php
$json = file_get_contents("inscricoesnovas.json");

$arr = json_decode($json, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}

?>