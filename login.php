<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<link rel="icon" type="image/png" href="TCC\assets\img\peso.png" />
	<!--===============================================================================================-->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="TCC\vendor\loginvendor\bootstrap\css\bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="TCC\assets\fonts\loginfonts\font-awesome-4.7.0\css\font-awesome.min.css">
	<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="TCC\vendor\loginvendor\animate\animate.css"> -->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="TCC\vendor\loginvendor\css-hamburgers\hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="TCC\vendor\loginvendor\select2\select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="TCC/assets/css/logincss/util.css">
	<link rel="stylesheet" type="text/css" href="TCC/assets/css/logincss/main.css">
	<!--===============================================================================================-->
</head>
<style>
	h5 {
		color: red;
		font-family: verdana;

	}

	h1 {
		color: #3413f0;
	}
</style>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
				<img height="260" src="TCC\assets\img\cardio.png" alt="IMG">
				</div>

				<form action="scripts\Redirect.php" class="login100-form validate-form" method="post" enctype="multipart/form-data">
					<center>
					<span class="login100-form-title">
						<img  src="TCC\assets\img\nome.png" height="80">
						</span>
					</center>
					<div class="wrap-input100 validate-input">
						<!--  data-validate="Valid email is required: ex@abc.xyz" -->
						<input class="input100" type="text" name="cpf" placeholder="CPF">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="text" name="nascimento" placeholder="Nascimento">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">Login </button>
					</div>

				</form>

			</div>

		</div>
	</div>




	<!--===============================================================================================-->
	<script src="TCC\vendor\loginvendor\jquery\jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="TCC\vendor\loginvendor\bootstrap\js\popper.js"></script>
	<script src="TCC\vendor\loginvendor\bootstrap\js\bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="TCC\vendor\loginvendor\select2\select2.min.js"></script>
	<!--===============================================================================================-->
	<!-- <script src="TCC\vendor\loginvendor\tilt\tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script> -->
	<!--===============================================================================================-->
	<script src="TCC\assets\js\loginjs\main.js"></script>

</body>

</html>