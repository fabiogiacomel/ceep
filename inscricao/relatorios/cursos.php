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

        <h2>Inscrições por dia</h2>
        <?php
        $sql1 = 'SELECT DATE_FORMAT(inscricoesValidas.datainsc,\'%d/%m/%Y\') AS Data, COUNT(inscricoesValidas.cpf) as Quantidade FROM inscricoesValidas GROUP BY inscricoesValidas.datainsc';

        echo '<table class="table table-striped">';
        echo "<thead> <tr><th>Data</th><th>Quantidade</th></tr></thead><tbody>";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare($sql1);
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
       <h2>Quantidade Total por Curso.</h2>
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

        <h2>Quantidade total de Inscritos Integrado MANHA.</h2>
        <?php
        echo '<table class="table table-striped">';
        echo "<thead> <tr><th>Curso</th><th>Inscritos</th></tr></thead><tbody>";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM InscritosIntegradoM");
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

        <h2>Quantidade total de Inscritos Integrado TARDE.</h2>
        <?php
        echo '<table class="table table-striped">';
        echo "<thead> <tr><th>Curso</th><th>Inscritos</th></tr></thead><tbody>";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM InscritosIntegradoT");
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

        <h2>Quantidade total de Inscritos Subsequente MANHÃ.</h2>
        <?php
        echo '<table class="table table-striped">';
        echo "<thead> <tr><th>Curso</th><th>Inscritos</th></tr></thead><tbody>";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM InscritosSubM");
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

        <h2>Quantidade total de Inscritos Subsequente NOITE</h2>
        <?php
        echo '<table class="table table-striped">';
        echo "<thead> <tr><th>Curso</th><th>Inscritos</th></tr></thead><tbody>";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM InscritosSubN");
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


    </div>
</body>

</html>