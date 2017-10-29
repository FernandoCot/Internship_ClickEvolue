<?php

/* 
	Criador: Fernando Calixto de Oliveira Tenório (Data da Última Modificação: 22/10/17)
	
	Essa tela tem como única função criar a conexão com o banco de dados MySQL.

	
	Informações Básicas:

	SGBD: MySQL WorkBench
	BD: MySQL versão 5.7
	Servidor de Aplicação: Xampp versão 3.2.2 (com apache)
	Tipo de Conexão PHP: "mysqli"


*/

$conexao = mysqli_connect("localhost", "Fernandocot", "18041997", "testeestagio", "3303") or die ("A conexão não foi completada com sucesso, tente novamente mais tarde" . mysqli_error($link)); 


?>