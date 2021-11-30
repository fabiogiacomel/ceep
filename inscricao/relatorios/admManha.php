<?php
       class TableRows extends RecursiveIteratorIterator
       {
           function __construct($it)
           {
               parent::__construct($it, self::LEAVES_ONLY);
           }

           function current()
           {
               return "<td>" . parent::current() . "</td>";
           }

           function beginChildren()
           {
               echo "<tr>";
           }

           function endChildren()
           {
               echo "</tr>" . "\n";
           }
       }

       $servername = "localhost";
       $username = "u224722929_ceep";
       $password = "UmhNWJ3AvJ4+H]Kr";
       $dbname = "u224722929_ceep";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Lista de Classificados</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <!--*************************************************************************************-->

        <?php
        echo '<table class="table">';
        echo "<thead> <tr><th>Nome</th><th>Pontuação</th></tr></thead><tbody>";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT nome, cast(pontuacao as unsigned integer) as pontuacao FROM inscricoesValidas WHERE valida=1 AND curso=1 AND periodo = 1 ORDER by pontuacao DESC LIMIT 80");
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

            foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
                echo $v;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
        echo "</tbody></table>";
        ?>

    </div>
</body>

</html>