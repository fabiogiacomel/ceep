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

$nota = array("nota1","nota2","nota3","nota4","nota5","nota6","nota7","nota8","nota9","nota10");

for($i = 0; $i <= 9; $i++) {
	$notaFinal = $_POST[$nota[$i]] + $notaFinal; 
}
echo "1.0";
echo $notaFinal;

for($x = 1; $x <= 10; $x++) {
	
	if (!empty($_POST[$nota[$x]])) {
		//echo "UPDATE inscricoesValidas SET pontuacao=".$_POST[$nota[$x]]."+inscricoesValidas.pontuacao WHERE id=".$_POST[$id[$x]].";<br>";  
	}
}


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