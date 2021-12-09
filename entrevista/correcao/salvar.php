<?php


$servername = "localhost";
$username = "u224722929_ceep";
$password = "UmhNWJ3AvJ4+H]Kr";
$dbname = "u224722929_ceep";

/*
for($x = 1; $x <= $total; $x++) {
  echo "\"nota".$x."\",";
  
}

echo "<br>";

for($x = 1; $x <= $total; $x++) {
  echo "\"id".$x."\",";
  
}
*/

$nota = array("nota1","nota2","nota3","nota4","nota5","nota6","nota7","nota8","nota9","nota10","nota11","nota12","nota13","nota14","nota15","nota16","nota17","nota18","nota19","nota20","nota21","nota22","nota23","nota24","nota25","nota26","nota27","nota28","nota29","nota30","nota31","nota32","nota33","nota34","nota35","nota36","nota37","nota38","nota39","nota40","nota41","nota42","nota43","nota44","nota45","nota46","nota47","nota48","nota49","nota50","nota51","nota52","nota53","nota54","nota55","nota56","nota57","nota58","nota59","nota60","nota61","nota62","nota63","nota64","nota65","nota66","nota67","nota68","nota69","nota70","nota71","nota72","nota73","nota74","nota75","nota76","nota77","nota78","nota79");

$id=array("id1","id2","id3","id4","id5","id6","id7","id8","id9","id10","id11","id12","id13","id14","id15","id16","id17","id18","id19","id20","id21","id22","id23","id24","id25","id26","id27","id28","id29","id30","id31","id32","id33","id34","id35","id36","id37","id38","id39","id40","id41","id42","id43","id44","id45","id46","id47","id48","id49","id50","id51","id52","id53","id54","id55","id56","id57","id58","id59","id60","id61","id62","id63","id64","id65","id66","id67","id68","id69","id70","id71","id72","id73","id74","id75","id76","id77","id78","id79");

$total = $_POST["total"];

for($x = 1; $x <= $total; $x++) {
	
	if (!empty($_POST[$nota[$x]])) {
		echo "UPDATE inscricoesValidas SET pontuacao=".$_POST[$nota[$x]]." WHERE id=".$_POST[$id[$x]].";<br>";  
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