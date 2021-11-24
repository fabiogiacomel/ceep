<?php
       $servername = "localhost";
       $username = "u224722929_ceep";
       $password = "UmhNWJ3AvJ4+H]Kr";
       $dbname = "u224722929_ceep";
try
{
    // instancia objeto PDO, conectando no Postgresql
    $conn = new PDO('mysql:dbname=u224722929_ceep;user=u224722929_ceep;password=UmhNWJ3AvJ4+H]Kr;host=localhost');
    
    // executa uma instru��o SQL de consulta
    $result = $conn->query("SELECT DISTINCT cpf  FROM inscricoesValidas");
    if ($result)
    {
        // percorre os resultados via fetch()
        while ($row = $result->fetch(PDO::FETCH_OBJ))
        {
            echo $row->cpf . "</br>";
        }
    }
    // fecha a conex�o
    $conn = null;
}
catch (PDOException $e)
{
    print "Erro!: " . $e->getMessage() . "<br/>";
    die();
}
?>