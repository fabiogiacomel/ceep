<?php


$servername = "localhost";
$username = "u224722929_ceep";
$password = "UmhNWJ3AvJ4+H]Kr";
$dbname = "u224722929_ceep";

$nota = array("nota1","nota2","nota3","nota4","nota5","nota6","nota7","nota8","nota9","nota10","nota11","nota12","nota13","nota14","nota15","nota16","nota17","nota18","nota19","nota20","nota21","nota22","nota23","nota24","nota25","nota26","nota27","nota28","nota29","nota30","nota31","nota32","nota33","nota34","nota35","nota36","nota37","nota38","nota39","nota40","nota41","nota42","nota43","nota44","nota45","nota46","nota47","nota48","nota49","nota50","nota51","nota52","nota53","nota54","nota55","nota56","nota57","nota58","nota59","nota60","nota61","nota62","nota63","nota64","nota65","nota66","nota67","nota68","nota69","nota70","nota71","nota72","nota73","nota74","nota75","nota76","nota77","nota78","nota79");


$nota = $_POST[$nota[0]];
$id0 = $_POST['id0'];


for($x = 1; $x < 80; $x++) {
  echo "\"nota".$x."\",";
  
}

echo "<br>";

for($x = 1; $x < 80; $x++) {
  echo "\"id".$x."\",";
  
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