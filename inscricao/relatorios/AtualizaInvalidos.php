<?php
       $servername = "localhost";
       $username = "u224722929_ceep";
       $password = "UmhNWJ3AvJ4+H]Kr";
       $dbname = "u224722929_ceep";
try
{
    $conn = new PDO('mysql:dbname=u224722929_ceep;user=u224722929_ceep;password=UmhNWJ3AvJ4+H]Kr;host=localhost');
//    $result = $conn->query("SELECT DISTINCT cpf FROM inscricoesValidas");

    //Selecionar todas as linhas da tabela InscricoesInvalidas
    $result = $conn->query("SELECT * FROM InscricoesInvalidas ORDER BY InscricoesInvalidas.cpf, InscricoesInvalidas.id DESC");

    if ($result)
    {
        while ($row = $result->fetch(PDO::FETCH_OBJ))
        {
            //Selecionar o CPF que é marcado como inscrição invalida
            $r2 = $conn->query("SELECT id, cpf, COUNT(cpf) AS total FROM inscricoesValidas WHERE cpf=$row->cpf");
            $i=0;
            if ($r2)
                {   
                    //Pegar só o primeiro resultado da consulta
                    while ($row = $r2->fetch(PDO::FETCH_OBJ))
                        {
                            if($i==0){
                                $i = 1; // Faz o update apenas para a primeira seleção
                                echo $row->id . " : ";
                                echo $row->cpf . " : "; 
                                echo $row->total . "</br>";
                                $r3 = $conn->query("UPDATE inscricoesValidas SET inscricoesValidas.valida=1 WHERE inscricoesValidas.id=$row->id");
                            }
                        }
                }
        }
    }
    $conn = null;
}
catch (PDOException $e)
{
    print "Erro!: " . $e->getMessage() . "<br/>";
    die();
}
