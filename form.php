<?php

$firstname="";
$lastname="";
$email="";
$emailconfirmation="";
$password="";
$confirmepassword="";
$birthdate="";
$mobilephone="";

$errors=array();

if($_POST != null) {

	

	if(empty($_POST["firstname"])){
		$errors["firstname"] = "O campo é de preenchimento obrigatório";
	}else{
		$firstname=$_POST["firstname"];
		if (strlen(trim($_POST["firstname"]))<3){
			$errors["firstname"] = "O campo deve ter pelo menos 3 caracteres";
		}
	} 

	if(empty($_POST["lastname"])){
		$errors["lastname"] = "O campo é de preenchimento obrigatório";
	}else{
		$lastname=$_POST["lastname"];
		if (strlen(trim($_POST["lastname"]))<2){
			$errors["lastname"] = "O campo deve ter pelo menos 2 caracteres";
		}
    } 


	if (empty($_POST["email"])) { 
		$errors["email"] = "O campo é de preenchimento obrigatório"; 
	} else {
		$email=$_POST["email"];
	 	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { 
		$errors["email"] = "O e-mail não é válido"; 
	}
	}

	if (empty($_POST["emailconfirmation"])) { 
		$errors["emailconfirmation"] = "O campo é de preenchimento obrigatório"; } 
	else{
		$lastname=$_POST["emailconfirmation"];
	 if ($_POST["email"] !== $_POST["emailconfirmation"]) { 
		$errors["emailconfirmation"] = "Os e-mails não coincidem"; 
	}
}
	
	if (empty($_POST["password"])) {
		$errors["password"] = "O campo é de preenchimento obrigatório";
	} else {
		$password = $_POST["password"];
		if (strlen($password) < 8) {
			$errors["password"] = "A senha deve ter pelo menos 8 caracteres";
		} else if (!preg_match('/[A-Z]/', $password)) {
			$errors["password"] = "A senha deve conter pelo menos uma letra maiúscula";
		} else if (!preg_match('/[a-z]/', $password)) {
			$errors["password"] = "A senha deve conter pelo menos uma letra minúscula";
		} else if (!preg_match('/[!@#$%^&*(),.?":{}|<>]/', $password)) {
			$errors["password"] = "A senha deve conter pelo menos um caractere especial";
		}
	}
	
	if (empty($_POST["confirmepassword"])) { 
		$errors["confirmepassword"] = "O campo é de preenchimento obrigatório"; } 
	else{
		$confirmepassword = $_POST["confirmepassword"];
	 if ($_POST["password"] !== $_POST["confirmepassword"]) { 
		$errors["confirmepassword"] = "As senhas não coincidem"; 
	}
}
	
	if (empty($_POST["birthdate"])) { $errors["birthdate"] = "O campo é de preenchimento obrigatório"; 
	} else { $date = DateTime::createFromFormat('Y-m-d', $_POST["birthdate"]); 
		$currentDate = new DateTime(); $age = $currentDate->diff($date)->y; 
		$birthdate = $_POST["birthdate"];
		if (!$date || $date->format('Y-m-d') !== $_POST["birthdate"]) { 
			$errors["birthdate"] = "A data de nascimento não é válida"; 
		} else if ($date > $currentDate) { 
			$errors["birthdate"] = "A data de nascimento deve ser anterior à data atual"; 
		} else if ($age < 18 || $age > 120) { 
			$errors["birthdate"] = "A idade deve estar entre 18 e 120 anos"; 
		} 
	}
	
	
	if (empty($_POST["mobilephone"])) {
		$errors["mobilephone"] = "O campo é de preenchimento obrigatório";
	
	} else {
	
		$mobilephone = trim($_POST["mobilephone"]); 
		$length = strlen($mobilephone);
	
		if ($length == 9) {
			
			if ($mobilephone[0] != '9') {
				$errors["mobilephone"] = "Um número com 9 dígitos deve começar com 9";
			}
		} else if ($length == 12) {
		
			if ($mobilephone[3] != '9') {
				$errors["mobilephone"] = "Um número com 12 dígitos deve ter o 4º dígito como 9";
			}
		} else if ($length == 14) {
			
			if ($mobilephone[5] != '9') {
				$errors["mobilephone"] = "Um número com 14 dígitos deve ter o 6º dígito como 9";
			}
		} else {
			$errors["mobilephone"] = "O número deve ter 9, 12 ou 14 dígitos";
		}
	}

}

?>

<form method= "post">

	<fieldset>
		<legend> Nome</legend>
			<input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>" placeholder="Insira o seu nome"> <br>
			<?php if (isset($errors["firstname"])){echo $errors["firstname"];} ?>
	</fieldset>

	<fieldset>
		<legend>Apelido</legend>
			<input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>" placeholder="Insira o seu apelido"><br>
			<?php if (isset($errors["lastname"])){echo $errors["lastname"];} ?>
		
	</fieldset>

	<fieldset>
		<legend> Email</legend>
			<input type="text" name="email" id="email" value="<?php echo $email; ?>" placeholder="Insira o seu e-mail"><br>
			<?php if (isset($errors["email"])){echo $errors["email"];} ?>
		
	</fieldset>

	<fieldset>
		<legend>Confirmar email</legend>
			<input type="text" name="emailconfirmation" id="emailconfirmation" value="<?php echo $emailconfirmation; ?>" placeholder="Confirme o seu e-mail"><br>
			<?php if (isset($errors["emailconfirmation"])){echo $errors["emailconfirmation"];} ?>
	</fieldset>

	<fieldset>
		<legend>Password</legend>
			<input type="text" name="password" id="password" value="<?php echo $password; ?>" placeholder="Insira uma password"><br>
			<?php if (isset($errors["password"])){echo $errors["password"];} ?>
	</fieldset>

	<fieldset>
		<legend>Confirmar Password</legend>
			<input type="text" name="confirmepassword" id="confirmepassword" value="<?php echo $confirmepassword; ?>" placeholder="Confirme a sua password"><br>
			<?php if (isset($errors["confirmepassword"])){echo $errors["confirmepassword"];} ?>
	</fieldset>

	<fieldset>
		<legend>Data de nascimento</legend>
			<input type="date" name="birthdate" id="birthdate" value="<?php echo $birthdate; ?>" placeholder="Insira a sua data de nascimento"><br>
			<?php if (isset($errors["birthdate"])){echo $errors["birthdate"];} ?>
	</fieldset>

	<fieldset>
		<legend>Telefone</legend>
			<input type="tel" name="mobilephone" id="mobilephone" value="<?php echo $mobilephone; ?>" placeholder="Insira o número de telefone"><br>
			<?php if (isset($errors["mobilephone"])){echo $errors["mobilephone"];} ?>
	</fieldset>

	<button>
	Submeter
	</button>

</form>
