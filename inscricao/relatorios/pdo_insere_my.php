<?php
try
{
    // instancia objeto PDO, conectando no mysql
    $conn = new PDO('mysql:dbname=u224722929_ceep;user=u224722929_ceep;password=UmhNWJ3AvJ4+H]Kr;host=localhost');
    
  $dados = array(
        array('id' => '0','nome' => 'Solimar Moreira Machado Just','nome_mae' => 'SOLENI MARIA MOREIRA MACHADO JUST','escola_origem' => 'COLÉGIO ESTADUAL WILSON JOFFRE','escola_origem_cidade' => 'CASCAVEL','escola_origem_estado' => 'PR','pontuacao' => '165','rg' => '65618788','fonecasa' => '(45) 98836-6975','fonecelular' => '(45) 98836-6975','fonecomercial' => NULL,'fonerecado' => NULL,'email' => 'solymarjust@gmail.com','bairro' => 'PARQUE VERDE','cidade' => 'CASCAVEL','curso' => '4','curso2' => NULL,'periodo' => '3','periodo2' => NULL,'serial' => '2','ensinofundamental' => NULL,'ensinomedio' => '1','cpf' => '01840319909','datainsc' => '2021-11-08','dataalteracao' => NULL,'horainsc' => '07:48:19','abandono' => '0','medio1' => NULL,'medio2' => NULL,'medio3' => NULL,'maiorport' => '80.00','maiormat' => '80.00','maiorqui' => NULL,'maiorbio' => NULL,'renda' => NULL,'comprovante_renda' => NULL,'tentativas' => NULL,'cursosfeitos' => NULL,'auxiliarenf' => NULL,'trabalhaarea' => NULL,'uf' => NULL,'dddcasa' => NULL,'dddcelular' => NULL,'dddcomercial' => NULL,'dddrecado' => NULL,'nomerecado' => NULL,'datanasc' => '18061975','rua' => 'SALGUEIRO','num_casa' => '95','cgm' => '','concordo' => '0','instituicao_formacao' => '0','trabalha_area' => NULL,'tipo_necessidade' => '0','bolsa_familia' => '2','matematica_n1' => NULL,'matematica_n2' => NULL,'matematica_n3' => NULL,'matematica_n4' => NULL,'portugues_n1' => NULL,'portugues_n2' => NULL,'portugues_n3' => NULL,'portugues_n4' => NULL,'quimica_n1' => NULL,'quimica_n2' => NULL,'quimica_n3' => NULL,'quimica_n4' => NULL,'biologia_n1' => NULL,'biologia_n2' => NULL,'biologia_n3' => NULL,'biologia_n4' => NULL,'nis' => NULL,'rg_data_expedicao' => '2004-03-04','pontuacao_curso2' => '85','valida' => '0'),
        array('id' => '0','nome' => 'TRAUDI MARLICI KUHN','nome_mae' => 'joana','escola_origem' => 'metropolitano','escola_origem_cidade' => 'cascavel','escola_origem_estado' => 'PR','pontuacao' => '81.5','rg' => '5558461','fonecasa' => '(21) 21553','fonecelular' => '(45) 55598-63','fonecomercial' => NULL,'fonerecado' => NULL,'email' => 'traudima@hotmail.com','bairro' => '','cidade' => '','curso' => '4','curso2' => NULL,'periodo' => '1','periodo2' => NULL,'serial' => '2','ensinofundamental' => '4','ensinomedio' => NULL,'cpf' => '46293639987','datainsc' => '2021-11-08','dataalteracao' => NULL,'horainsc' => '07:57:56','abandono' => '0','medio1' => NULL,'medio2' => NULL,'medio3' => NULL,'maiorport' => '52.00','maiormat' => '51.00','maiorqui' => NULL,'maiorbio' => NULL,'renda' => NULL,'comprovante_renda' => NULL,'tentativas' => NULL,'cursosfeitos' => NULL,'auxiliarenf' => NULL,'trabalhaarea' => NULL,'uf' => NULL,'dddcasa' => NULL,'dddcelular' => NULL,'dddcomercial' => NULL,'dddrecado' => NULL,'nomerecado' => NULL,'datanasc' => '11/11/1961','rua' => '','num_casa' => '','cgm' => '45','concordo' => '0','instituicao_formacao' => '0','trabalha_area' => NULL,'tipo_necessidade' => '0','bolsa_familia' => '2','matematica_n1' => NULL,'matematica_n2' => NULL,'matematica_n3' => NULL,'matematica_n4' => NULL,'portugues_n1' => NULL,'portugues_n2' => NULL,'portugues_n3' => NULL,'portugues_n4' => NULL,'quimica_n1' => NULL,'quimica_n2' => NULL,'quimica_n3' => NULL,'quimica_n4' => NULL,'biologia_n1' => NULL,'biologia_n2' => NULL,'biologia_n3' => NULL,'biologia_n4' => NULL,'nis' => NULL,'rg_data_expedicao' => '2016-02-02','pontuacao_curso2' => '81.5','valida' => '0'),
        array('id' => '0','nome' => 'NEIDE MARINA MONTANGER BARCO','nome_mae' => 'APARECIDA PARLATO MONTANGER','escola_origem' => 'COLÉGIO ESTADUAL ANTONIO CARLOS GOMES','escola_origem_cidade' => 'TERRA ROXA','escola_origem_estado' => 'PR','pontuacao' => '176.5','rg' => '47426111','fonecasa' => '(45) 99900-1060','fonecelular' => '(45) 99900-1060','fonecomercial' => NULL,'fonerecado' => NULL,'email' => 'neidemontanger@nrecascavel.com','bairro' => 'Coqueiral','cidade' => 'Cascavel','curso' => '7','curso2' => NULL,'periodo' => '3','periodo2' => NULL,'serial' => '2','ensinofundamental' => '1','ensinomedio' => NULL,'cpf' => '77955072987','datainsc' => '2021-11-08','dataalteracao' => NULL,'horainsc' => '08:07:43','abandono' => '0','medio1' => NULL,'medio2' => NULL,'medio3' => NULL,'maiorport' => '85.00','maiormat' => '98.00','maiorqui' => NULL,'maiorbio' => NULL,'renda' => NULL,'comprovante_renda' => NULL,'tentativas' => NULL,'cursosfeitos' => NULL,'auxiliarenf' => NULL,'trabalhaarea' => NULL,'uf' => NULL,'dddcasa' => NULL,'dddcelular' => NULL,'dddcomercial' => NULL,'dddrecado' => NULL,'nomerecado' => NULL,'datanasc' => '10/03/1972','rua' => 'Francisco Bartinik','num_casa' => '1947','cgm' => '100258425','concordo' => '0','instituicao_formacao' => '0','trabalha_area' => NULL,'tipo_necessidade' => '0','bolsa_familia' => '2','matematica_n1' => NULL,'matematica_n2' => NULL,'matematica_n3' => NULL,'matematica_n4' => NULL,'portugues_n1' => NULL,'portugues_n2' => NULL,'portugues_n3' => NULL,'portugues_n4' => NULL,'quimica_n1' => NULL,'quimica_n2' => NULL,'quimica_n3' => NULL,'quimica_n4' => NULL,'biologia_n1' => NULL,'biologia_n2' => NULL,'biologia_n3' => NULL,'biologia_n4' => NULL,'nis' => NULL,'rg_data_expedicao' => '2018-03-20','pontuacao_curso2' => '176.5','valida' => '0'),
        array('id' => '0','nome' => 'NEIDE MARINA MONTANGER BARCO','nome_mae' => 'APARECIDA PARLATO MONTANGER','escola_origem' => 'COLÉGIO ESTADUAL ANTONIO CARLOS GOMES','escola_origem_cidade' => 'TERRA ROXA','escola_origem_estado' => 'PR','pontuacao' => '176.5','rg' => '47426111','fonecasa' => '(45) 99900-1060','fonecelular' => '(45) 99900-1060','fonecomercial' => NULL,'fonerecado' => NULL,'email' => 'neidemontanger@nrecascavel.com','bairro' => 'Coqueiral','cidade' => 'Cascavel','curso' => '1','curso2' => NULL,'periodo' => '1','periodo2' => NULL,'serial' => '1','ensinofundamental' => '1','ensinomedio' => NULL,'cpf' => '77955072987','datainsc' => '2021-11-08','dataalteracao' => NULL,'horainsc' => '09:03:56','abandono' => '0','medio1' => NULL,'medio2' => NULL,'medio3' => NULL,'maiorport' => '85.00','maiormat' => '98.00','maiorqui' => NULL,'maiorbio' => NULL,'renda' => NULL,'comprovante_renda' => NULL,'tentativas' => NULL,'cursosfeitos' => NULL,'auxiliarenf' => NULL,'trabalhaarea' => NULL,'uf' => NULL,'dddcasa' => NULL,'dddcelular' => NULL,'dddcomercial' => NULL,'dddrecado' => NULL,'nomerecado' => NULL,'datanasc' => '10/03/1972','rua' => 'Francisco Bartinik','num_casa' => '1947','cgm' => '100258425','concordo' => '0','instituicao_formacao' => '0','trabalha_area' => NULL,'tipo_necessidade' => '0','bolsa_familia' => '2','matematica_n1' => NULL,'matematica_n2' => NULL,'matematica_n3' => NULL,'matematica_n4' => NULL,'portugues_n1' => NULL,'portugues_n2' => NULL,'portugues_n3' => NULL,'portugues_n4' => NULL,'quimica_n1' => NULL,'quimica_n2' => NULL,'quimica_n3' => NULL,'quimica_n4' => NULL,'biologia_n1' => NULL,'biologia_n2' => NULL,'biologia_n3' => NULL,'biologia_n4' => NULL,'nis' => NULL,'rg_data_expedicao' => '2018-03-20','pontuacao_curso2' => '176.5','valida' => '0'),
        array('id' => '0','nome' => 'TRAUDI MARLICI KUHN','nome_mae' => 'joana','escola_origem' => 'metropolitano','escola_origem_cidade' => 'cascavel','escola_origem_estado' => 'PR','pontuacao' => '81.5','rg' => '5558461','fonecasa' => '(21) 21553','fonecelular' => '(45) 55598-63','fonecomercial' => NULL,'fonerecado' => NULL,'email' => 'traudima@hotmail.com','bairro' => '','cidade' => '','curso' => '2','curso2' => NULL,'periodo' => '2','periodo2' => NULL,'serial' => '1','ensinofundamental' => '4','ensinomedio' => NULL,'cpf' => '46293639987','datainsc' => '2021-11-08','dataalteracao' => NULL,'horainsc' => '09:23:21','abandono' => '0','medio1' => NULL,'medio2' => NULL,'medio3' => NULL,'maiorport' => '52.00','maiormat' => '51.00','maiorqui' => NULL,'maiorbio' => NULL,'renda' => NULL,'comprovante_renda' => NULL,'tentativas' => NULL,'cursosfeitos' => NULL,'auxiliarenf' => NULL,'trabalhaarea' => NULL,'uf' => NULL,'dddcasa' => NULL,'dddcelular' => NULL,'dddcomercial' => NULL,'dddrecado' => NULL,'nomerecado' => NULL,'datanasc' => '11/11/1961','rua' => '','num_casa' => '','cgm' => '45','concordo' => '0','instituicao_formacao' => '0','trabalha_area' => NULL,'tipo_necessidade' => '0','bolsa_familia' => '2','matematica_n1' => NULL,'matematica_n2' => NULL,'matematica_n3' => NULL,'matematica_n4' => NULL,'portugues_n1' => NULL,'portugues_n2' => NULL,'portugues_n3' => NULL,'portugues_n4' => NULL,'quimica_n1' => NULL,'quimica_n2' => NULL,'quimica_n3' => NULL,'quimica_n4' => NULL,'biologia_n1' => NULL,'biologia_n2' => NULL,'biologia_n3' => NULL,'biologia_n4' => NULL,'nis' => NULL,'rg_data_expedicao' => '2016-02-02','pontuacao_curso2' => '81.5','valida' => '0'),
        array('id' => '0','nome' => 'Pâmela de Souza Rocha','nome_mae' => 'Ede Simões de Souza Rocha','escola_origem' => 'Jardim clarito e ENCCEJA','escola_origem_cidade' => 'Cascavel','escola_origem_estado' => 'PR','pontuacao' => '188','rg' => '10460700-4','fonecasa' => '(45) 99928-0020','fonecelular' => '(45) 99928-0020','fonecomercial' => NULL,'fonerecado' => NULL,'email' => 'pamela809070@gmail.com','bairro' => 'Floresta','cidade' => 'Cascavel','curso' => '4','curso2' => NULL,'periodo' => '3','periodo2' => NULL,'serial' => '2','ensinofundamental' => NULL,'ensinomedio' => '1','cpf' => '07038350927','datainsc' => '2021-11-08','dataalteracao' => '2021-11-09','horainsc' => '20:33:17','abandono' => '0','medio1' => NULL,'medio2' => NULL,'medio3' => NULL,'maiorport' => '88.00','maiormat' => '81.00','maiorqui' => '98.00','maiorbio' => '78.00','renda' => NULL,'comprovante_renda' => NULL,'tentativas' => NULL,'cursosfeitos' => NULL,'auxiliarenf' => NULL,'trabalhaarea' => NULL,'uf' => NULL,'dddcasa' => NULL,'dddcelular' => NULL,'dddcomercial' => NULL,'dddrecado' => NULL,'nomerecado' => NULL,'datanasc' => '04/04/1989','rua' => 'Enseada','num_casa' => '100','cgm' => '981165063','concordo' => '0','instituicao_formacao' => '0','trabalha_area' => NULL,'tipo_necessidade' => '0','bolsa_familia' => '1','matematica_n1' => NULL,'matematica_n2' => NULL,'matematica_n3' => NULL,'matematica_n4' => NULL,'portugues_n1' => NULL,'portugues_n2' => NULL,'portugues_n3' => NULL,'portugues_n4' => NULL,'quimica_n1' => NULL,'quimica_n2' => NULL,'quimica_n3' => NULL,'quimica_n4' => NULL,'biologia_n1' => NULL,'biologia_n2' => NULL,'biologia_n3' => NULL,'biologia_n4' => NULL,'nis' => '20668053504','rg_data_expedicao' => '2005-08-24','pontuacao_curso2' => '100','valida' => '0'),
        array('id' => '0','nome' => 'MAIKY DE SOUZA NOBRE ','nome_mae' => 'ELISANGELA MACIEL DE SOUZA','escola_origem' => 'Horácio Ribeiro Dos Reis ','escola_origem_cidade' => 'Cascavel - PR','escola_origem_estado' => 'PR','pontuacao' => '158.5','rg' => '142641577','fonecasa' => '(45) 99936-8479','fonecelular' => '(45) 99953-0623','fonecomercial' => NULL,'fonerecado' => NULL,'email' => 'maikydesouzanobre1@gmail.com','bairro' => 'NOVA CIDADE','cidade' => 'CASCAVEL - PR','curso' => '19','curso2' => NULL,'periodo' => '2','periodo2' => NULL,'serial' => '1','ensinofundamental' => '1','ensinomedio' => NULL,'cpf' => '14175270990','datainsc' => '2021-11-08','dataalteracao' => '2021-11-09','horainsc' => '14:22:40','abandono' => '0','medio1' => NULL,'medio2' => NULL,'medio3' => NULL,'maiorport' => '75.00','maiormat' => '72.00','maiorqui' => NULL,'maiorbio' => NULL,'renda' => NULL,'comprovante_renda' => NULL,'tentativas' => NULL,'cursosfeitos' => NULL,'auxiliarenf' => NULL,'trabalhaarea' => NULL,'uf' => NULL,'dddcasa' => NULL,'dddcelular' => NULL,'dddcomercial' => NULL,'dddrecado' => NULL,'nomerecado' => NULL,'datanasc' => '19/02/2007','rua' => 'Rua da Imigração','num_casa' => '728','cgm' => '1003877597','concordo' => '0','instituicao_formacao' => '0','trabalha_area' => NULL,'tipo_necessidade' => '0','bolsa_familia' => '2','matematica_n1' => NULL,'matematica_n2' => NULL,'matematica_n3' => NULL,'matematica_n4' => NULL,'portugues_n1' => NULL,'portugues_n2' => NULL,'portugues_n3' => NULL,'portugues_n4' => NULL,'quimica_n1' => NULL,'quimica_n2' => NULL,'quimica_n3' => NULL,'quimica_n4' => NULL,'biologia_n1' => NULL,'biologia_n2' => NULL,'biologia_n3' => NULL,'biologia_n4' => NULL,'nis' => NULL,'rg_data_expedicao' => '2014-09-30','pontuacao_curso2' => '158.5','valida' => '0'),
        array('id' => '0','nome' => 'Siderleia Back Bonfin','nome_mae' => 'Marli de Fátima Back','escola_origem' => 'Escola Carlos Argemiro Camargo','escola_origem_cidade' => 'Capitão Leônidas Marques','escola_origem_estado' => 'PR','pontuacao' => '160','rg' => '13199527-0','fonecasa' => '(45) 99937-8841','fonecelular' => '(45) 99859-4058','fonecomercial' => NULL,'fonerecado' => NULL,'email' => 'backsiderleia@gmail.com','bairro' => 'Primavera','cidade' => 'Capitão Leônidas Marques','curso' => '4','curso2' => NULL,'periodo' => '1','periodo2' => NULL,'serial' => '2','ensinofundamental' => NULL,'ensinomedio' => '1','cpf' => '09354415903','datainsc' => '2021-11-08','dataalteracao' => NULL,'horainsc' => '10:52:14','abandono' => '0','medio1' => NULL,'medio2' => NULL,'medio3' => NULL,'maiorport' => '70.00','maiormat' => '70.00','maiorqui' => '70.00','maiorbio' => '80.00','renda' => NULL,'comprovante_renda' => NULL,'tentativas' => NULL,'cursosfeitos' => NULL,'auxiliarenf' => NULL,'trabalhaarea' => NULL,'uf' => NULL,'dddcasa' => NULL,'dddcelular' => NULL,'dddcomercial' => NULL,'dddrecado' => NULL,'nomerecado' => NULL,'datanasc' => '27031995','rua' => 'Edivino fritz','num_casa' => '109','cgm' => '','concordo' => '0','instituicao_formacao' => '0','trabalha_area' => NULL,'tipo_necessidade' => '0','bolsa_familia' => '2','matematica_n1' => NULL,'matematica_n2' => NULL,'matematica_n3' => NULL,'matematica_n4' => NULL,'portugues_n1' => NULL,'portugues_n2' => NULL,'portugues_n3' => NULL,'portugues_n4' => NULL,'quimica_n1' => NULL,'quimica_n2' => NULL,'quimica_n3' => NULL,'quimica_n4' => NULL,'biologia_n1' => NULL,'biologia_n2' => NULL,'biologia_n3' => NULL,'biologia_n4' => NULL,'nis' => NULL,'rg_data_expedicao' => '2010-12-30','pontuacao_curso2' => '85','valida' => '0'),
        array('id' => '0','nome' => 'MAIKY DE SOUZA NOBRE ','nome_mae' => 'ELISANGELA MACIEL DE SOUZA','escola_origem' => 'Horácio Ribeiro Dos Reis ','escola_origem_cidade' => 'Cascavel - PR','escola_origem_estado' => 'PR','pontuacao' => '158.5','rg' => '142641577','fonecasa' => '(45) 99936-8479','fonecelular' => '(45) 99953-0623','fonecomercial' => NULL,'fonerecado' => NULL,'email' => 'maikydesouzanobre1@gmail.com','bairro' => 'NOVA CIDADE','cidade' => 'CASCAVEL - PR','curso' => '19','curso2' => NULL,'periodo' => '2','periodo2' => NULL,'serial' => '1','ensinofundamental' => '1','ensinomedio' => NULL,'cpf' => '14175270990','datainsc' => '2021-11-08','dataalteracao' => '2021-11-09','horainsc' => '14:22:40','abandono' => '0','medio1' => NULL,'medio2' => NULL,'medio3' => NULL,'maiorport' => '75.00','maiormat' => '72.00','maiorqui' => NULL,'maiorbio' => NULL,'renda' => NULL,'comprovante_renda' => NULL,'tentativas' => NULL,'cursosfeitos' => NULL,'auxiliarenf' => NULL,'trabalhaarea' => NULL,'uf' => NULL,'dddcasa' => NULL,'dddcelular' => NULL,'dddcomercial' => NULL,'dddrecado' => NULL,'nomerecado' => NULL,'datanasc' => '19/02/2007','rua' => 'Rua da Imigração','num_casa' => '728','cgm' => '1003877597','concordo' => '0','instituicao_formacao' => '0','trabalha_area' => NULL,'tipo_necessidade' => '0','bolsa_familia' => '2','matematica_n1' => NULL,'matematica_n2' => NULL,'matematica_n3' => NULL,'matematica_n4' => NULL,'portugues_n1' => NULL,'portugues_n2' => NULL,'portugues_n3' => NULL,'portugues_n4' => NULL,'quimica_n1' => NULL,'quimica_n2' => NULL,'quimica_n3' => NULL,'quimica_n4' => NULL,'biologia_n1' => NULL,'biologia_n2' => NULL,'biologia_n3' => NULL,'biologia_n4' => NULL,'nis' => NULL,'rg_data_expedicao' => '2014-09-30','pontuacao_curso2' => '158.5','valida' => '0'),
        array('id' => '0','nome' => 'DIEIME VIEIRA','nome_mae' => 'DIONE APARECIDA DE CARVAHO VIEIRA','escola_origem' => 'COLÉGIO ESTADUAL SANTA TEREZA DO OESTE','escola_origem_cidade' => 'SANTA TEREZA DO OESTE','escola_origem_estado' => 'PR','pontuacao' => '169','rg' => '94370817','fonecasa' => '(45) 99817-4635','fonecelular' => '(45) 99817-4635','fonecomercial' => NULL,'fonerecado' => NULL,'email' => 'vieiradieime@gmail.com','bairro' => 'CENTRO','cidade' => 'santa tereza do oeste ','curso' => '4','curso2' => NULL,'periodo' => '3','periodo2' => NULL,'serial' => '2','ensinofundamental' => NULL,'ensinomedio' => '1','cpf' => '04652036981','datainsc' => '2021-11-08','dataalteracao' => NULL,'horainsc' => '13:44:05','abandono' => '0','medio1' => NULL,'medio2' => NULL,'medio3' => NULL,'maiorport' => '90.00','maiormat' => '78.00','maiorqui' => '85.00','maiorbio' => '83.00','renda' => NULL,'comprovante_renda' => NULL,'tentativas' => NULL,'cursosfeitos' => NULL,'auxiliarenf' => NULL,'trabalhaarea' => NULL,'uf' => NULL,'dddcasa' => NULL,'dddcelular' => NULL,'dddcomercial' => NULL,'dddrecado' => NULL,'nomerecado' => NULL,'datanasc' => '30/07/1983','rua' => 'JOAO VARGAS','num_casa' => '266','cgm' => '','concordo' => '0','instituicao_formacao' => '0','trabalha_area' => NULL,'tipo_necessidade' => '0','bolsa_familia' => '2','matematica_n1' => NULL,'matematica_n2' => NULL,'matematica_n3' => NULL,'matematica_n4' => NULL,'portugues_n1' => NULL,'portugues_n2' => NULL,'portugues_n3' => NULL,'portugues_n4' => NULL,'quimica_n1' => NULL,'quimica_n2' => NULL,'quimica_n3' => NULL,'quimica_n4' => NULL,'biologia_n1' => NULL,'biologia_n2' => NULL,'biologia_n3' => NULL,'biologia_n4' => NULL,'nis' => NULL,'rg_data_expedicao' => '2001-11-22','pontuacao_curso2' => '85','valida' => '0')
      );

    $sql = "INSERT INTO  inscricoesValidas  (nome) VALUES ($dados[1]);";
    
    $conn->exec($sql);

/*
    for($i=1;$i>=10;$i++){
        $conn->exec($sql);
    }
  */  
    // fecha a conex�o
    $conn = null;
}
catch (PDOException $e)
{
    // caso ocorra uma exce��o, exibe na tela
    print "Erro!: " . $e->getMessage() . "\n";
    die();
}
?>