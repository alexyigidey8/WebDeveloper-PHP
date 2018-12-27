<?php
	
	function sanitizeFormPassword($inputText)
	{
		$inputText = strip_tags($inputText);

		return $inputText;
	}

	function sanitizeFormUsername($inputText)
	{
		$inputText = strip_tags($inputText);
		$inputText = str_replace(" ", "", $inputText);

		return $inputText;
	}

	function sanitizeFormString($inputText)
	{
		$inputText = strip_tags($inputText);
		$inputText = str_replace(" ", "", $inputText);
		$inputText = ucfirst(strtolower($inputText));

		return $inputText;
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

		$account->register($username,$firstName,$lastName,$email,$email2,$password,$password2);
	}
?>
