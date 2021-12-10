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
  if (empty($_GET["idEnt"])) {
    $idEntErr = "ERRO 1";
  } else {
    $idEnt = test_input($_GET["idEnt"]);
    if (!preg_match("/^[1-9][0-9]*$/",$idEnt)) {
      $idEntErr = "ERRO 2";
    }
  }
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["idIns"])) {
    $idInsErr = "ERRO 1";
  } else {
    $idIns = test_input($_GET["idIns"]);
    if (!preg_match("/^[1-9][0-9]*$/",$idIns)) {
      $idInsErr = "ERRO 2";
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
    <title>Correção da Entrevista</title>
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
                <h3 class="text-left"> Correção da Entrevista</h3>
        </div>
        </div>
        </div>
        
        

        <div class="container mt-3">
		<form class="form-inline" action="salvarNotaEntrevista.php?curso=<?php $curso ?>& <?php $periodo ?>" method="post">
			<?php echo "<input class=\"form-control\" type=\"text\" value=\"".$idIns."\" id=\"idInsc\" name=\"idIns\" readonly></br>" ?>
            <?php
            echo '<table class="table table-striped">';
            echo "<thead> <tr> 
            				<th>Resposta</th>
            				<th>Nota (0 à 10) não usar . ou ,</th>
            			</tr></thead><tbody>";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM `tbEntrevistaRespostas` WHERE id= :id");
				$stmt->bindParam(':id', $idEnt);
  				$stmt->execute();

                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $i = 1;
                foreach (new RecursiveArrayIterator($stmt->fetchAll()) as $k => $v) {
                    echo "<tr><td>".$v["p1"]."</td> <td> <input class=\"form-control\" type=\"number\" id=\"nota1\" name=\"nota1\"> </td>";
                    echo "<tr><td>".$v["p2"]."</td> <td> <input class=\"form-control\" type=\"number\" id=\"nota2\" name=\"nota2\"> </td>";
                    echo "<tr><td>".$v["p3"]."</td> <td> <input class=\"form-control\" type=\"number\" id=\"nota3\" name=\"nota3\"> </td>";
                    echo "<tr><td>".$v["p4"]."</td> <td> <input class=\"form-control\" type=\"number\" id=\"nota4\" name=\"nota4\"> </td>";
                    echo "<tr><td>".$v["p5"]."</td> <td> <input class=\"form-control\" type=\"number\" id=\"nota5\" name=\"nota5\"> </td>";
                    echo "<tr><td>".$v["p6"]."</td> <td> <input class=\"form-control\" type=\"number\" id=\"nota6\" name=\"nota6\"> </td>";
                    echo "<tr><td>".$v["p7"]."</td> <td> <input class=\"form-control\" type=\"number\" id=\"nota7\" name=\"nota7\"> </td>";
                    echo "<tr><td>".$v["p8"]."</td> <td> <input class=\"form-control\" type=\"number\" id=\"nota8\" name=\"nota8\"> </td>";
                    echo "<tr><td>".$v["p9"]."</td> <td> <input class=\"form-control\" type=\"number\" id=\"nota9\" name=\"nota9\"> </td>";
                    echo "<tr><td>".$v["p10"]."</td> <td> <input class=\"form-control\" type=\"number\" id=\"nota10\" name=\"nota10\"> </td>";
                    $i++;
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
            echo "</tbody></table>";
            ?>
			  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">SALVAR</button>
    </div>
	</form>
  </div>
</body>

</html>

