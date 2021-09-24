<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>wallace - Reputacao com estrela</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="estilo.css">
	</head>
	<body>
	  <div class="container" id="avaliaçao">
			<h1>Avalie</h1>
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg']."<br><br>";
				unset($_SESSION['msg']);
			}
			?>
			<form method="POST" action="processa.php" enctype="multipart/form-data">
				<div class="estrelas">
					<input type="radio" id="vazio" name="estrela" value="" checked>
					
					<label for="estrela_um"><i class="fa"></i></label>
					<input type="radio" id="estrela_um" name="estrela" value="1">
					
					<label for="estrela_dois"><i class="fa"></i></label>
					<input type="radio" id="estrela_dois" name="estrela" value="2">
					
					<label for="estrela_tres"><i class="fa"></i></label>
					<input type="radio" id="estrela_tres" name="estrela" value="3">
					
					<label for="estrela_quatro"><i class="fa"></i></label>
					<input type="radio" id="estrela_quatro" name="estrela" value="4">
					
					<label for="estrela_cinco"><i class="fa"></i></label>
					<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
					
					<input type="submit" value="Cadastrar">
					
				</div>
			</form>
		</div>
	</body>
</html>