<?php


$servername = "localhost";
$username = "u224722929_ceep";
$password = "UmhNWJ3AvJ4+H]Kr";
$dbname = "u224722929_ceep";
$nota = $_GET['nota'];
$id = $_GET['id'];

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