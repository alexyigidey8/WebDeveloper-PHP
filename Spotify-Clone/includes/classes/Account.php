<?php
	class Account
	{

		private $errorArray;

		public function __construct()
		{
			$this->errorArray = array();
		}

		public function register($un, $fn, $ln, $em, $em2, $pw, $pw2)
		{
			$this->validateUsername($un);
			$this->validateFirstName($fn);
			$this->validateLastName($ln);
			$this->validateEmails($em,$em2);
			$this->validatePasswords($pw, $pw2);

		}

		private function validateUsername($un)
		{

			if(strlen($un) > 25 || strlen($un) < 5)
			{
				array_push($this->errorArray, "Usuário dever conter entre 5 à 25 caracteres");
				return;
			}

			//TODO: verifica se o usuário existe.
		}

		private function validateFirstName($fn)
		{
			if(strlen($fn) > 25 || strlen($fn) < 2)
			{
				array_push($this->errorArray, "Nome dever conter entre 2 à 25 caracteres");
				return;
			}			
		}

		private function validateLastName($ln)
		{
			if(strlen($ln) > 25 || strlen($ln) < 2)
			{
				array_push($this->errorArray, "Sobrenome dever conter entre 2 à 25 caracteres");
				return;
			}				
		}

		private function validateEmails($em, $em2)
		{
			if($em != $em2)
			{
				array_push($this->errorArray, "Emails não correspondem ");
				return;
			}

			if(!filter_var($em, FILTER_VALIDATE_EMAIL))
			{
				array_push($this->errorArray, "Email é inválido");
				return;
			}

		}

		private function validatePasswords($pw,$pw2)
		{
			
		}
	}

?>