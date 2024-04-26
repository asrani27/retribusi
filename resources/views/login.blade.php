<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ANDRE</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="/formlogin/fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="/formlogin/css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('bg.jpg');background-size:cover">
			<div class="inner">
				<img src="#" alt="" class="image-1">
				<form autocomplete="off" method="post" action="/login" style="border-radius: 25px">
					@csrf
					<h3><img src="/logo.png" width="100px"></h3>
					<h3>LOGIN APLIKASI RETRIBUSI</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="username" autocomplete="new-password" placeholder="Username">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" name="password" autocomplete="new-password" placeholder="Password">
					</div>
					<button style="border-radius: 25px">
						<span>MASUK</span>
					</button>
				</form>
				<img src="#" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="/formlogin/js/jquery-3.3.1.min.js"></script>
		<script src="/formlogin/js/main.js"></script>
		@include('sweetalert::alert')
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

