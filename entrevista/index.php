<?php
$servername = "localhost";
$username = "u224722929_ceep";
$password = "UmhNWJ3AvJ4+H]Kr";
$dbname = "u224722929_ceep";

$tmp_cpf = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["cpf"])) {
    $cpfErr = "Precisa digitar o CPF";
  } else {
    $tmp_cpf = test_input($_GET["cpf"]);
	if (!preg_match("/^[0-9]+$/",$tmp_cpf)) {
      $cpfErr = "Digite apenas numeros";
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if (!empty($tmp_cpf)){
	try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM inscricoesValidas WHERE cpf LIKE $tmp_cpf AND valida=1");
                $stmt->execute();

                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                
                foreach (new RecursiveArrayIterator($stmt->fetchAll()) as $k => $v) {
                    $idInscricao 	=  $v["id"];
					$cpf 			=  $v["cpf"];
					$nome 			=  $v["nome"];
                	$curso  		=  $v["curso"];
					$periodo		=  $v["periodo"];
					$valida			=  $v["valida"];
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            

	$conn = null;
}
switch ($periodo) {
  case '1':
    $periodoNome = "Manhã";
    break;
  case '2':
    $periodoNome = "Vespertino";
    break;
  case '3':
    $periodoNome = "Noturno";
    break;
  default:
		$periodoNome = "Sem Periodo";
}

switch ($curso) {
  case '1':
    $cursoNome = "Admistração";
    break;
  case '2':
    $cursoNome = "Eletrônica";
    break;
  case '3':
    $cursoNome = "Eletromecânica";
    break;
  case '4':
    $cursoNome = "Enfermagem";
    break;
  case '6':
    $cursoNome = "Meio Ambiente";
    break;
  case '7':
    $cursoNome = "Segurança do Trabalho";
    break;		
  case '9':
    $cursoNome = "Edificações";
    break;
  case '19':
    $cursoNome = "DESENVOLVIMENTO DE SISTEMAS";
    break;
	default:
		$cursoNome = "Sem Curso";

}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CEEP</title>
<link href="../css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
	  <!-- Favicons -->
<link href="../img/favicon.gif" rel="icon">
<link href="../img/ceep-touch-icon.jpg" rel="apple-touch-icon">
</head>
<body class="container-fluid">
<header> 
	
<!-- Menu Principal -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="https://www.ceepcascavel.com.br/"><span class="l1">CEE</span><span class="l2">P</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      	<li class="nav-item active"> <a class="nav-link" href="https://www.ceepcascavel.com.br/entrevista/">Nova Entrevista<span class="sr-only">(current)</span></a> </li>
	  <!--<li class="nav-item active"> <a class="nav-link" href="#">Institucional&nbsp; <span class="sr-only">(current)</span></a> </li>-->
    </ul>
  </div>
</nav>
<br><br>
<!-- Fim Menu Principal -->	
	
</header>	

	<section>
  <div class="jumbotron text-center">
    <h1><span class="l3"> Entrevista </span><span class="l4">2022</span><span class="l3">!</span> </h1>

		<?php 
		if (empty($tmp_cpf)){
			echo '<div class="container"><div class="alert alert-success">';
		echo'<form action="https://www.ceepcascavel.com.br/entrevista/">
  		<label for="cpf"><strong>Para começar a entrevista digite o CPF:</strong></label><br><br>
  		<input class="form-control" type="number" id="cpf" name="cpf" placeholder="Digite o CPF"><br>
  		<button type="submit" class="btn btn-primary">Começar</button>
		</form>';

		}
  		?>
	</div>
	
		
   	</div>
	</div>
</section>
<section>

	
<?php if (!empty($tmp_cpf)){
			include 'FormEntrevista.php';
}?>	

</section>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap-4.4.1.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</body>
</html>
