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
			$v1 = array(114,350,61,951,320,521,343,1782,1043,67,714,1949,730,832,213,74,2070,1294,737,1256,1130,2248,546,2552, 1221,2780,449,2736,926,1941);
	
			$v2 = array(270,257,255,260,258,259,256,261,259,250,254,249,249,233,244,245,243,244,247,245,249,248,239,236,234,227, 217,195,202,180);
	
			$arrlength = count($v1);

			for($i = 0; $i < $arrlength; $i++) {
				echo "UPDATE inscricoesValidas SET pontuacao=$v2[$i] WHERE id=".$v1[$i].";<br>";

			}
	        ?>

</body>

</html>