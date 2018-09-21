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

		
		<!-- Footer AREA START -->
		<footer class="footer">
			<div class="footer-main cbiz-bg section">
				<div class="container">    
					<div class="row">
						<div class="widgets">
							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="widget logo">
									<div class="wi-title">
										<a href="index.html"><img src="assets/images/logo.png" alt="Logo"></a>
									</div>
									<div class="wi-content">
										<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that.</p>
										<ul class="wi-list">
											<li>
												<a href="#"><i class="fa fa-home"></i>43, Chanmry Bazar, khulna-9201</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-envelope-o"></i>admin@yoursite.com</a>
											</li>
											<li>
												<a href="#"><i class="fa fa-phone"></i>+880 123 727 525</a>
											</li>

										</ul>
									</div>
								</div> <!-- /.widget -->
							</div> <!-- /.col- -->
							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="widget">
									<div class="wi-title">
									   <h5>Popular Tags</h5>
									</div>
									<div class="wi-content wi-tags">
										<ul>
											<li><a href="#">UI Design</a></li>
											<li><a href="#">Web Design</a></li>
											<li><a href="#">HTML</a></li>
											<li><a href="#">WordPress</a></li>
											<li><a href="#">Bootstrap</a></li>
											<li><a href="#">Joomla</a></li>
											<li><a href="#">jQuery</a></li>
											<li><a href="#">Internet</a></li>
											<li><a href="#">News</a></li>
										</ul>
									</div> <!-- /.wi-content -->
								</div> <!-- /.widget -->
								<div class="widget">
									<div class="wi-title">
									   <h5>Social Media</h5>
									</div>
									<div class="wi-content wi-social">
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
									</div> <!-- /.wi-content -->
								</div> <!-- /.widget -->
							</div> <!-- /.col- -->
							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="widget">
									<div class="wi-title">
										<h5>Latest News</h5>
									</div>
									<div class="wi-content wi-news">
									   <ul>
										   <li>
											   <div class="news-left">
												   <a href="#">
														<img src="assets/images/1.jpg" alt="News">
													</a>
											   </div>    
											   <div class="news-right">
												   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
												   <div class="posted">
													   <span class="post-date"><a href="#">Aug 05, 2017</a></span>
													   <span class="post-tag"><a href="#"><i class="fa fa-comments"></i>18</a></span>
													   <span class="post-like"><a href="#"><i class="fa fa-heart"></i>32</a></span>
													</div>
												</div> <!-- /.news-right -->
										   </li>
										   <li>
											   <div class="news-left">
												   <a href="#">
														<img src="assets/images/2.jpg" alt="News">
													</a>
											   </div>    
											   <div class="news-right">
												   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
												   <div class="posted">
													   <span class="post-date"><a href="#">Aug 05, 2017</a></span>
													   <span class="post-tag"><a href="#"><i class="fa fa-comments"></i>18</a></span>
													   <span class="post-like"><a href="#"><i class="fa fa-heart"></i>32</a></span>
													</div>
												</div> <!-- /.news-right -->
										   </li>
									   </ul>
									</div> <!-- /wi-content -->
								</div> <!-- /.widget -->
							</div> <!-- /.col- -->
						</div> <!-- /.widgets -->
					</div> <!-- /.row -->  
				</div> <!-- /.container -->
			</div> <!-- /.footer-main -->
			<div class="copyright">
				<div class="container">
					Designelit &copy; 2017 All rights reserved. Terms of use and Privacy Policy
				</div>
			</div> <!-- /.copyright -->
		</footer> <!-- /.footer -->
		<!-- /Footer AREA END -->
		
		<!-- Go To Top Link -->
		<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
	</div> <!-- /#all-area -->
	<!-- End Full Body / all-area -->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->

	<!-- jQuery Migrate -->
	<script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- Slick Nav -->
	<script src="assets/js/jquery.slicknav.js"></script>
	<!-- Slider Touch to work -->
	<script src="assets/js/jquery.mobile.custom.min.js"></script>
	<!-- FancyBox -->
	<script src="assets/js/jquery.fancybox.min.js"></script>
	<!-- Isotope -->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!-- Counterup -->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<!-- ProgressBar -->
	<script src="assets/js/jquery.lineProgressbar.js"></script>
	<!-- Slick Slider -->
	<script src="assets/js/slick.min.js"></script>
	<!-- particles.js -->
	<script src="assets/js/particles.min.js"></script>
	<script src="assets/js/particles-config.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD92XF6BndfvP0ysXAlyvdhvaKmdqvXI5E" async defer></script>

	<!-- Main / Custom JS  -->
	<script src="assets/js/custom.js"></script>
</body>


<!-- Mirrored from designelit.com/template/cbiz/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Apr 2018 08:00:17 GMT -->
</html>