<?php


$servername = "localhost";
$username = "u224722929_ceep";
$password = "UmhNWJ3AvJ4+H]Kr";
$dbname = "u224722929_ceep";

$nota = array("nota", "BMW", "Toyota");
$nota1 = $_POST['nota1'];
$id0 = $_POST['id0'];


for($x = 0; $x < 99; $x++) {
  echo "\"nota".$x."\"";
  
}

echo "UPDATE inscricoesValidas SET pontuacao=".$nota." WHERE id=:".$id.";";

/*
	try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("UPDATE inscricoesValidas SET pontuacao=:p WHERE id=:id");
				$stmt->bindParam(':p', $nota);
  				$stmt->bindParam(':id', $id);
                $stmt->execute();
            
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
*/

?>