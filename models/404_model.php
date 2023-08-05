<?php
	require_once("required.php");
?>

<!DOCTYPE html>
<html lang="pt">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>404 - Não Encontrado</title>
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?= $url_base ?>public/css/404.css">

	</head>

	<body>

		<div id="notfound">
			<div class="notfound">
				<div class="notfound-404">
					<div></div>
					<h1>404</h1>
				</div>
				<h2>Página não encontrada</h2>
				<p>A página que você está procurando pode ter sido removida, teve seu nome alterado ou está temporariamente indisponível.</p>
				<a href="<?= $url_base; ?>home">Página inicial</a>
			</div>
		</div>

	</body>

</html>
