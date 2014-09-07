<?php include("inc/headerwork.php"); ?>
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Portfolio Website'; 
    $to = 'antjdavenport@gmail.com'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>
	
	
	<!-- +++++ Contact Section +++++ -->
	
	<div class="container pt">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>CONTACT ME</h3>
				<hr>
				
			</div>


		</div>
		<div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">
						<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>


				<form method="post" action="contact.php">
				  <div class="form-group">
				    <input name="name" class="form-control" placeholder="Your name">
				    <br>
				  </div>
				  <div class="form-group">
				    <input name="email" class="form-control" placeholder="Enter email">
				    <br>
				  </div>
				  <textarea name="message" class="form-control" rows="6" placeholder="Enter your message here"></textarea>
				    <br>
				 <input id="submit" name="submit" type="submit" value="Submit">
				</form>    			
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
</div>
	
	
	<!-- +++++ Footer Section +++++ -->
	<?php include("inc/footer.php"); ?>
