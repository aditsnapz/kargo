<!DOCTYPE HTML>
<html>
<head>
<title>DA Cargo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inventive Design Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>assets/css/iconeffects.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/leoslider.css">
<link href="<?php echo base_url(); ?>assets/css/iconeffects.css" rel='stylesheet' type='text/css' />
<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
<!--/web-font-->
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!-- swipe box js -->
<script src="<?php echo base_url(); ?>assets/js/jquery.leoslider.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/main.js"></script> 
<!-- //swipe box js -->

<script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
	<style type="text/css">
		.atur{
			text-align: justify;
		}
	</style>
</head>
<body>
<!--start-home-->
<div class="main-header" id="house">
	<?php $this->load->view('frontendview/sidebar') ?>
	 <section id="line-slider">
            <div class="leoslider">
			
			
              <ul class="slides">
                <li>
                   <img src="<?php echo base_url(); ?>assets/images/ibu1.jpg" alt=" " />
                </li>
                <li>
                   <img src="<?php echo base_url(); ?>assets/images/ibu2.jpg" alt=" " />
                </li>
                <li>
                 <img src="<?php echo base_url(); ?>assets/images/ibu3.jpg" alt=" " />
                </li>
              </ul>
            </div>
        </section>
        <!-- /Line Slider -->
</div>
	
	<?php $this->load->view($content) ?>
		  	<!--//timer-->
<!--footer-->
<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-4 amet-sed">
				<h4>Lembaga BELVA </h4>
				<p>Kursus Lembaga BELVA menyelenggarakan kursus: menjahit (tingkat dasar, terampil dan mahir), sulam benang, silam pita, payet dan asesoris.
				Sejak tahun 1975
				Program terakreditasi
				Mesin jahit otomatis</p>
				<ul class="social">
					<li><i class="glyphicon glyphicon-home"> </i>Jalan Desa Sidorejo RT 04 / 04</li>
					<li class="tele-phone"><i class="glyphicon glyphicon-earphone"> </i> +71999-56985</li>
					<li class="mail"><a href="mailto:contact@example.com"><i class="glyphicon glyphicon-envelope"> </i> belva.sidorejo@gmail.com</a></li>
				</ul>
				</div>
				<div class="col-md-4 amet-sed amet-medium">
				<h4>KONTAK KAMI</h4>
					<p>Anda dapat membaca kabar dan berita terbaru dari Kursus Lembaga BELVA</p>
					<p>Kunjungi kami di tempat kursus: Desa Sidorejo RT 04 / 04 , Karangawen DEMAK </p>				
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>Follow Us</h4>
						<ul class="social-icons2 wow slideInDown" data-wow-duration="1s" data-wow-delay=".3s">
										<li><a href="#" class="tw"></a></li>
										<li><a href="#" class="fb"> </a></li>
										<li><a href="#" class="in"></a></li>
										 <div class="clearfix"></div>
									</ul>
									<div class="support">
									<form action="#" method="post">
										<input type="text" placeholder="Enter email...." required="">


										<input type="submit" value="SUBMIT" class="botton">
									<form>

							</div>
				</div>
				<div class="clearfix"> </div>
			</div>
				
		</div>
	</div>
		<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
																				
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
								<!--end-smooth-scrolling-->
		<a href="#house" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/sweet/dist/sweetalert.min.js"></script>
</body>
</html>