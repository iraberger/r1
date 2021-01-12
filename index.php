<!DOCTYPE html>
<html lang="ru">
<?php require_once "main.php"; ?>
<!--
	4.2 Эффективные методы программирования
-->
	<head>
		<title>Пример b42</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css" >
	</head>
	<body>

		<div id="wrapper">
			<div id="header">
				<h2>Работа с Git</h2>
				<p>Для начала работы нужно добавить файлы в проект.</p>
			</div> 

			<div id="content">

				<h2>Список файлов в проекте</h2>
				<?php ShowFiles(); ?>

			</div>
			<div id="footer">
			</div>
		</div>	
		
	</body>
</html>

