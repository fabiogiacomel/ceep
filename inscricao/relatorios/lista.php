<?php
       $servername = "localhost";
       $username = "u224722929_ceep";
       $password = "UmhNWJ3AvJ4+H]Kr";
       $dbname = "u224722929_ceep";
try
{
    $conn = new PDO('mysql:dbname=u224722929_ceep;user=u224722929_ceep;password=UmhNWJ3AvJ4+H]Kr;host=localhost');
//    $result = $conn->query("SELECT DISTINCT cpf FROM inscricoesValidas");
    $result = $conn->query("SELECT DISTINCT cpf, COUNT(cpf) FROM inscricoesValidas GROUP by cpf");

    if ($result)
    {
        while ($row = $result->fetch(PDO::FETCH_OBJ))
        {
        
            $r2 = $conn->query("SELECT id, cpf, COUNT(cpf) AS total FROM inscricoesValidas WHERE cpf=$row->cpf");
            if ($r2)
                {
                    while ($row = $r2->fetch(PDO::FETCH_OBJ))
                        {
                            if($row->total==1){
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
