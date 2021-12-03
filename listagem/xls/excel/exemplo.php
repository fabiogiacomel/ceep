<?
# Brasil ***************************************

//params of the your dataBase server
// parametros do seu servidor
require("db_config.inc");

// classe (class)
require("mid_excel.class");

//Estanciar
$mid_excel = new MID_SQLPARAExel;

// data to the file(Dados para o arquivo)
$sql = "SELECT nome, cast(pontuacao as unsigned integer) as pontuacao FROM inscricoesValidas WHERE valida=1 AND curso=1 AND periodo = 1 ORDER by pontuacao DESC";

//ex.:
//$mid_excel->mid_sqlparaexcel("DataBaseName", "TABLEname", RECORDSET, "FILEname");
$mid_excel->mid_sqlparaexcel("u224722929_ceep", "InscricoesValidas", $sql, "admManha");

?>