<form action="salvarEntrevista.php" method="post">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="nome" id="nome" value="<?php echo $nome;?>">
    </div>
  </div>

   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">CPF</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="cpf" id="cpf" value="<?php echo $tmp_cpf;?>">
    </div>
  </div>

   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Curso</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="curso" id="curso" value="<?php echo $cursoNome;?>">
    </div>
  </div>
	
   <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Periodo</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" name="periodo" id="periodo" value="<?php echo $periodoNome;?>">
    </div>
  </div>
	
<div class="form-group">
    <label for="P1">Cite sua maior facilidade e a sua maior dificuldade nos estudos e justifique.</label>
    <textarea class="form-control" name="P1" id="P1" rows="3"></textarea>
  </div>
<div class="form-group">
    <label for="P2">Cite em ordem de preferência três profissões que você deseja exercer no futuro.</label>
    <textarea class="form-control" name="P2" id="P2" rows="3"></textarea>
  </div>
	<div class="form-group">
    <label for="P3">Cite o principal motivo de escolha deste curso.</label>
    <textarea class="form-control" name="P3" id="P3" rows="3"></textarea>
  </div>
	
		<div class="form-group">
    <label for="P4">Comente se há campo de trabalho na sua região para atuação profissional de acordo com o curso escolhido.</label>
    <textarea class="form-control" name="P4" id="P4" rows="3"></textarea>
  </div>
	
		<div class="form-group">
    <label for="P5">Cite uma empresa localizada na sua região/cidade que contrata profissionais formados na área do curso que você escolheu.</label>
    <textarea class="form-control" name="P5" id="P5" rows="3"></textarea>
  </div>
	
		<div class="form-group">
    <label for="P6">Você já conversou com algum profissional que atua na área do curso que você escolheu para saber como são as atividades desenvolvidas no dia a dia?
</label>
    <textarea class="form-control" name="P6" id="P6" rows="3"></textarea>
  </div>
	
		<div class="form-group">
    <label for="P7">O que você espera do ensino técnico para a sua formação profissional?
</label>
    <textarea class="form-control" name="P7" id="P7" rows="3"></textarea>
  </div>
	
	<div class="form-group">
    <label for="P8">Cite três contribuições que o curso escolhido poderá trazer à sua comunidade/região/cidade.</label>
    <textarea class="form-control" name="P8" id="P8" rows="3"></textarea>
  </div>
	
		<div class="form-group">
    <label for="P9">Cite as principais habilidades que você possui que poderão auxiliá-lo(a) ao longo do curso escolhido.</label>
    <textarea class="form-control" name="P9" id="P9" rows="3"></textarea>
  </div>
	
  <div class="form-group">
    <label for="P10">Diga o que você pretende fazer após término do curso técnico.</label>
    <textarea class="form-control" name="P10" id="P10" rows="3"></textarea>
  </div>
	
	  <div class="form-group">
    <label for="P11">(SOMENTE PARA ENFERMAGEM) O curso de Enfermagem tem estágio obrigatório não remunerado. Você terá disponibilidade de horário no contra turno para realizá-lo?</label>
    <textarea class="form-control" name="P11" id="P11" rows="3"></textarea>
  </div>
	<div class="form-group">
	<button type="submit" class="btn btn-primary">SALVAR </button>
		</div>
</form>	
