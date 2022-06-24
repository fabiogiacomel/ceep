


<html>
<body>

<form action="teste.php" method="post">
Name: <input type="text" name="nome"><br>
E-mail: <input type="text" name="email"><br>
Fone: <input type="text" name="telefone"><br>
<input type="submit">
</form>

	<?php
	
$servername = "localhost";
$username = "u224722929_programador";
$password = "Ceep1234";
$dbname = "u224722929_projetofinal";
	
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO tbClientes (nome, telefone, email)
  VALUES (:nome, :telefone, :email)");
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':telefone', $telefone);
  $stmt->bindParam(':email', $email);
  

  // insert a row
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $stmt->execute();

  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

?>
</body>
</html>