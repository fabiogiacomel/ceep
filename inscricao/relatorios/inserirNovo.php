<?php

try {
    $conn = new PDO('mysql:dbname=u224722929_ceep;user=u224722929_ceep;password=UmhNWJ3AvJ4+H]Kr;host=localhost');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $json_str = file_get_contents("inscricoesnovas.json");

    //faz o parsing da string, criando o array
    $jsonObj = json_decode($json_str);
    $inscricoes = $jsonObj->inscricoes;

    //navega pelos elementos do array, imprimindo cada posição
    foreach ($inscricoes as $i) {
        $sql = "INSERT INTO inscricoesValidas (id, nome, nome_mae, escola_origem, escola_origem_cidade, escola_origem_estado,
        pontuacao, rg, fonecasa, fonecelular, fonecomercial, fonerecado, email, bairro, cidade, curso, curso2, periodo,
        periodo2, serial, ensinofundamental, ensinomedio, cpf, datainsc, dataalteracao, horainsc, abandono,  
        medio1, medio2, medio3, maiorport, maiormat, maiorqui, maiorbio, renda, comprovante_renda, tentativas,
        cursosfeitos, auxiliarenf, trabalhaarea, uf, dddcasa, dddcelular, dddcomercial, dddrecado, nomerecado,
        datanasc, rua, num_casa, cgm, concordo, instituicao_formacao,  trabalha_area,  tipo_necessidade, bolsa_familia,
        matematica_n1, matematica_n2, matematica_n3, matematica_n4, portugues_n1, portugues_n2, portugues_n3,
        portugues_n4, quimica_n1, quimica_n2, quimica_n3, quimica_n4, biologia_n1, biologia_n2, biologia_n3,
        biologia_n4, nis, rg_data_expedicao, pontuacao_curso2, valida) 
        VALUES (
        NULL, '$i->nome', '$i->nome_mae', '$i->escola_origem', '$i->escola_origem_cidade', '$i->escola_origem_estado',
        '$i->pontuacao', '$i->rg', '$i->fonecasa', '$i->fonecelular', '$i->fonecomercial', '$i->fonerecado', 
        '$i->email', '$i->bairro', '$i->cidade', '$i->curso', '$i->curso2', '$i->periodo',
        '$i->periodo2', '$i->serial', '$i->ensinofundamental', '$i->ensinomedio', '$i->cpf', '$i->datainsc', '$i->dataalteracao', 
        '$i->horainsc', '$i->abandono', '$i->medio1', '$i->medio2', '$i->medio3', '$i->maiorport', '$i->maiormat', '$i->maiorqui', 
        '$i->maiorbio', '$i->renda', '$i->comprovante_renda', '$i->tentativas', '$i->cursosfeitos', '$i->auxiliarenf', 
        '$i->trabalhaarea', '$i->uf', '$i->dddcasa', '$i->dddcelular', '$i->dddcomercial', '$i->dddrecado', '$i->nomerecado',
        '$i->datanasc', '$i->rua', '$i->num_casa', '$i->cgm', '$i->concordo', '$i->instituicao_formacao',  '$i->trabalha_area',
        '$i->tipo_necessidade', '$i->bolsa_familia', '$i->matematica_n1', '$i->matematica_n2', '$i->matematica_n3', 
        '$i->matematica_n4', '$i->portugues_n1', '$i->portugues_n2', '$i->portugues_n3', '$i->portugues_n4', '$i->quimica_n1', 
        '$i->quimica_n2', '$i->quimica_n3', '$i->quimica_n4', '$i->biologia_n1', '$i->biologia_n2', '$i->biologia_n3',
        '$i->biologia_n4', '$i->nis', '$i->rg_data_expedicao', '$i->pontuacao_curso2', '$i->valida'
        )";
        // use exec() because no results are returned
        $conn->exec($sql);
        //echo "nome: $i->nome - idade: $i->cpf - sexo: $i->curso<br>";
    }

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
