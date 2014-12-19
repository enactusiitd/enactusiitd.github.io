<?php
chdir($_SERVER['DOCUMENT_ROOT']);
require_once('Includes/Main.php');
Menu(false,"Contact","#header nav > ul > li > a#menuContact");


// define variables and set to empty values
$phoneErr=$captchaErr="";
$name=$email=$subject=$phone=$message="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name=test_input($_POST["name"]);
     $email=test_input($_POST["email"]);
     $subject=test_input($_POST["subject"]);
     $phone=test_input($_POST["phone"]);
     $phone=str_replace(" ","",$phone);
     $phone=str_replace("-","",$phone);
     $phone=str_replace("+","",$phone);
     if (ctype_digit($phone));
     else	$phoneErr='"' . $_POST["phone"] . '" is not a valid phone number';
     $message=test_input($_POST["message"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

function DisplayForm() {
global $captchaErr,$phoneErr,$name,$email,$subject,$phone,$message;
if (($phoneErr)||($captchaErr))
	echo '<div style="color:#e89980;">Sorry, this form could not be submitted, because ' . 
	($phoneErr ? ($captchaErr ? $phoneErr . ' and ' . $captchaErr . '.'
			: $phoneErr . '.') 
	: $captchaErr . '.') . '
	</div>';
else 
	echo '<b>How about emailing us?</b>';
	echo '<form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="post">
			<div class="row uniform 50%">
				<div class="6u 12u(2)">
					<input type="text" name="name" id="name" value="' . $name . '" placeholder="Name" required/>
				</div>
				<div class="6u 12u(2)">
					<input type="email" name="email" id="email" value="' . $email . '" placeholder="Email" required/>
				</div>
			</div>
			<div class="row uniform 50%">
				<div class="12u">
					<input type="text" name="subject" id="subject" value="' . $subject . '" placeholder="Subject" required/>
				</div>
			</div>
			<div class="row uniform 50%">
				<div class="12u">
					<input type="tel" name="phone" id="phone" value="' . $phone . '" placeholder="Phone Number" required/>
				</div>
			</div>
			<div class="row uniform 50%">
				<div class="12u">
					<textarea name="message" id="message" placeholder="Message" rows="6" required>' . $message . '</textarea>
				</div>
			</div>
			<div class="row uniform 50%">
				<div class="6u 12u(2)">
					<div class="g-recaptcha" data-sitekey="6LfLev8SAAAAAEpKfS9wYZzZ9duS28rWNDgA6DNq"></div>
				</div>
				<div class="6u 12u(2)">
					<ul class="actions align-center">
						<li><input type="submit" class="button special" value="Send Message" /></li>
					</ul>
				</div>
			</div>
		</form>';
}
?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<section id="main" class="container 75%">
	<header>
		<h2>Contact Us</h2>
		<p>We'd love to hear from you.</p>
	</header>
	<div class="box">
<?php
//if form has not been submitted
if (!($_SERVER["REQUEST_METHOD"]=="POST")) {
	echo '
		<b>Looking for a human?</b><br>You can call up<br>Hemant Kumar on +91-8447907040, or<br>Mayank Sahu on +91-9555893938.<br>Come on now, don\'t be shy.<br><br><b>Or perhaps, social networks?</b><br>
		<ul class="icons">
			<li><a href="https://twitter.com/EnactusIITD" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
			<li><a href="https://www.facebook.com/enactusiitdelhi" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
		</ul>';
	DisplayForm();
	}
else {
	//Form submitted, check for captcha
	require_once('Includes/recaptchalib.php');
	$reCaptcha = new ReCaptcha("6LfLev8SAAAAAL_Z45yvCosAJHqDEX-wns8Tp2Ka");
	if ($_POST["g-recaptcha-response"]) 
	    $resp=$reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"],$_POST["g-recaptcha-response"]);
	if ($resp != null && $resp->success) {
		if ($phoneErr) {
			DisplayForm();
			}
		else {
			echo "Thank you for mailing us, we will get back to you soon<br>";
			require_once('Includes/class.phpmailer.php');
			require_once('Includes/class.smtp.php');
			$phone=test_input($_POST["phone"]);
			$mail = new PHPMailer;
			//$mail->SMTPDebug = 3;  
			$mail->isSMTP();
			$mail->Host='cp-31.webhostbox.net';
			$mail->SMTPAuth=true;
			$mail->Username='forms@enactusiitd.org';
			$mail->Password='#l^JaG6oZ0dA';
			$mail->SMTPSecure='ssl';
			$mail->Port=465;
			$mail->From="forms@enactusiitd.org";
			$mail->FromName=$name;
			$mail->addReplyTo($email,$name);
			$mail->addBCC('rijul.ahuja@gmail.com', 'Rijul Ahuja');
			$mail->addBCC('rijul.ahuja@enactusiitd.org', 'Rijul Ahuja');
			$mail->addBCC('hemantkushva@gmail.com', 'Hemant Kumar');
			$mail->addBCC('hemant.kumar@enactusiitd.org', 'Hemant Kumar');
			$mail->addBCC('mayank.iitd1@gmail.com', 'Mayank Sahu');
			$mail->addBCC('mayank.sahu@enactusiitd.org', 'Mayank Sahu');	
			//save a copy on our website
			$mail->addBCC('forms@enactusiitd.org', 'Forms');
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject="[EnactusForm] " . $subject;
			$mail->Body=$message . "<br><br>" . $name . "<br>" . $phone . "<br>" . $email;
			$mail->AltBody=$message . "\n\n" . $name . "\n" . $phone . "\n" . $email;
			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			    }
			}
		}
	else {
	$captchaErr="the captcha does not match";
		DisplayForm();
	}
}
?>
</div>
</section>
<?php Footer(); ?>
