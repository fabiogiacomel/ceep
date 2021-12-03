<?php
	
	include("mysql_excel.inc.php");
	
	$import=new HarImport();
	$import->openDatabase("localhost","u224722929_ceep","UmhNWJ3AvJ4+H]Kr","u224722929_ceep");
	
	//To import the data from table
	$import->ImportDataFromTable("tablename");
	
	//To import the data from sql query
	
	$sql="select * from InscricoesValidas";
	$import->ImportData($sql,"myXls.xls");

	//To force to download
	//$import->ImportDataFromTable("graduate","",true);
	//Or
	//$import->ImportData($sql,"myXls.xls",true);

?>