<?php

$servername = "localhost";
$username = "u224722929_ceep";
$password = "UmhNWJ3AvJ4+H]Kr";
$dbname = "u224722929_ceep";

/*
for($x = 1; $x <= 120; $x++) {
  echo "\"nota".$x."\",";
  
}

echo "<br>";

for($x = 1; $x <= 120; $x++) {
  echo "\"id".$x."\",";
  
}
*/
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["idIns"])) {
    $idInsErr = "ERRO 1";
  } else {
    $idIns = test_input($_POST["idIns"]);
    if (!preg_match("/^[1-9][0-9]*$/",$idIns)) {
      $idInsErr = "ERRO 2";
    }
  }
}


$nota = array("nota1","nota2","nota3","nota4","nota5","nota6","nota7","nota8","nota9","nota10");

for($i = 0; $i <= 9; $i++) {
	$notaFinal = $_POST[$nota[$i]] + $notaFinal; 
}
echo $idIns;
echo $notaFinal;


	try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("UPDATE inscricoesValidas SET nota=:p WHERE id=:id");
				$stmt->bindParam(':n', $notaFinal);
  				$stmt->bindParam(':id', $idIns);
                $stmt->execute();
            
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;

?>