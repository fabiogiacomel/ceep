<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de tarefas a realizar</title>
	<link rel="stylesheet" type="text/css" href="estilo.css"/>
	<link rel="stylesheet" type="text/css" href="form.css"/>

	<style>
  /*label{width: 150px; display: inline-block;}*/
  /*label.clear{width: auto;}*/
  .aviso{background-color: yellow;}
  label.umquarto{width: 184px;}
  /*input[type="text"]{width: 500px;}*/
  /*select{width: 503px;}*/

  /*input[type="text"].meio  {width: 245px;}*/
  input[type="text"].umquarto{width: 180px; margin-right: 5px;}
  select.umquarto{width: 180px; margin-right: 5px;}
  input[type="submit"]{width: 170px; margin-left: 10px;}

	h2{text-align: center;}

</style>

<script type="text/javascript">



function valida_curso(){
	var periodo = document.form1.periodo[document.form1.periodo.selectedIndex].value;
  var serial  = document.form1.serial[document.form1.serial.selectedIndex].value;
  if (( periodo == "")||( serial == "")){
    document.getElementById('curso').length=0;
    document.getElementById('curso').options.length=0;
    document.getElementById('curso').options.add("Selecione um Curso", "");
  }

  //integrado manhÄ‚Â£
  if (serial == 1 && periodo == 1  ){
    document.getElementById('curso').length=0;
    document.getElementById('curso').options.length=0;
    document.getElementById('curso').options.add(new Option("Selecione um curso", ""));
    document.getElementById('curso').options.add(new Option("Administração", "1"));
    document.getElementById('curso').options.add(new Option("Edificações", "9"));
    document.getElementById('curso').options.add(new Option("Eletrônica", "2"));
    document.getElementById('curso').options.add(new Option("Eletromecânica", "3"));
    document.getElementById('curso').options.add(new Option("Informática", "5"));
    document.getElementById('curso').options.add(new Option("Meio Ambiente", "6"));

    /*document.getElementById('curso').options.add(new Option("Enfermagem", "4"));
    document.getElementById('curso').options.add(new Option("Guia de Turismo Regional", "8"));*/
  }

  //Integrado tarde
  if (serial == 1 &&  periodo == 2 ){
    document.getElementById('curso').length=0;
    document.getElementById('curso').options.length=0;
    document.getElementById('curso').options.add(new Option("Selecione um curso", ""));

    document.getElementById('curso').options.add(new Option("Administração", "1"));
    document.getElementById('curso').options.add(new Option("Eletrônica", "2"));
    document.getElementById('curso').options.add(new Option("Eletromecânica", "3"));
    document.getElementById('curso').options.add(new Option("Informática", "5"));
    document.getElementById('curso').options.add(new Option("Meio Ambiente", "6"));
    //document.getElementById('curso').options.add(new Option("Enfermagem", "4"));

    //document.getElementById('curso').options.add(new Option("TÄ‚Â©cnico em EdificaÄ‚Â§Ă†Â¡es", "9"));
    //document.getElementById('curso').options.add(new Option("Segurança do Trabalho", "7"));
    /*document.getElementById('curso').options.add(new Option("Guia de Turismo Regional", "8"));*/
  }


    //Integrado noite
  if (serial == 1 &&  periodo == 3 ){
    document.getElementById('curso').length=0;
    document.getElementById('curso').options.length=0;
    document.getElementById('curso').options.add(new Option("Selecione um Curso", ""));
     }

  // sub manha
  if (serial == 2 && periodo == 1 ){
    document.getElementById('curso').length=0;
    document.getElementById('curso').options.length=0;
    document.getElementById('curso').options.add(new Option("Selecione um curso", ""));
    document.getElementById('curso').options.add(new Option("Enfermagem", "4"));
  }

  //sub tarde
  if (periodo == 2 && serial == 2){
    document.getElementById('curso').length=0;
    document.getElementById('curso').options.length=0;
    document.getElementById('curso').options.add(new Option("Selecione um Curso", ""));
  }

  // sub noite
  if (periodo == 3 && serial == 2){
    document.getElementById('curso').length=0;
    document.getElementById('curso').options.length=0;
    document.getElementById('curso').options.add(new Option("Selecione um curso", ""));
    document.getElementById('curso').options.add(new Option("Administração", "1"));
    document.getElementById('curso').options.add(new Option("Edificações", "9"));
    document.getElementById('curso').options.add(new Option("Eletrônica", "2"));
    document.getElementById('curso').options.add(new Option("Eletromecânica", "3"));
    document.getElementById('curso').options.add(new Option("Enfermagem", "4"));
    document.getElementById('curso').options.add(new Option("Informática", "5"));
    document.getElementById('curso').options.add(new Option("Meio Ambiente", "6"));
    document.getElementById('curso').options.add(new Option("Segurança do Trabalho", "7"));
  }
}
 </script>

