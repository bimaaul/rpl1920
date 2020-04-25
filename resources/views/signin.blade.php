<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ezlaundry | Sign In</title>
	<link rel="stylesheet" type="text/css" href="/css/signin.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:500&display=swap" rel="stylesheet">
</head>
<body>
	<img class="wave" src="/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="/img/bg.svg">
		</div>
		<div class="login-content">
			<div class="content">
				<div id="button-box">
					<div id="btn"></div>
					<button type="button" class="toggle-btn active" onclick="login()">Log In</button>
					<button type="button" class="toggle-btn" onclick="register()">Register</button>
				</div>
				<form id="login" class="input-grup" action="index.html">
					<img src="/img/nav-logo.png">
					<h2 class="title">Welcome</h2>
					<div class="input-div one">
						<div class="i">
								<i class="fas fa-user"></i>
						</div>
						<div class="div">
								<h5>Email</h5>
								<input type="email" class="input">
						</div>
					</div>
					<div class="input-div pass">
						<div class="i"> 
								<i class="fas fa-lock"></i>
						</div>
						<div class="div">
							<h5>Password</h5>
							<input type="password" class="input">
						</div>
					</div>
					<a href="#">Forgot Password?</a>
					<input type="submit" class="btn" value="Login">
				</form>
				<form id="register" class="input-grup" action="index.html">
					<div class="input-div pass">
					<div class="i"></div>
						<div class="div">
							<h5>Email</h5>
							<input type="email" class="input">
						</div>
						</div>
						<div class="input-div pass">
							<div class="i"></div>
							<div class="div">
								<h5>Nama Lengkap</h5>
								<input type="text" class="input">
							</div>
						</div>
						<div class="input-div pass">
							<div class="i"></div>
							<div class="div">
								<h5>Alamat</h5>
								<input type="text" class="input">
							</div>
						</div>
						<div class="input-div one">
							<div class="i"></div>
							<div class="div">
								<h5>Username</h5>
								<input type="nama" class="input">
							</div>
						</div>
						<div class="input-div one">
							<div class="i"></div>
							<div class="div">
								<h5>Password</h5>
								<input type="password" class="input">
							</div>
						</div>
						<input type="submit" class="btn" value="Register">
					</form>
			</div>
		</div>
    </div>
	<script src="/js/signin.js"></script>
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>
</html>
