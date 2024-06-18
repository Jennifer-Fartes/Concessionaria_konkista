<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
  <link rel="icon" type="image/x-icon" href="./img/favicon-car.png">
    <link rel="stylesheet" href="./styles/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
	</head>
	<body>


		<nav class="topbar"><h1>Conquista Carros</h1></nav>
    
    <form class="formulario" method="POST" action="valida.php">
        <fieldset>
            <legend>login</legend><br>
            	
			
			<label>E-mail:</label>
			<input type="text" name="email" placeholder="Digite o seu e-mail"><br><br>
			
			<label>Senha:</label>
			<input type="password" name="senha" placeholder="Digite a senha"><br><br>
			
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>
		
			<p>Não tem cadastro ?  <a href="alugarC.php"> Clique aqui </a></p> 
            <input type="reset">
            <input type="submit" name="btnLogin" value="Acessar">

        </fieldset>
    </form>

	</body>
</html>