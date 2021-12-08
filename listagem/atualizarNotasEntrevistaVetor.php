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
			$v1 = array(1468,2422,1048,1185,572,1774,1898,434,590,281,29,1652,349,48,2654,696,43,713,44,115,1665,948,644,879,11,1260,1425,896,1234,438,2019,190,116,815,1883,963,2700,2287,2521,1005,2898,898,1194,2656,1627,291,906,2176,988,2749,1853,1437,1604,68,1740,1525);

	
			//$v2 = array(244,237,227,205,258,256,257,246,189);
	
			$arrlength = count($v1);

			for($i = 0; $i < $arrlength; $i++) {
				//echo "UPDATE inscricoesValidas SET pontuacao=".$v2[$i]." WHERE id=".$v1[$i].";<br>";
				echo "UPDATE inscricoesValidas SET entrevista=1 WHERE id=".$v1[$i].";<br>";

			}
	        ?>

</body>

</html>