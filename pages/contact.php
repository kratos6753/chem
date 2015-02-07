<div class="contact-container">
	<div id="map-canvas"></div>
	<div class="feedback">
		<form method="POST" action="api/feedback.php">
			<h1>Feedback</h1>
			<input type="text" name="name" placeholder="Name" required /><br>
			<input type="text" name="email" placeholder="Email" required /><br>
			<input type="text" name="phone_number" placeholder="Mobile(Optional)" /><br>
			<textarea name="message" placeholder="Your message ..."></textarea><br>
			<button type="submit" name="feedback" class="btn btn-primary btn-block btn-large">submit</button>
		</form>
	</div>
</div>