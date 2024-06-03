<?php
require_once ('function.php');

?>
<!doctype html>
<html lang="en">

<head>
	<title>LOGIN</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="../login-form-18/css/login1.css" rel="stylesheet">

</head>

<body>
	
	<div class="login-wrap">
		<div class="login-html">
			<div class="login-welcome">
                <label>Welcome Admin!</label>
			</div>
			<br>
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
				class="tab">Login</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
			<div class="login-form">
				<div class="sign-in-htm">
					<div class="group">
						<form class="form-login" method="POST" action="<?='process_login.php' ?>">
						<label for="user" class="label">Email</label>
						<input id="user" name="email" type="text" class="input" placeholder="Enter Email Address" id="exampleInputEmail" aria-describedby="emailHelprequired>
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" name="password" type="password" class="input" data-type="password" placeholder="password" required>
					</div>
					<div class="group">
						<input id="check" type="checkbox" class="check" checked>
						<label for="check"><span class="icon"></span> Keep me Login</label>
					</div>
					<div class="group">
						<button type="submit" name="login" class="button" href="login" value="login"> Login </button>
					</div>
					<div class="hr"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>