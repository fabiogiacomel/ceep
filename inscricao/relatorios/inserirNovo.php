<?php

try {
    $conn = new PDO('mysql:dbname=u224722929_ceep;user=u224722929_ceep;password=UmhNWJ3AvJ4+H]Kr;host=localhost');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $json_str = file_get_contents("inscricoesnovas.json");

    //faz o parsing da string, criando o array
    $jsonObj = json_decode($json_str);
    $inscricoes = $jsonObj->inscricoes;

    //navega pelos elementos do array, imprimindo cada posição
    foreach ($inscricoes as $i) {
        $sql = "INSERT INTO inscricoesValidas (id, nome) VALUES (NULL, $i->nome)";
        // use exec() because no results are returned
        $conn->exec($sql);
        //echo "nome: $i->nome - idade: $i->cpf - sexo: $i->curso<br>";
    }

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
