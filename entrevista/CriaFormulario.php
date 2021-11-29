<?php
/*
class Conexao extends PDO {

private  $host     = "mysql:host=localhost;dbname=u224722929_ceep"; //String de conexão
//private  $host     = "mysql:host=localhost;dbname=backup_ceep_03_11_19"; //String de conexão

private  $user     = "u224722929_ceep"; //usuário do banco de dados (root por padrão)
//private  $user     = "root"; //usuário do banco de dados (root por padrão)

private  $pass = "UmhNWJ3AvJ4+H]Kr";     //senha   do banco de dados (nula por padrão)    
//private  $pass = "root";     //senha   do banco de dados (nula por padrão)    

  public function __construct() {
      try {
          //require_once("erro.class.php");
          parent::__construct($this->host, $this->user, $this->pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
          parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          //parent::setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,'SET NAMES UTF8');
      }catch(PDOException $e) {
        echo $e->getMessage();
      }
  }
}
*/

$Perguntas = '{"P1":"Cite sua maior facilidade e a sua maior dificuldade nos estudos e justifique. ",
			 "P2":"Cite em ordem de preferência três profissões que você deseja exercer no futuro.",
			 "P3":"Cite o principal motivo de escolha deste curso.",
			 "P4":"Comente se há campo de trabalho na sua região para atuação profissional de acordo com o curso escolhido.",
			 "P5":"Cite uma empresa localizada na sua região/cidade que contrata profissionais formados na área do curso que você escolheu.",
			 "P6":"Você já conversou com algum profissional que atua na área do curso que você escolheu para saber como são as atividades desenvolvidas no dia a dia?",
			 "P7":"O que você espera do ensino técnico para a sua formação profissional?",
			 "P8":"Cite três contribuições que o curso escolhido poderá trazer à sua comunidade, região, cidade.",
			 "P9":"Cite as principais habilidades que você possui que poderão auxiliá-lo(a) ao longo do curso escolhido.",
			 "P10":"Diga o que você pretende fazer após  término do curso técnico."}';

$perguntas = json_decode($Perguntas);

echo $perguntas->P1;

/*
<form>
	<div class="form-group">
    <label for="formGroupExampleInput">Example label</label>
    <input type="text" class="form-control" id="formGroupExampleInput"></div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Another label</label>
    <input type="text" class="form-control" id="formGroupExampleInput2"></div>
</form>
*/

?>