<div class="register-container">
	<div class="register">
		<form method="POST">
			<h1>Register</h1>
			<input type="text" name="name" placeholder="Name" required /><br>
			<input type="email" name="email" placeholder="Email" required /><br>
			<input type="text" name="college" placeholder="College" required /><br>
			<input type="password" name="password1" placeholder="Enter Password" required /><br>
			<input type="password" name="password2" placeholder="Retype Password" required /><br>
			<span>Accomodation: </span>
			<input type="radio" name="accomodation" /> Yes
			<input type="radio" name="accomodation" checked /> No<br>
			<button type="submit" class="btn btn-primary btn-block btn-large">submit</button>
		</form>
	</div>
	<div class="login">
		<form method="POST">
			<h1>Login</h1>
			<input type="text" name="name" placeholder="Name" required /><br>
			<input type="password" name="password" placeholder="Enter Password" required /><br>
			<button type="submit" class="btn btn-primary btn-block btn-large">submit</button>
			<h1>Login via</h1>
			<a href="#" class="social_links google">Login with Google</a>
			<a href="#" class="social_links facebook">Login with Facebook</a>
			<a href="#" class="social_links twitter">Login with Twitter</a>
		</form>
	</div>
</div>