<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.css">
	<link rel="stylesheet" href="../css/styles.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
</head>
<body>
	
	<div class="ui container" style="width: 40%;">
		<br>
		<h1 id="LogoLogin"><a href="../index.html">Aprend<strong id="E">E</strong>nseñando</a></h1>
		<br>
		<form class="ui form segment blue large" style="box-shadow: #353535 10px 10px 15px;padding: 30px;">
			<div class="field">
		     		<label>Username or email address</label>
		      		<input placeholder="Username" name="name" type="text">
			</div>
			<div class="field">
			   	<div class="ui grid">
				    <div class="eight wide column">
				   	 	<label>Password</label>
				    </div>
			     	<div class="eight wide column">
			     		<label for="forgot_pass"><a href="forgot_pass.php"><h5 align="right">Forgot password?</h5></a></label>
			     	</div>
				</div>
			    <input name="password" type="password">
			</div>
			<div class="inline field">
			    <div class="ui checkbox">
			      <input name="terms" type="checkbox">
			      <label>I agree to the terms and conditions</label>
			    </div>
			</div>
			<div style="width: 70%;margin-left: 70px; ;" class="ui green submit button">Sign In</div>
			<br>
		</form>
			<div class="ui grid segment inverted teal" style="box-shadow: #353535 10px 10px 15px;">
				<div class="eight wide column">
					<h3>New to Learn Teaching?</h3>
				</div>
				<div class="eight wide column">
					<a href="registered.php"><h3 align="right">Create an Account.</h3></a>
				</div>		
			</div>
		<br>
		<br>
		<div class="ui grid">
			<div class="four wide column" id="contenedor">
				<a id="item-login" href="terms">Terms</a>
			</div>
			<div class="two wide column">
				
			</div>
			<div class="four wide column" id="contenedor">
				<a id="item-login" href="privacy">Privacy</a>
			</div>
			<div class="two wide column">
				
			</div>
			<div class="four wide column" id="contenedor">
				<a id="item-login" href="security">Security</a>
			</div>
		</div>
	</div>
	

</body>
</html>