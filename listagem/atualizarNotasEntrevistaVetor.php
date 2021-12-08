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
			$v1 = array(1221,2780,449,2736,993,448,734,1727,136);
	
			$v2 = array(244,237,227,205,258,256,257,246,189);
	
			$arrlength = count($v1);

			for($i = 0; $i < $arrlength; $i++) {
				echo "UPDATE inscricoesValidas SET pontuacao=".$v2[$i]." WHERE id=".$v1[$i].";<br>";
				echo "UPDATE inscricoesValidas SET entrevista=1 WHERE id=".$v1[$i].";<br>";

			}
	        ?>

</body>

</html>