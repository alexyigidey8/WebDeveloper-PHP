<?php

	if (isset($_POST['login']) && !empty($_POST['login'])) 
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		if (!empty($email) or !empty($password)) 
		{
			$email = $getFromU->checkInput($email);
			$password = $getFromU->checkInput($password);

			if (!filter_var($email, FILTER_VALIDADE_EMAIL)) 
			{
				$error = "Formato Inválido";
			}
			else
			{

			}

		}
		else
		{
			$error = "Por favor entre com o usuário ou senha";
		}

	}	

?>

<div class="login-div">
<form method="post"> 
	<ul>
		<li>
		  <input type="text" name="email" placeholder="Digite seu Email"/>
		</li>
		<li>
		  <input type="password" name="password" placeholder="Senha"/><input type="submit" name="login" value="Log in"/>
		</li>
		<li>
		  <input type="checkbox" Value="Remember me"> Lembre-me
		</li>
	</ul>
	
	<?php

		if (isset($error)) 
		{
			echo '	<li class="error-li">
	  					<div class="span-fp-error">'. $error .' </div>
	 				</li>';	
		}
		
	?>
	</form>
</div>