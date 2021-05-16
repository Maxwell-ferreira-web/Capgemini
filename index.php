<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastrar Anúncio!</title>		
	</head>
	<body>
		<h1>Cadastrar Anúncio</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="processa.php">
			<label>Nome do Anúncio: </label>
			<input type="text" name="nome" placeholder="Digite o nome do anúncio"><br><br>
			
			<label>Cliente: </label>
			<input type="text" name="cliente" placeholder="Digite o nome do cliente"><br><br>

			<label>Data de início: </label>
			<input type="date" name="dtinic" placeholder="Digite a data inicial"><br><br>

			<label>Data de término: </label>
			<input type="date" name="dtterm" placeholder="Digite a data de termino"><br><br>

			<label>Investimento por dia: </label>
			<input type="text" name="valor" placeholder="Digite o valor por dia"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>