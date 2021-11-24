<?php
       $servername = "localhost";
       $username = "u224722929_ceep";
       $password = "UmhNWJ3AvJ4+H]Kr";
       $dbname = "u224722929_ceep";
try
{
    $conn = new PDO('mysql:dbname=u224722929_ceep;user=u224722929_ceep;password=UmhNWJ3AvJ4+H]Kr;host=localhost');
    $result = $conn->query("SELECT DISTINCT cpf FROM inscricoesValidas");
    if ($result)
    {
        while ($row = $result->fetch(PDO::FETCH_OBJ))
        {
        
            $r2 = $conn->query("SELECT DISTINCT COUNT(cpf) AS total FROM inscricoesValidas WHERE cpf=$row->cpf");
            if ($r2)
                {
                    while ($row = $r2->fetch(PDO::FETCH_OBJ))
                        {
                            echo $row->total . "</br>";
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
