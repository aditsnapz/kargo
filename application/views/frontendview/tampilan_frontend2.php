<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>PT DAC</title>
		<link rel="shortcut icon" href="<?=base_url();?>file/gambar/logo.ico" />
	    <!-- Web Fonts -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'> -->
        <!-- Bootstrap Core CSS -->

	<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	    <link href="<?php echo base_url(); ?>assets/2/css/bootstrap.min.css" rel="stylesheet">
	    
	    <!-- Flaticon CSS -->
	    <link href="<?php echo base_url(); ?>assets/2/fonts/flaticon/flaticon.css" rel="stylesheet">
	    <!-- font-awesome CSS -->
	    <link href="<?php echo base_url(); ?>assets/2/css/font-awesome.min.css" rel="stylesheet">
	    <!-- Offcanvas CSS -->
	    <link href="<?php echo base_url(); ?>assets/2/css/hippo-off-canvas.css" rel="stylesheet">
	    <!-- animate CSS -->
	    <link href="<?php echo base_url(); ?>assets/2/css/animate.css" rel="stylesheet">
	    <!-- language CSS -->
	    <link href="<?php echo base_url(); ?>assets/2/css/language-select.css" rel="stylesheet">
	    <!-- owl.carousel CSS -->
	    <link href="<?php echo base_url(); ?>assets/2/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
		<!-- magnific-popup -->
    	<link href="<?php echo base_url(); ?>assets/2/css/magnific-popup.css" rel="stylesheet">
    	<!-- Main menu -->
    	<link href="<?php echo base_url(); ?>assets/2/css/menu.css" rel="stylesheet">
    	<!-- Template Common Styles -->
    	<link href="<?php echo base_url(); ?>assets/2/css/template.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="<?php echo base_url(); ?>assets/2/css/style.css" rel="stylesheet">
	    <!-- Responsive CSS -->
	    <link href="<?php echo base_url(); ?>assets/2/css/responsive.css" rel="stylesheet">

	    <script src="<?php echo base_url(); ?>assets/2/js/vendor/modernizr-2.8.1.min.js"></script>
	    <link href="<?php echo base_url(); ?>assets/2/css/YTPlayer.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url(); ?>assets/2/css/blog.css" rel="stylesheet" media="screen">

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
	    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
		    <script src="<?php echo base_url(); ?>assets/2/js/vendor/html5shim.js"></script>
		    <script src="<?php echo base_url(); ?>assets/2/js/vendor/respond.min.js"></script>
	    <![endif]-->
	</head>


	<body id="page-top">
		<div id="st-container" class="st-container">
		    <div class="st-pusher">
	        	<div class="st-content" id="house">
				  	<!--start-home-->
					<?php $this->load->view('frontendview/sidebar2') ?>

                    <div id="main-carousel" class="carousel slide hero-slide" data-ride="carousel">
                    	
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#main-carousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php echo base_url(); ?>assets/2/img/slider/slide-1.jpg" alt="Hero Slide">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">
                                        <small class="animated fadeIn">CALL US TODAY</small>
                                        <div class="phone animated lightSpeedIn">1-800-1234-567</div>
                                        <h1 class="animated lightSpeedIn">Making transportation fast and safe</h1>

                                        <p class="lead animated lightSpeedIn">It's a tag line, where you can write a key point of your idea.
                                            It is a long
                                            established fact that a reader will be distracted.</p>

                                        <a class="btn btn-primary animated lightSpeedIn" href="<?php echo base_url(); ?>assets/2/#">Work With Us Today</a>
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                            <!--.item-->

                            <div class="item">
                                <img src="<?php echo base_url(); ?>assets/2/img/slider/slide-2.jpg" alt="Hero Slide">
                                <!--Slide Image-->

                                <div class="container">
                                    <div class="carousel-caption">

                                        <h1 class="animated bounceIn">We value your time and money</h1>

                                        <p class="lead animated bounceIn">It's a tag line, where you can write a key point of your idea. It
                                            is a long
                                            established fact that a reader will be distracted.</p>
                                        <a class="btn btn-primary animated bounceIn" href="<?php echo base_url(); ?>assets/2/#">Work With Us Today</a>
                                    </div>
                                    <!--.carousel-caption-->
                                </div>
                                <!--.container-->
                            </div>
                            <!--.item-->
                        </div>
                        <!--.carousel-inner-->

                        <!-- Controls -->
                        <a class="left carousel-control" href="<?php echo base_url(); ?>assets/2/#main-carousel" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="<?php echo base_url(); ?>assets/2/#main-carousel" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- #main-carousel-->

                    <?php $this->load->view($content) ?>
                    <!-- cta end -->
			        <!-- footer-widget-section start -->
			        <section class="footer-widget-section section-padding">
			        	<div class="container">
			        		<div class="row">
			        			<div class="col-md-3 col-md-offset-1 col-sm-4">
			        				<div class="footer-widget">
			        					<h3>Place &amp; Contact</h3>

										<address>
										  384 Maple Circle<br>
										  Simi Valley, Nevada 47424<br>

										  <!-- Google Map Modal Trigger -->
										  <!-- <button type="button" class="modal-map" data-toggle="modal" data-target="#cssMapModal">Location  Map</button>

										  <span class="tel">(554) 616-9926</span>
										</address> -->


										<!-- Modal -->
										<!-- <div class="modal fade" id="cssMapModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										  <div class="modal-dialog modal-lg">
										    <div class="modal-content">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										        <h4 class="modal-title" id="myModalLabel">Our Location</h4>
										      </div>
										      <div class="modal-body">

											    <div id="googleMap"></div>
											    
										      </div>
										    </div>
										  </div>
										</div> --><!-- End Modal -->
			        				</div><!-- /.footer-widget -->
			        			</div><!-- /.col-md-4 -->

			        			<div class="col-md-3 col-sm-4">
			        				<div class="footer-widget">
			        					<h3>About Transport</h3>

			        					<ul>
                                        	<li><a href="<?php echo base_url(); ?>assets/2/about.html">About</a></li>
                                            <li><a href="<?php echo base_url(); ?>assets/2/service.html">Service</a></li>
                                            <li><a href="<?php echo base_url(); ?>assets/2/our-people.html">Our people</a></li>
                                            <li><a href="<?php echo base_url(); ?>assets/2/career.html">Career</a></li>
                                            <li><a href="<?php echo base_url(); ?>assets/2/faq.html">FAQ Page</a></li>
                                        </ul>
			        				</div><!-- /.footer-widget -->
			        			</div><!-- /.col-md-4 -->

			        			<div class="col-md-4 col-sm-4">
			        				<div class="footer-widget">
			        					<h3>Stay in Touch</h3>
			        					<p>Enter your email address to receive news &amp; offers from us</p>

										<form class="newsletter-form">
											<div class="form-group">
												<label class="sr-only" for="InputEmail1">Email address</label>
												<input type="email" class="form-control" id="InputEmail1" placeholder="Your email address">
												<button type="submit" class="">Send &nbsp;<i class="fa fa-angle-right"></i></button>
											</div>
										</form>		        				
									</div><!-- /.footer-widget -->
			        			</div><!-- /.col-md-4 -->
			        		</div><!-- /.row -->
			        	</div><!-- /.container -->
			        </section><!-- /.cta-section -->
			        <!-- footer-widget-section end -->

			        <!-- copyright-section start -->
			        <footer class="copyright-section">
			        	<div class="container text-center">
			        		<div class="footer-menu">
			        			<ul>
			        				<li><a href="<?php echo base_url(); ?>assets/2/#">Privacy &amp; Cookies</a></li>
			        				<li><a href="<?php echo base_url(); ?>assets/2/#">Terms &amp; Conditions</a></li>
			        				<li><a href="<?php echo base_url(); ?>assets/2/#">Accessibility</a></li>
			        			</ul>
			        		</div>

			        		<div class="copyright-info">
			        			<span>Copyright © 2015 Unship. All Rights Reserved. Designed by <a href="<?php echo base_url(); ?>assets/2/">uiCookies</a><br> Proudly powered by <a href="<?php echo base_url(); ?>assets/2/">HTML5</a> and <a href="<?php echo base_url(); ?>assets/2/">Bootstrap3</a></span>
			        		</div>
			        	</div><!-- /.container -->
			        </footer>
			        <!-- copyright-section end -->
	    		</div> <!-- .st-content -->
		    </div> <!-- .st-pusher -->
			
			<!-- OFF CANVAS MENU -->
	    	<div class="offcanvas-menu offcanvas-effect">
	    		<div class="offcanvas-wrap">
			        <div class="off-canvas-header">
			        	<button type="button" class="close" aria-hidden="true" data-toggle="offcanvas" id="off-canvas-close-btn">&times;</button>
			        </div>
			        <ul id ="offcanvasMenu" class="list-unstyled visible-xs visible-sm">
			            <li class="active"><a href="<?php echo base_url(); ?>assets/2/index.html">Home<span class="sr-only">(current)</span></a></li>
			            <li>
			            	<a href="<?php echo base_url(); ?>assets/2/#">Pages</a>
			            	<ul>
								<li><a href="<?php echo base_url(); ?>assets/2/about.html">About</a></li>
							    <li><a href="<?php echo base_url(); ?>assets/2/service.html">Service</a></li>
							    <li><a href="<?php echo base_url(); ?>assets/2/our-people.html">Our people</a></li>
							    <li><a href="<?php echo base_url(); ?>assets/2/career.html">Career</a></li>
							    <li><a href="<?php echo base_url(); ?>assets/2/faq.html">FAQ Page</a></li>
							    <li><a href="<?php echo base_url(); ?>assets/2/typography.html">Typography</a></li>
							</ul>

			            </li>
			            <li>
			            	<a href="<?php echo base_url(); ?>assets/2/#">Services</a>
			            	<ul>
								<li><a href="<?php echo base_url(); ?>assets/2/air.html">Air transportation</a></li>
								<li><a href="<?php echo base_url(); ?>assets/2/marine.html">Marine transportation</a></li>
								<li><a href="<?php echo base_url(); ?>assets/2/moving.html">Moving &amp; storage</a></li>
								<li><a href="<?php echo base_url(); ?>assets/2/shipping.html">Shipping &amp; operations</a></li>
								<li><a href="<?php echo base_url(); ?>assets/2/transportation.html">Transportation logistics</a></li>
								<li><a href="<?php echo base_url(); ?>assets/2/trucking.html">Trucking</a></li>
							</ul>

			            </li>
			            <li>
			            	<a href="<?php echo base_url(); ?>assets/2/#">Blog</a>
							<ul>
			            		<li>
			            			<a href="<?php echo base_url(); ?>assets/2/blog.html">Standard blog</a>
			            		</li>
			            		<li>
			            			<a href="<?php echo base_url(); ?>assets/2/blog-single.html">Single blog</a>
			            		</li>
			            	</ul>
			            </li>
			            <li><a href="<?php echo base_url(); ?>assets/2/contact.html">Contact</a></li>
			            <li><a href="<?php echo base_url(); ?>assets/2/typography.html">Typography</a></li>
			        </ul>
			        <div class="offcanvas-widgets hidden-sm hidden-xs">
				        <div id="twitterWidget">
							<h2>Tweeter feed</h2>				    	
							<div class="twitter-widget"></div>
						</div>
						<div class="newsletter-widget">
							<h2>Stay in Touch</h2>
							<p>Enter your email address to receive news &amp; offers from us</p>

							<form class="newsletter-form">
								<div class="form-group">
									<label class="sr-only" for="InputEmail1">Email address</label>
									<input type="email" class="form-control" id="InputEmail2" placeholder="Your email address">
									<button type="submit" class="btn">Send &nbsp;<i class="fa fa-angle-right"></i></button>
								</div>
							</form>		
							       				
						</div><!-- newsletter-widget -->
					</div>
				</div>
	      	</div><!-- .offcanvas-menu -->
		</div><!-- /st-container -->


		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>

	    <!-- jQuery -->
	    <script src="<?php echo base_url(); ?>assets/2/js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="<?php echo base_url(); ?>assets/2/js/bootstrap.min.js"></script>
	    <!-- owl.carousel -->
	    <script src="<?php echo base_url(); ?>assets/2/owl.carousel/owl.carousel.min.js"></script>
	    <!-- Magnific-popup -->
		<script src="<?php echo base_url(); ?>assets/2/js/jquery.magnific-popup.min.js"></script>
		<!-- Offcanvas Menu -->
		<script src="<?php echo base_url(); ?>assets/2/js/hippo-offcanvas.js"></script>
		<!-- inview -->
		<script src="<?php echo base_url(); ?>assets/2/js/jquery.inview.min.js"></script>
		<!-- stellar -->
		<script src="<?php echo base_url(); ?>assets/2/js/jquery.stellar.js"></script>
		<!-- countTo -->
		<script src="<?php echo base_url(); ?>assets/2/js/jquery.countTo.js"></script>
		<!-- classie -->
		<script src="<?php echo base_url(); ?>assets/2/js/classie.js"></script>
		<!-- selectFx -->
		<script src="<?php echo base_url(); ?>assets/2/js/selectFx.js"></script>
		<!-- sticky kit -->
		<script src="<?php echo base_url(); ?>assets/2/js/jquery.sticky-kit.min.js"></script>
	    <!-- GOGLE MAP -->
	   <!--  <script src="<?php echo base_url(); ?>assets/2/https://maps.googleapis.com/maps/api/js"></script>
 -->	    <!--TWITTER FETCHER-->
	    <script src="<?php echo base_url(); ?>assets/2/js/twitterFetcher_min.js"></script>
	    <!-- Custom Script -->
	    <script src="<?php echo base_url(); ?>assets/2/js/scripts.js"></script>
	   	<!-- Blog part -->
	    <script src="<?php echo base_url(); ?>assets/2/js/jquery.mb.YTPlayer.js"></script>
	    <!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
																				
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
								<!--end-smooth-scrolling-->
	<a href="#house" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	   	</body>
</html>
