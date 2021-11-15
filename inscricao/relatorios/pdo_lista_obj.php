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
    $result = $conn->query("SELECT inscricoesnovas.cpf AS cpf, inscricoesnovas.curso as curso FROM inscricoesnovas");
    if ($result)
    {
        // percorre os resultados via fetch()
        while ($row = $result->fetch(PDO::FETCH_OBJ))
        {
            // exibe os dados na tela, acessando o objeto retornado
            echo	  $row->cpf . ' - ' .
                      $row->curso . "<br>\n";
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