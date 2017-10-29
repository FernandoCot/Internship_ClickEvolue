<!DOCTYPE html>
<html lang="pt-br">
<head>

	<!--Criador: Fernando Calixto de Oliveira Tenório (Data da Última Modificação: 27/10/17) -->

	<!-- Essa é a Página de Busca, nela o usuário poderá testar a funcionalidade de select, 
       	 ou seja, buscar informações no banco de dados.

		Informações Básicas:

		Editor de Texto: Sublime Text 3
		SGBD: MySQL WorkBench
		BD: MySQL versão 5.7
		Servidor de Aplicação: Xampp versão 3.2.2 (com Apache 2.4)
		Tipo de Conexão PHP: "mysqli"
	-->

	<title>Teste Estágio - CRUD Funcional</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Chamando a Minha Página de CSS-->

	<link rel="stylesheet" type="text/css" href="estilosdois.css">

	<!-- Chamando a Página de CSS do Bootstrap -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  	<!-- Chamando a Minha Página de Javascript -->

  <script type="text/javascript" src="meujavascript.js"></script>

	<!-- Chamando as Páginas de Javascript do Bootstrap -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>

<body id="body">

<!-- Início da Barra de Navegação -->

<!-- Essa Navbar padrão foi importada do Bootstrap, e eu realizei alterações nos seguintes elementos dela: (href, li, nav-link e Strings) -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Página Inicial</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="mostrartudo.php">Visualizar Todos os Dados Salvos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="insert.php">Inserir</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="select.php">Localizar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="update.php">Atualizar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="delete.php">Excluir</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Fim da Barra de Navegação -->


<?php


/*
	Criador: Fernando Calixto de Oliveira Tenório (Data da Última Modificação: 23/10/17)

	Essa tela tem como objetivo buscar informações no banco de dados e mostrá-las aos usuários (comando "Select" para algo especcífico)

*/



include_once ("conexao.php");


$nome = $_POST['nomebusca'];

$query = mysqli_query($conexao, "SELECT * FROM usuarios WHERE nome = '$nome'");

while($result = mysqli_fetch_array($query)){
  
  echo "<table border='1' cellpading='10px' bgcolor='#C0C0C0' width='60%'>
		<tr>
				<th> ID  </th> 
				<th> Nome  </th>
				<th> Senha  </th>
				<th> Email  </th>
		</tr>

		<tr>
				<td width='20'>$result[id]</td>
				<td width='50'>$result[nome]</td>
				<td width='20'>$result[senha]</td>
				<td width='70'>$result[email]</td>
		</tr>

</table>";
  }

?>

</body>

</html>

