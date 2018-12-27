<?php
	
	function sanitizeFormPassword($inputText)
	{
		$inputText = strip_tags($inputText);

		return $inputText;
	}

	function sanitizeFormUsername($inputText)
	{
		$inputText = strip_tags($inputText);
		$inputText = str_replace("", "", $inputText);

		return $inputText;
	}

	function sanitizeFormString($inputText)
	{
		$inputText = strip_tags($inputText);
		$inputText = str_replace("", "", $inputText);
		$inputText = ucfirst(strtolower($inputText));

		return $inputText;
	}

	if (isset($_POST['loginButton'])) 
	{
		//echo "O botão Login foi pressionado";
	}

	if (isset($_POST['registerButton'])) 
	{
		//echo "O botão Login foi pressionado";
		$username = sanitizeFormUsername($_POST['username']);
		//$username = strip_tags($username);
		//$username = str_replace("", "", $username);

		$firstName = sanitizeFormString($_POST['firstName']);
		//$firstName = strip_tags($firstName);
		//$firstName = str_replace("", "", $firstName);		
		//$firstName = ucfirst(strtolower($firstName));

		$lastName = sanitizeFormString($_POST['lastName']);
		//$firstName = strip_tags($firstName);
		//$firstName = str_replace("", "", $firstName);		
		//$firstName = ucfirst(strtolower($firstName));
		$email = sanitizeFormString($_POST['email']);
		$email2 = sanitizeFormString($_POST['email2']);

		$password = sanitizeFormPassword($_POST['password']);
		$password2 = sanitizeFormPassword($_POST['password2']);
	}
?>

<html>
<head>
	<title>Bem-vindo ao Spotify-CLone</title>
</head>
<body>
	<div id="inputContainer">
		
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login para sua conta</h2>
			<p>
				<label for="loginUsername">Usuário</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. zéCarioca" requerid>
			</p>
			<p>
				<label for="loginPassword">Senha</label>
				<input id="loginPassword" name="loginPassword" type="password" placeholder="Sua Senha" requerid>
			</p>
			<?php ?>
			<button type="submit" name="loginButton">ENTRAR</button>
		</form>

		<form id="registerForm" action="register.php" method="POST">
			<h2>Crie sua conta gratuitamente</h2>
			<p>
				<label for="username">Usuário</label>
				<input id="username" name="username" type="text" placeholder="e.g. zéCarioca" requerid>
			</p>
			<p>
				<label for="firstName">Nome</label>
				<input id="firstName" name="firstName" type="text" placeholder="e.g. Zé" requerid>
			</p>
			<p>
				<label for="lastName">Sobrenome</label>
				<input id="lastName" name="lastName" type="text" placeholder="e.g. Carioca" requerid>
			</p>
			<p>
				<label for="email">Email</label>
				<input id="email" name="email" type="text" placeholder="e.g. ze@gmail.com" requerid>
			</p>
			<p>
				<label for="email2">Confirmar Email</label>
				<input id="email2" name="email2 " type="text" placeholder="e.g. ze@gmail.com" requerid>
			</p>
			<p>
				<label for="password">Senha</label>
				<input id="password" name="password" type="password" placeholder="Sua Senha" requerid>
			</p>
			<p>
				<label for="password2">Confirmar Senha</label>
				<input id="password2" name="password2" type="password" placeholder="Sua Senha" requerid>
			</p>
			<button type="submit" name="registerButton">CADASTRAR</button>
		</form>

	</div>
</body>
</html>