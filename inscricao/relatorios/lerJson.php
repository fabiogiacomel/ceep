<?php
$json_str = file_get_contents("inscricoesnovas.json");

//faz o parsing da string, criando o array "empregados"
$jsonObj = json_decode($json_str);
$inscricoes = $jsonObj->inscricoes;

//navega pelos elementos do array, imprimindo cada empregado
foreach ( $inscricoes as $i )
    {
	echo "nome: $i->nome - idade: $i->cpf - sexo: $i->curso<br>";
    }
?>