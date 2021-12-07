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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

        
        

            <?php
			$v1 = array(45,67,90,79,72,86,80,72,77,79,67,65,69,35,66,75,87,86,79,96,55,68);
	
    
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT DISTINCT a.id, a.cpf FROM inscricoesValidas as a, tbEntrevistaRespostas as b WHERE a.cpf=b.cpf AND a.curso=9 AND a.periodo=1 AND a.valida=1 ORDER BY a.pontuacao DESC");
                $stmt->execute();

                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $i = 1;
                foreach (new RecursiveArrayIterator($stmt->fetchAll()) as $k => $v) {
					$r = $v["pontuacao"] + $v1[$i];
					$i++;
                    echo "UPDATE inscricoesValidas SET pontuacao=$r WHERE id=".$v["id"].";";
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
            ?>

</body>

</html>