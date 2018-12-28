<?php
	
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");
	
	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name)
	{
		if (isset($_POST[$name])) {
			echo $_POST[$name];
		}
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
				<input id="loginUsername" name="loginUsername" type="text" placeholder="Ex. zéCarioca" requerid>
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
				<?php echo $account->getError(Constants::$usernameCharacters); ?>
				<?php echo $account->getError(Constants::$usernameTaken); ?>
				<label for="username">Usuário</label>
				<input id="username" name="username" type="text" placeholder="Ex. zéCarioca" value="<?php getInputValue('username')?>" requerid>
			</p>
			<p>
				<?php echo $account->getError(Constants::$firstNameCharacters); ?>
				<label for="firstName">Nome</label>
				<input id="firstName" name="firstName" type="text" placeholder="Ex. Zé" value="<?php getInputValue('firstName')?>" requerid>
			</p>
			<p>
				<?php echo $account->getError(Constants::$lastNameCharacters); ?>
				<label for="lastName">Sobrenome</label>
				<input id="lastName" name="lastName" type="text" placeholder="Ex. Carioca" value="<?php getInputValue('lastName')?>" requerid>
			</p>
			<p>
				<?php echo $account->getError(Constants::$emailsDoNoMatch); ?>
				<?php echo $account->getError(Constants::$emailInvalid); ?>
				<?php echo $account->getError(Constants::$emailTaken); ?>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="Ex. ze@gmail.com" value="<?php getInputValue('email')?>" requerid>
			</p>
			<p>
				<label for="email2">Confirmar Email</label>
				<input id="email2" name="email2" type="email" placeholder="Ex. ze@gmail.com" value="<?php getInputValue('email2')?>" requerid>
			</p>
			<p>
				<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
				<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
				<?php echo $account->getError(Constants::$passwordCharacters); ?>
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