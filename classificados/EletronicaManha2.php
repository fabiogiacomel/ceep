<?php
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
</head>

<body>

            <?php
            echo '<table class="table table-striped">';
            echo "<thead> <tr> <th>Classificação</th><th>Nome</th><th>Pontuação</th></tr></thead><tbody>";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT nome, cast(pontuacao as unsigned integer) as pontuacao FROM inscricoesValidas WHERE valida=1 AND curso=9 AND periodo = 1 ORDER by pontuacao DESC");
                $stmt->execute();

                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $i = 1;
                foreach (new RecursiveArrayIterator($stmt->fetchAll()) as $k => $v) {
                    echo "<tr><td>$i</td><td class=\"text-uppercase\">" . $v["nome"] . "</td><td>" . $v["pontuacao"] . "</td></tr>";
                    $i++;
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
            echo "</tbody></table>";
            ?>

</body>

</html>