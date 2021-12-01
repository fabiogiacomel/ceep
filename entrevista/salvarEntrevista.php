<?php
  if (empty($_POST["cpf"])) {
    $cpf = "";
  } else {
    $cpf = test_input($_POST["cpf"]);
  }

if (empty($_POST["nome"])) {
    $nome = "";
  } else {
    $nome = test_input($_POST["nome"]);
  }

if (empty($_POST["curso"])) {
    $curso = "";
  } else {
    $curso = test_input($_POST["curso"]);
  }

if (empty($_POST["periodo"])) {
    $periodo = "";
  } else {
    $periodo = test_input($_POST["periodo"]);
  }


  if (empty($_POST["P1"])) {
    $p1 = "";
  } else {
    $p1 = test_input($_POST["P1"]);
  }

  if (empty($_POST["P2"])) {
    $p2 = "";
  } else {
    $p2 = test_input($_POST["P2"]);
  }

  if (empty($_POST["P3"])) {
    $p3 = "";
  } else {
    $p3 = test_input($_POST["P3"]);
  }

  if (empty($_POST["P4"])) {
    $p4 = "";
  } else {
    $p4 = test_input($_POST["P4"]);
  }

  if (empty($_POST["P5"])) {
    $p5 = "";
  } else {
    $p5 = test_input($_POST["P5"]);
  }

  if (empty($_POST["P6"])) {
    $p6 = "";
  } else {
    $p6 = test_input($_POST["P6"]);
  }

  if (empty($_POST["P7"])) {
    $p7 = "";
  } else {
    $p7 = test_input($_POST["P7"]);
  }

  if (empty($_POST["P8"])) {
    $p8 = "";
  } else {
    $p8 = test_input($_POST["P8"]);
  }

  if (empty($_POST["P9"])) {
    $p9 = "";
  } else {
    $p9 = test_input($_POST["P9"]);
  }

  if (empty($_POST["P10"])) {
    $p10 = "";
  } else {
    $p10 = test_input($_POST["P10"]);
  }

  if (empty($_POST["P11"])) {
    $p11 = "";
  } else {
    $p11 = test_input($_POST["P11"]);
  }

echo $p1;
echo $p2;

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$servername = "localhost";
$username = "u224722929_ceep";
$password = "UmhNWJ3AvJ4+H]Kr";
$dbname = "u224722929_ceep";

	try {
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// prepare sql and bind parameters
  		$stmt = $conn->prepare("INSERT INTO tbEntrevistaRespostas (id, cpf, nome, curso, periodo, p1, p2, p3, p4, p5, p6) 
		VALUES (:id, :cpf, :nome, :curso, :periodo, :p1, :p2, :p3, :p4, :p5, p6)");
  		$stmt->bindParam(':id', $id);
  		$stmt->bindParam(':cpf', $cpf);
		$stmt->bindParam(':nome', $nome);
		$stmt->bindParam(':curso', $curso);
		$stmt->bindParam(':periodo', $periodo);
  		$stmt->bindParam(':p1', $p1);
  		$stmt->bindParam(':p2', $p2);
  		$stmt->bindParam(':p3', $p3);
  		$stmt->bindParam(':p4', $p4);
  		$stmt->bindParam(':p5', $p5);
  		$stmt->bindParam(':p6', $p6);
  		//$stmt->bindParam(':p7', $p7);
  		//$stmt->bindParam(':p8', $p8);
  		//$stmt->bindParam(':p9', $p9);
  		//$stmt->bindParam(':p10', $p10);
		//$stmt->bindParam(':p11', $p11);
		//$id = "123456789";
  		//$cpf = "123456789";
  		$stmt->execute();

  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

?>