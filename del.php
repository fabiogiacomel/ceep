<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<?php

$servername = "localhost";
$username = "u224722929_programador";
$password = "Ceep1234";
$dbname = "u224722929_projetofinal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nome, telefone, email FROM tbClientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Nome</th><th>AÇÕES</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nome"]. "</td><td> " . $row["id"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>

</body>
</html>