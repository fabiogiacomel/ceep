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
			$v1 = array(2634,973,1365,2042,1966,143,1319,1878,2731,780,425,22,1607,1390,2036,943,2114,2468,86,2242,968,1615,1813,1020, 1486,1391);
	
			$v2 = array(87,235,248,216,246,274,266,217,244,246,239,251,252,255,257,250,252,253,241,243,269,255,225,241, 209,254);
	
			$arrlength = count($v1);

			for($i = 0; $i < $arrlength; $i++) {
				echo "UPDATE inscricoesValidas SET entrevista=1 WHERE id=".$v1[$i].";<br>";

			}
	        ?>

</body>

</html>