<?php
$servername = "localhost";
$username = "u224722929_ceep";
$password = "UmhNWJ3AvJ4+H]Kr";
$dbname = "u224722929_ceep";
?>


            <?php

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM inscricoesValidas WHERE cpf LIKE '10902851918' AND valida=1");
                $stmt->execute();

                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                
                foreach (new RecursiveArrayIterator($stmt->fetchAll()) as $k => $v) {
                    $cpf =  $v["cpf"];
                
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;
            echo "</tbody></table>";
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
      	<li class="nav-item active"> <a class="nav-link" href="https://www.ceepcascavel.com.br/cursos.html">Cursos<span class="sr-only">(current)</span></a> </li>
      	<li class="nav-item active"> <a class="nav-link" href="https://www.ceepcascavel.com.br/classificados/">Classifição<span class="sr-only">(current)</span></a> </li>
	  <!--<li class="nav-item active"> <a class="nav-link" href="#">Institucional&nbsp; <span class="sr-only">(current)</span></a> </li>-->
    </ul>
  </div>
</nav>
<br><br>
<!-- Fim Menu Principal -->	
	
</header>	

	<section>
  <div class="jumbotron text-center">
    <h1 class="display-4"><span class="l3"> Entrevista </span><span class="l4">2022</span><span class="l3">!</span> </h1>
	<div class="container">
	<div class="alert alert-success">
		<form action="https://www.ceepcascavel.com.br/entrevista/entrevista.php">
  		<label for="cpf"><strong>Para começar a entrevista digite o CPF:</strong></label><br><br>
  		<!--  CPF DO CANDIDATO <span class="badge badge-pill badge-danger">Somente números</span></label>
  		<br>
		-->
  		<input class="form-control" type="number" id="cpf" name="cpf" placeholder="Digite o CPF"><br>
  		<button type="submit" class="btn btn-primary">Começar</button>
		</form>
  		
	</div>
	<hr class="my-4">
		
		
	<p class="lead"><?php echo $cpf; ?><span class="badge badge-pill badge-success">01/12/2021 18:00</span></p>
		
   	</div>
	</div>
</section>
<section>

	
	
<form>
  <div class="form-group">
    <label for="P1">Cite sua maior facilidade e a sua maior dificuldade nos estudos e justifique.</label>
    <textarea class="form-control" id="P1" rows="3"></textarea>
  </div>
<div class="form-group">
    <label for="P2">Cite em ordem de preferência três profissões que você deseja exercer no futuro.</label>
    <textarea class="form-control" id="P2" rows="3"></textarea>
  </div>
	<div class="form-group">
    <label for="P3">Cite o principal motivo de escolha deste curso.</label>
    <textarea class="form-control" id="P3" rows="3"></textarea>
  </div>
	
		<div class="form-group">
    <label for="P4">Comente se há campo de trabalho na sua região para atuação profissional de acordo com o curso escolhido.</label>
    <textarea class="form-control" id="P4" rows="3"></textarea>
  </div>
	
		<div class="form-group">
    <label for="P5">Cite uma empresa localizada na sua região/cidade que contrata profissionais formados na área do curso que você escolheu.</label>
    <textarea class="form-control" id="P5" rows="3"></textarea>
  </div>
	
		<div class="form-group">
    <label for="P6">Você já conversou com algum profissional que atua na área do curso que você escolheu para saber como são as atividades desenvolvidas no dia a dia?
</label>
    <textarea class="form-control" id="P6" rows="3"></textarea>
  </div>
	
		<div class="form-group">
    <label for="P7">O que você espera do ensino técnico para a sua formação profissional?
</label>
    <textarea class="form-control" id="P7" rows="3"></textarea>
  </div>
	
	<div class="form-group">
    <label for="P8">Cite três contribuições que o curso escolhido poderá trazer à sua comunidade/região/cidade.</label>
    <textarea class="form-control" id="P8" rows="3"></textarea>
  </div>
	
		<div class="form-group">
    <label for="P9">Cite as principais habilidades que você possui que poderão auxiliá-lo(a) ao longo do curso escolhido.</label>
    <textarea class="form-control" id="P9" rows="3"></textarea>
  </div>
	
		<div class="form-group">
    <label for="P10">Diga o que você pretende fazer após término do curso técnico.</label>
    <textarea class="form-control" id="P10" rows="3"></textarea>
  </div>
	
	
</form>	

</section>
<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap-4.4.1.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</body>
</html>