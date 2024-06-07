<!DOCTYPE html>
<html>
<head>
<!-- <base href="/public"> -->
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="Loginform/style.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body>
	<div class="mains">
            <div class="col-sm-2">
							<div class="logo">
								<a href="/">
									Elegant<span>Excursions</span>
								</a>
							</div>
						</div>
	<div class="container infinity-container">
		<div class="row">
			<div class="col-md-1 infinity-left-space"></div>

			<!-- FORM BEGIN -->
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 text-center infinity-form">
				<!-- Company Logo -->
				<div class="text-center mb-3 mt-5">
					<img src="logo.png" width="150px">
				</div>
				<div class="text-center mb-4">
					<h4>Create an account</h4>
				</div>
				<!-- Form -->
				<form class="px-3" action="{{route('customer.store')}}" method="post">
					@csrf
					<!-- Input Box -->
					<div class="form-input">
						<span><i class="fa fa-user"></i></span>
						<input type="text" name="name" placeholder="Full Name" tabindex="10"required>
					</div>
					<div class="form-input">
						<span><i class="fa fa-envelope"></i></span>
						<input type="email" name="email" placeholder="Email Address" tabindex="10"required>
					</div>
					<div class="form-input">
						<span><i class="fa fa-lock"></i></span>
						<input type="password" name="password" placeholder="Password" required>
					</div>
					<!-- Register Button -->
		            <div class="mb-3"> 
						<button type="submit" class="btn btn-block">Register</button>
					</div>
					
					<div class="text-center mb-5" style="color: #777;">Already have an account? 
						<a class="login-link" href="/login">Login here</a>
			       	</div>
				</form>
			</div>
			<!-- FORM END -->

			<div class="col-md-1 infinity-right-space"></div>
		</div>
	</div>
	</div>
</body>
</html>