</head>
<body>
<?php
require_once "../alunoClass.php";

//Criando e Instanciando o objeto
$a = Aluno::getInstance();
$resposta = null;
$result = null;
$total = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a->__set('serial', $_POST['serial']);
    $a->__set('periodo', $_POST['periodo']);
    $a->__set('curso', $_POST['curso']);

    $result = $a->consultaPendentesByCurso();
}
?>
	<form name="form1" method="post" action="<?php $SELF_PHP;?>">
  <label class="umquarto">Modalidade:</label>
	<select class="tfield umquarto" name="serial"  onChange="valida_curso();" required>
    <option value="" selected="1">Selecione uma opção</option>
    <option value="1">Integrado</option>
    <option value="2">Subsequente</option>
  </select>

    <label class="umquarto">Período:</label>
    <select class="tfield umquarto" id="periodo" name="periodo" onChange="valida_curso();" required>
      <option value="" selected="1">Selecione um Período</option>
      <option value="1">Matutino</option>
      <option value="2">Vespertino</option>
      <option value="3">Noturno</option>
    </select>

    <label class="umquarto">Curso:</label>
    <select class="tfield umquarto" id="curso" name="curso" required>
      <option value="">Selecione o curso</option>
    </select><input type="submit" value="consultar" />


	</form>


	<?php

$cursos = array(1 => "Administração",
    2 => "Eletrônica",
    3 => "Eletromecânica",
    4 => "Enfermagem",
    5 => "Informática",
    6 => "Meio Ambiente",
    7 => "Segurança do Trabalho",
    // 8 => "Guia de Turismo Regional",
    9 => "Edificações",
);
$modalidades = array(1 => "Integrado", 2 => "Subsequente");
$periodos = array(1 => "Matutino", 2 => "Vespertino", 3 => "Noturno");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo "<h2>Relatório de alunos por curso - " .
        $cursos[$_POST['curso']] . " - " .
        $modalidades[$_POST['serial']] . " - " .
        $periodos[$_POST['periodo']];
}

?>

	<table class="table" border="0">
	<tr>
	  <th width="20%">Nome</th>
	  <th width="10%">CPF</th>
	  <!-- <th width="10%">RG</th> -->
	  <th width="10%">Fone Resid.</th>
	  <th width="10%">Fone Celuar</th>
	  <th width="10%">E-Mail</th>
	  <th width="10%">Cidade</th>
	  <!-- <th width="10%">Data Nascimento</th>         -->
	  <th width="10%">CGM</th>
	  <th width="5%">Pontuação</th>
	</tr>
	<?php

$count = 0;

//echo "<td>".$cursos[$inscricao->curso]."</td><td>".$modalidades[$inscricao->serial]."</td><td>".$periodos[$inscricao->periodo]."</td><td align='center'>nada</td></tr>";

if ($result != null) {
    foreach ($result as $inscricao) {

        $total++;
        if ($count == 0) {
            echo "<tr class='normal'>";
            $count = 1;
        } else {
            echo "<tr class='diferente'>";
            $count = 0;
        }

        echo "<td>" . $inscricao->nome .
        "<td>" . $inscricao->cpf .
        //"<td>".$inscricao->rg.
        "<td>" . $inscricao->fonecasa .
        "<td>" . $inscricao->fonecelular .
        "<td>" . $inscricao->email .
        "<td>" . $inscricao->cidade .
        //"<td>".$inscricao->datanasc.
        "<td>" . $inscricao->cgm .
        "<td>" . $inscricao->pontuacao . "</td></tr>";
    }
}

echo "<tr class='normal'><td colspan='10' align='left'>Número total de inscritos na turma: " . $total . "</td></tr></table>";
?>
