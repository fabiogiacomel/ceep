<?php
$servername = "localhost";
$username = "u224722929_ceep";
$password = "UmhNWJ3AvJ4+H]Kr";
$dbname = "u224722929_ceep";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

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
			$p='0%';
    
            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT *  FROM inscricoesValidas WHERE cpf LIKE :p");
				$stmt->bindParam(':p', $p);
				
                $stmt->execute();

                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $i = 0;
                foreach (new RecursiveArrayIterator($stmt->fetchAll()) as $k => $v) {
					$r = test_input($v["cpf"]);
					$i++;
                    echo "UPDATE tbEntrevistaRespostas SET cpf=".$v["cpf"]." WHERE cpf=".$v["id"].";<br>";
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
            ?>

</body>

</html>