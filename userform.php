<?php

	//user_form.php
	
	//jutumärkide vahele input elemendi NAME
	//echo $_POST["email"];
	//echo $_POST["password"];
	
	$email_error = "";
	$password_error= "";
	
	//Kontrolli ainul siis kui kasutaja vajutab logi sisse nuppu
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//kontrollime kasutaja e-posti, et see ei oleks tühi
		if(empty($_POST["email"])) {
			$email_error = "Ei saa olla tühi";
		}
		if(empty($_POST["password"])) {
			$password_error = "Ei saa olla tühi";
		//Kontrollime parooli
		else {
			
		}
	
	}
	
?>
<html>
	<head>
		<title>User login page</title>
	</head>
	<body>
		
		<h2>Login</h2>
		<form action="userform.php" method="post">
			<input name="email" type="email" placeholder="E-post" > <?php echo $email_error; ?> <br>
			<input name="password" type="password" placeholder="Parool" > <?php echo $password_error; ?> <br>
			
			<input type ="submit" value="Logi sisse">
		</form>
		<h2>Create user</h2>
		
	</body>
</html>