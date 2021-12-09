<?php


$servername = "localhost";
$username = "u224722929_ceep";
$password = "UmhNWJ3AvJ4+H]Kr";
$dbname = "u224722929_ceep";
$nota = $_POST['nota1'];
$id = $_POST['id'];

$json = file_get_contents('php://input');

var_dump($json);
$obj = json_decode($json);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
// decode the json data
$data = json_decode($json);


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