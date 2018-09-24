<?php
	$title = "Contact Us || XYZ";
	include 'header.php';
?>

		<!-- Page Header AREA START -->
		<section class="page-head page-bg" style="background-image: url('assets/images/bg/contact.jpg')">
			<div class="container">    
				<h3 class="page-heading">Contact</h3>
				<div class="sub-title">
					<a href="index.php"><span>Home</span></a>
					<i class="fa fa-angle-right"></i>
					<a href="contact.php"><span>Contact</span></a>
				</div>
			</div> <!-- /.container -->
		</section> <!-- /.page-head -->
		<!-- /Page Header AREA END -->

		<!-- Contact AREA START -->
		<section class="contact-us section">
			<div class="container">    
				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 text-center">
						<div class="contact-content" style="padding: 20px 0">
							<div class="comm-title">
								<h2 style="font-size: 30px;font-weight: 700">Contact Us</h2>
							</div>
						</div> <!-- /.contact-content -->
						<!-- /.lets-contact -->
					</div> <!-- /.col- -->
					 <!-- /.col- -->
				</div>


				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-5 text-center">
						
						<div class="lets-contact">
							 <ul class="contact-list-my">
								<li>
									<a><i class="fa fa-paper-plane-o"></i>xxxxxxxxxxxxxxxxxx</a>
								</li>
								<li>
									<a href="mailto: contact@Xyz.com"><i class="fa fa-envelope-o"></i>contact@Xyz.com</a>
								</li>
								<li>
									<a href="tel: +x-xxx-xxx-xxxx"><i class="fa fa-phone"></i>+x-xxx-xxx-xxxx</a>
								</li>

							</ul> <!-- /.contact-list -->
							<!-- <div class="contact-social">
								<ul>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-facebook"></i>
										  <i class="fa hover-show fa-facebook"></i>
									  </a>
								  </li>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-twitter"></i>
										  <i class="fa hover-show fa-twitter"></i>
									  </a>
								  </li>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-google-plus"></i>
										  <i class="fa hover-show fa-google-plus"></i>
									  </a>
								  </li>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-pinterest-p"></i>
										  <i class="fa hover-show fa-pinterest-p"></i>
									  </a>
								  </li>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-youtube"></i>
										  <i class="fa hover-show fa-youtube"></i>
									  </a>
								  </li>
							  </ul>
							</div> --> <!-- /.contact-social -->
						</div> <!-- /.lets-contact -->
					</div> <!-- /.col- -->
					<div class="col-xs-12 col-sm-6  col-md-7">
						<div class="border-in">
							<!-- <div class="comm-title">
								<h3>Get in touch with us</h3>
							</div> -->
							<div class="contact-form">
								<form method="post" action="mailsend.php">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-6">
											<div class="form-group">
												<input type="text" name="name" class="form-control" required placeholder="Your Name">
											</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-12  col-md-6">
											<div class="form-group">
												<input type="text" name="phone" class="form-control" required placeholder="Your Phone">
											</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-12 col-md-12">
											<div class="form-group">
												<input type="email" name="email" class="form-control" required placeholder="Your Email">
											</div>
										</div>
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Your Subject">
											</div>
										</div> <!-- /.col- -->

										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<textarea name="message" class="form-control" required placeholder="Your Message"></textarea>
											</div>
										</div> <!-- /.col- -->
										<div class="form-group col-xs-12">
											<div class="form-btn">
												<input type="submit" name="submit" value="Send" class="contact-form-btn">
											</div>
										</div>
									</div> <!-- /.row -->
								</form>
							</div> <!-- /.contact-form -->
						</div>
					</div> <!-- /.col- -->
				</div> <!-- /.row -->  
			</div> <!-- /.container -->
		</section> <!-- /.contact-us -->
		<!-- /Contact AREA END -->


		<!-- Map AREA START -->
		<div class="map-area">
			<div class="gmap-container">
				<div class="gmap init-gmap" data-lat="22.822108" data-lng="89.552954" data-zoom="8"></div>
			</div>
		</div> <!-- /.map-area -->
		<!-- /Map AREA END -->

		<?php
			include 'footer.php';
		?>