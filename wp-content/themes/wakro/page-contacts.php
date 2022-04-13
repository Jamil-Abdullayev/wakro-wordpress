<?php
/*
	Template Name: Contacts
*/
?>

<?php
get_header();
?>


<div class="page-content" style="padding-top: 5%;">
	<section class="contact-1">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-8 col-md-12 mr-auto">
					<div class="section-title">
						<div class="title-effect">
							<div class="bar bar-top"></div>
							<div class="bar bar-right"></div>
							<div class="bar bar-bottom"></div>
							<div class="bar bar-left"></div>
						</div>
						<h6>Get In Touch</h6>
						<h2>Stay Contact Us</h2>
						<p>Get in touch and let us know how we can help. Fill out the form and we’ll be in touch as soon as possible.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form id="contact-form" method="post" action="<?php echo bloginfo('template_url') ?>/php/contact.php">
						<div class="messages"></div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>First Name</label>
									<input id="form_name" type="text" name="name" class="form-control" placeholder="Type First name" required="required" data-error="Firstname is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Last Name</label>
									<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Type Last name" required="required" data-error="Lastname is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Email Address</label>
									<input id="form_email" type="email" name="email" class="form-control" placeholder="Type Email" required="required" data-error="Valid email is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone Number</label>
									<input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Type Phone" required="required" data-error="Phone is required">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Message</label>
									<textarea id="form_message" name="message" class="form-control" placeholder="Type Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="g-recaptcha" data-sitekey="6LeuY-UeAAAAAGiNOCDq0H2cz8WxxqfZwMM-Vjol"></div>
							<div class="col-md-12 mt-2">
								<button class="btn btn-theme btn-circle" data-text="Send Message"><span>S</span><span>e</span><span>n</span><span>d</span>
									<span> </span><span>M</span><span>e</span><span>s</span><span>s</span><span>a</span><span>g</span><span>e</span>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!--section class="contact-info p-0 z-index-1">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 col-md-12">
					<div class="contact-media"> <i class="flaticon-paper-plane"></i><span>Address:</span>
						<p>423B, Road Wordwide Country, USA</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 md-mt-5">
					<div class="contact-media"> <i class="flaticon-email"></i><span>Email Address</span><a href="mailto:themeht23@gmail.com"> themeht23@gmail.com</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 md-mt-5">
					<div class="contact-media"> <i class="flaticon-social-media"></i><span>Phone Number</span><a href="tel:+912345678900">+91-234-567-8900</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="o-hidden p-0 custom-mt-10 z-index-0">
		<div class="container-fluid p-0">
			<div class="row align-items-center">
				<div class="col-md-12">
					<div class="map iframe-h-2">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921" allowfullscreen=""></iframe>
					</div>
				</div>
			</div>
		</div>
	</section-->
</div>


<?php
get_footer();
?>
