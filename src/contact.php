<?php
	define("TITLE", "Contact Us | Norway Travel");
	
	require('inc/header.php');
?>
<?php
// Check for header injection
function has_header_injection($str){
	return preg_match("/[\r\n]/", $str);
}
	if (isset($_POST['submit'])){
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$msg = $_POST['message'];
		// Check to see if $name or $email have header injections
		if (has_header_injection($name) || has_header_injection($email)){
			die(); //if true, kill the script
		}
		// Add the recipient message
		$to = "evamargy@gmail.com";
		// Create a subject
		$subject = "$name sent you a message!";
		// Construct the message
		$message = "Name: $name\r\n";
		$message .= "Email: $email\r\n";
		$message .= "Message:\r\n$msg";
		// if the subscribe checkbox was checked
		if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe') {
			// Add a new line to the $message variable
			$message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
		}
		$message = wordwrap($message, 72);
		// Set the mail headers into a variable
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
		$headers .= "From: $name <$email> \r\n";
		$headers.= "X-Priority: 1\r\n";
		// Send the email
		mail($to, $subject, $message, $headers);
// show success message after email was sent
?>
<div class="contact-response">
	<h5>Thank you for contacting us!</h5>
	<p>Please allow us 24 hours for a response</p>
	<a href="index.php" class="btn btn--return" role="button">Go to Home page</a>
</div>
<?php
//if the contact wasn't pressed yet
} else {
?>
<div class="contact-form">
	<h1>Get in touch with us!</h1>
	<form method="post" action="" id="contact-form">
		<div class="input-blocks">
			<label for="name">
				<span class="input-span">Name</span>
				<input type="text" id="name" name="name" placeholder="Eva Gyomrey" required autocomplete="name" autofocus>
			</label>
			
			<label for="email">
				<span class="input-span">E-mail</span>
				<input type="email" id="email" name="email" placeholder="email@example.com"  required autocomplete="email">
			</label>
			
			<label for="message">
				<span class="input-span">Message</span>
				<textarea rows="5" name="message" required id="message"></textarea>
			</label>
		</div>
		
		<label for="subscribe" class="subscribe">
			<input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
			<span>Subscribe to our Newsletter</span>
		</label>
		
		<button type="submit" class="btn btn--submit" name="submit">Send Message</button>
	</form>
</div>
<?php } ?>
<?php
	require('inc/footer.php');
?>