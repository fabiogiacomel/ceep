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
    <title>Relatório das Inscrições</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <!--*************************************************************************************-->

        <h2>Total de Inscrições</h2>
        <?php
        echo '<table class="table">';
        echo "<thead> <tr><th>Total de Inscrições</th><th>Inscrições Válidas</th></tr></thead><tbody>";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT COUNT(inscricoesnovas.cpf) AS Todas, COUNT(DISTINCT inscricoesnovas.cpf) AS Validas FROM inscricoesnovas");
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

        <!--*************************************************************************************-->
       <h2>Quantidade Total por Curso.</h2>
       <p> Incluida as invalidas</p>
        <?php
        echo '<table class="table table-striped">';
        echo "<thead> <tr><th>Curso</th><th>Inscritos</th></tr></thead><tbody>";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM InscritosCurso");
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


        <!--*************************************************************************************-->

        <h2>Quantidade total de Inscritos Integrado.</h2>
        <p> Incluida as invalidas</p>
        <?php
        echo '<table class="table table-striped">';
        echo "<thead> <tr><th>Curso</th><th>Inscritos</th></tr></thead><tbody>";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM InscritosIntegrado");
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

        <!--*************************************************************************************-->


        <!--*************************************************************************************-->



        <h2>Quantidade total de Inscritos Subsequente.</h2>
        <p> Incluida as invalidas</p>
        <?php
        echo '<table class="table table-striped">';
        echo "<thead> <tr><th>Curso</th><th>Inscritos</th></tr></thead><tbody>";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM InscritosSub");
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