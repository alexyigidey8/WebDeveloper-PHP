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
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. thelsandorAntunes" requerid>
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
				<input id="username" name="username" type="text" placeholder="e.g. thelsandorAntunes" requerid>
			</p>
			<p>
				<label for="firstName">Nome</label>
				<input id="firstName" name="firstName" type="text" placeholder="e.g. Thelsandro" requerid>
			</p>
			<p>
				<label for="lastName">Sobrenome</label>
				<input id="lastName" name="lastName" type="text" placeholder="e.g. Antunes" requerid>
			</p>
			<p>
				<label for="email">Email</label>
				<input id="email" name="email" type="text" placeholder="e.g. thelsandro@gmail.com" requerid>
			</p>
			<p>
				<label for="email2">Confirmar Email</label>
				<input id="email2" name="email2 " type="text" placeholder="e.g. thelsandro@gmail.com" requerid>
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