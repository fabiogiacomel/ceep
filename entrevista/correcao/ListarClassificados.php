<?php
$servername = "localhost";
$username = "u224722929_ceep";
$password = "UmhNWJ3AvJ4+H]Kr";
$dbname = "u224722929_ceep";


if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["periodo"])) {
    $periodoErr = "ERRO 1";
  } else {
    $periodo = test_input($_GET["periodo"]);
    if (!preg_match("/^[1-9][0-9]*$/",$periodo)) {
      $periodoErr = "ERRO 2";
    }
  }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["curso"])) {
    $cursoErr = "ERRO 1";
  } else {
    $curso = test_input($_GET["curso"]);
    if (!preg_match("/^[1-9][0-9]*$/",$curso)) {
      $cursoErr = "ERRO 2";
    }
  }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["s"])) {
    $sErr = "ERRO 1";
  } else {
    $s = test_input($_GET["s"]);
    if (!preg_match("/^[1-9][0-9]*$/",$s)) {
      $sErr = "ERRO 2";
    }
  }
}
	
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


$vPeriodo 	=	 array("Sem Periodo","Matutino", "Vespertino", "Noturno");

$vCursos = array('0','Administração','Eletrônica', 'Eletromecânica','Enfermagem','Informática','Meio Ambiente',
 'Segurança do Trabalho',
  'Guia de Turismo Regional',
  'Edificações',
  'Especialização Técnica em Enfermagem do Trabalho',
  'Móveis',
  'CELEM ALEMÃO',
  'CELEM ESPANHOL',
  'CELEM INGLÊS',
  'CELEM ITELIANO',
  'CELEM MANDARIN',
  'TÉCNICO EM AGRONEGÓCIOS',
  'TÉCNICO AGRÍCOLA',
  'DESENVOLVIMENTO DE SISTEMAS');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Lista de Classificados</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-1 col-sm-1 col-md-2 col-lg-2">
                <img src="https://www.ceepcascavel.com.br/img/ceep_menor.jpg" class="img-fluid rounded"> 
            </div>
            <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10">
                <h3 class="text-left"> Lista de Classificados</h3>
                <h4 class="text-left"> Curso: Técnico em <?php echo $vCursos[$curso] ?></h4>
                <h4 class="text-left"> Periodo: <?php echo $vPeriodo[$periodo] ?></h4>
            </div>
        </div>
        </div>
        
        

        <div class="container mt-3">
		<form class="form-inline" action="salvar.php" method="post">
            <?php
            echo '<table class="table table-striped">';
            echo "<thead> <tr> 
            				<th>Classificação</th>
            				<th>Nome</th>
            				<th>CPF</th>
            				<th>ID</th>
            				<th>ENTREVISTA</th>
            				<th>Pontuação</th>
            				<th>Visualizar</th>
            			</tr></thead><tbody>";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT nome, id, cpf, cast(pontuacao as unsigned integer) as pontuacao, fonecelular, email, entrevista FROM inscricoesValidas WHERE valida=1 AND curso= :curso AND periodo = :periodo ORDER by pontuacao DESC");
				$stmt->bindParam(':curso', $curso);
  				$stmt->bindParam(':periodo', $periodo);
                $stmt->execute();

                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $i = 1;
                foreach (new RecursiveArrayIterator($stmt->fetchAll()) as $k => $v) {
                    echo "<tr>
                    			<td>$i</td><td class=\"text-uppercase\">" . $v["nome"] . "</td>
                    			<td class=\"text-uppercase\">" . $v["cpf"] . "</td>
                    			<td class=\"text-uppercase\">" . $v["id"] . "</td>
                    			<td class=\"text-uppercase\">" . $v["entrevista"] . "</td>
                    			<td>" . $v["pontuacao"] . "</td>
                    			<td> <input type=\"text\" class=\"form-control\" name=\"nota".$i."\" id=\"nota".$i."\"></td>
                    	</tr>";
                    $i++;
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
            echo "</tbody></table>";
			echo "<input class=\"form-control\" type=\"text\" value=\".$i.\" id=\"total\" readonly>
"
            ?>
	</form>
        </div>
</body>

</html>

