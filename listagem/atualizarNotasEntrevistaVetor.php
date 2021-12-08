<?php
$servername = "localhost";
$username = "u224722929_ceep";
$password = "UmhNWJ3AvJ4+H]Kr";
$dbname = "u224722929_ceep";
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
        <?php
			$v1 = array(38,246,25,2588,1360,1188,1360,225,1115,1145,1982,1094,1840,461,2531,35,1131,1916,2102,894,57, 1096,57,262,1197);
	
			$v2 = array(273,278,273,259,249,239,259,258,246,264,253,253,263,262,262,242,261,259,248,248,226,226,236, 246,243);
	
			$arrlength = count($v1);

			for($i = 0; $i < $arrlength; $i++) {
				echo "UPDATE inscricoesValidas SET pontuacao=".$v2[$i]." WHERE id=".$v1[$i].";<br>";
				echo "UPDATE inscricoesValidas SET entrevista=1 WHERE id=".$v1[$i].";<br>";

			}
	        ?>

</body>

</html>