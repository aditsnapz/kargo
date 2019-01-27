                    <!-- #main-carousel-->


			        <!-- services start -->
					<section class="service-home section-padding" id="service">
			            <div class="container text-center">
			              <div class="row">
			                <div class="col-xs-12">
			                  <h2 class="section-title">Our 24 Hour’s Services</h2>
			                  <span class="section-sub">Nullam ac urna ey felis dapibus<br> condimeytum sit amet</span>
			                </div>
			              </div> <!-- /.row -->

			              <div class="row content-row">
			              	<div class="col-sm-4">
			              		<div class="service">
				              		<div class="service-thumb-home">
				              			<a href="<?php echo base_url(); ?>assets/2/#"><img src="<?php echo base_url(); ?>assets/2/img/trans.jpg" alt=""></a>
				              		</div>
				              		
				              		<h3>Transportation &amp; Logistics</h3>
				              		<p>Holisticly synergize maintainable intellectual<br> capital via viral interfaces. Energistically<br> embrace funyctionalized </p>
				              		<a class="readmore" href="<?php echo base_url(); ?>assets/2/#">Read More &nbsp;<i class="fa fa-angle-right"></i> </a>
			              		</div>
			              	</div><!-- /.col-sm-4 -->

			              	<div class="col-sm-4">
			              		<div class="service">
				              		<div class="service-thumb-home">
				              			<a href="<?php echo base_url(); ?>assets/2/#"><img src="<?php echo base_url(); ?>assets/2/img/moving.jpg" alt=""></a>
				              		</div>
				              		<h3>Moving &amp; Storage</h3>
				              		<p>Holisticly synergize maintainable intellectual<br> capital via viral interfaces. Energistically<br> embrace functionalized </p>
				              		<a class="readmore" href="<?php echo base_url(); ?>assets/2/#">Read More &nbsp;<i class="fa fa-angle-right"></i> </a>
			              		</div>

			              	</div><!-- /.col-sm-4 -->

			              	<div class="col-sm-4">
			              		<div class="service">
				              		<div class="service-thumb-home">
				              			<a href="<?php echo base_url(); ?>assets/2/#"><img src="<?php echo base_url(); ?>assets/2/img/shipping.jpg" alt=""></a>
				              		</div>
				              		<h3>Shipping Operations</h3>
				              		<p>Holisticly synergize maintainable intellectual<br> capital via viral interfaces. Energistically<br> embrace functionalized </p>
				              		<a class="readmore" href="<?php echo base_url(); ?>assets/2/#">Read More &nbsp;<i class="fa fa-angle-right"></i> </a>
			              	   </div>
			              	</div><!-- /.col-sm-4 -->
			              </div> <!-- /.row -->
			            </div><!-- /.container -->
			        </section>
			        <!-- services end -->

			        <!-- featuer-section start -->
			        <section class="feature-section section-padding" id="news">
						<div class="container">
					 <h1 class="tittle"><font color="white">Recent <span>News</span></font></h1>
					<div class="news-left">	
					<?php 
					foreach ($data as $row) : ?>	
					 	
						<div class="col-md-6 col-news-right">
							<div class="col-news-top">
								
									 <?php 
	                  $image = ['src'=>'uploads/'.$row->image,'width'=>'600','height'=>'300',];
	                  echo img($image); ?>
									
								
								<div class="clearfix"> </div>
								<div class="col-bottom">
								<h2><font color="white"><?php echo $row->judul ?></font></h2>
								<p><?php echo $row->subjudul?></p>
								<a href="<?php echo base_url(); ?>index.php/frontend2/lihat/<?php echo $row->id; ?>" class="hvr-shutter-in-horizontal"><button class="btn btn-info btn-xs">Read More</button></a>
							</div>
							</div>	
							
						</div>
						<?php endforeach; ?>
						 <div class="clearfix"> </div>
					</div>
				</div>
					</section>
			      
			        <!-- featuer-section end -->

			        <!-- why-us-setion start -->
			        <section class="why-us-setion section-padding" id="about">
			        	<div class="container">
			              <div class="row text-center">
			                <div class="col-xs-12">
			                  <h2 class="section-title">Why Chose Us</h2>
			                  <span class="section-sub">Monotonectally innovate cross-media<br> resources without seamless</span>
			                </div>
			              </div> <!-- /.row -->

			              <div class="row content-row">
			              	<div class="col-md-12">
								<div class="css-tab" role="tabpanel">

								  <!-- Nav tabs -->
								  <ul class="nav nav-tabs" role="tablist">
								    <li role="presentation" class="active"><a href="<?php echo base_url(); ?>assets/2/#secure" aria-controls="secure" role="tab" data-toggle="tab"><i class="flaticon-logistics15"></i> Secure</a></li>
								    <li role="presentation"><a href="<?php echo base_url(); ?>assets/2/#trackable" aria-controls="trackable" role="tab" data-toggle="tab"><i class="flaticon-logistics18"></i> Trackable</a></li>
								    <li role="presentation"><a href="<?php echo base_url(); ?>assets/2/#fast" aria-controls="fast" role="tab" data-toggle="tab"><i class="flaticon-logistics16"></i> Fast</a></li>
								    <li role="presentation"><a href="<?php echo base_url(); ?>assets/2/#reliable" aria-controls="reliable" role="tab" data-toggle="tab"><i class="flaticon-broken43"></i> Reliable</a></li>
								  </ul>

								  <!-- Tab panes -->
								  <div class="tab-content">
								    <div role="tabpanel" class="tab-pane active fade in" id="secure">
									    <div class="css-tab-content">
										    <div class="row">
										    	<div class="col-md-6">
										    		<img src="<?php echo base_url(); ?>assets/2/img/secure.png" alt="">
										    	</div><!-- /.col-md-6 -->

										    	<div class="col-md-6 content-text">
											    	<h3>Continually disintermediate</h3>

											    	<p>Credibly build virtual materials for fully researched paradigms. Authoritatively plagiarize long-term high-impact infomediaries with goal-oriented core competencies. Conveniently visualize process-centric applications through leading-edge testing procedures. Quickly build backend customer service for real-time metrics.</p> 

													<p>Efficiently transform an expanded array of methodologies rather than customized infomediaries.</p>
										    	</div><!-- /.col-md-6 -->
										    </div><!-- /.row -->
									    </div><!-- /.css-tab-content -->
								    </div>
								    <div role="tabpanel" class="tab-pane fade" id="trackable">
									    <div class="css-tab-content">
										    <div class="row">
										    	<div class="col-md-6">
										    		<img src="<?php echo base_url(); ?>assets/2/img/track.png" alt="">
										    	</div><!-- /.col-md-6 -->

										    	<div class="col-md-6 content-text">
											    	<h3>Continually disintermediate</h3>

											    	<p>Credibly build virtual materials for fully researched paradigms. Authoritatively plagiarize long-term high-impact infomediaries with goal-oriented core competencies. Conveniently visualize process-centric applications through leading-edge testing procedures. Quickly build backend customer service for real-time metrics.</p> 

													<p>Efficiently transform an expanded array of methodologies rather than customized infomediaries.</p>
										    	</div><!-- /.col-md-6 -->
										    </div><!-- /.row -->
									    </div><!-- /.css-tab-content -->
								    </div>
								    <div role="tabpanel" class="tab-pane fade" id="fast">
									    <div class="css-tab-content">
										    <div class="row">
										    	<div class="col-md-6">
										    		<img src="<?php echo base_url(); ?>assets/2/img/fast.png" alt="">
										    	</div><!-- /.col-md-6 -->

										    	<div class="col-md-6 content-text">
											    	<h3>Continually disintermediate</h3>

											    	<p>Credibly build virtual materials for fully researched paradigms. Authoritatively plagiarize long-term high-impact infomediaries with goal-oriented core competencies. Conveniently visualize process-centric applications through leading-edge testing procedures. Quickly build backend customer service for real-time metrics.</p> 

													<p>Efficiently transform an expanded array of methodologies rather than customized infomediaries.</p>
										    	</div><!-- /.col-md-6 -->
										    </div><!-- /.row -->
									    </div><!-- /.css-tab-content -->
								    </div>
								    <div role="tabpanel" class="tab-pane fade" id="reliable">
									    <div class="css-tab-content">
										    <div class="row">
										    	<div class="col-md-6">
										    		<img src="<?php echo base_url(); ?>assets/2/img/reliable.png" alt="">
										    	</div><!-- /.col-md-6 -->

										    	<div class="col-md-6 content-text">
											    	<h3>Continually disintermediate</h3>

											    	<p>Credibly build virtual materials for fully researched paradigms. Authoritatively plagiarize long-term high-impact infomediaries with goal-oriented core competencies. Conveniently visualize process-centric applications through leading-edge testing procedures. Quickly build backend customer service for real-time metrics.</p> 

													<p>Efficiently transform an expanded array of methodologies rather than customized infomediaries.</p>
										    	</div><!-- /.col-md-6 -->
										    </div><!-- /.row -->
									    </div><!-- /.css-tab-content -->
								    </div>
								  </div>
								</div><!-- /.css-tab -->
			              	</div><!-- /.col-md-12 -->
			              </div><!-- /.row -->

			        	</div><!-- /.container -->
			        </section>
			        <!-- why-us-setion end -->

			        <!-- testimonial-section start -->
					<section class="testimonial-section section-padding">
			            <div class="container text-center">
			              <div class="row">
			                <div class="col-xs-12">
			                  <h2 class="section-title">We are Trusted By</h2>
			                  <span class="section-sub">Monotonectally innovate cross-media<br> resources without seamless</span>
			                </div>
			              </div> <!-- /.row -->

			              <div class="row row-content">
			              	<div class="col-md-12">
								<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
								  <!-- Indicators -->
								  <ol class="carousel-indicators">
								    <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
								    <li data-target="#testimonial-carousel" data-slide-to="1"></li>
								    <li data-target="#testimonial-carousel" data-slide-to="2"></li>
								  </ol>

								  <!-- Wrapper for slides -->
								  <div class="carousel-inner" role="listbox">
								    <div class="item active">
								    	<div class="testimonial-content">
								    		<p>Progressively architect prospective imperatives through competitive communities. Professionally productize user<br> friendly networks with out-of-the-box mindshare. Energistically incubate functionalized best practices after 24/365<br> information. Dramatically restore end-to-end strategic theme areas.</p>
								    		<span class="client-title">- Deanna Lewis -</span>
								    	</div><!-- /.testimonial-content -->
								    </div>
								    <div class="item">
								    	<div class="testimonial-content">
								    		<p>Progressively architect prospective imperatives through competitive communities. Professionally productize user<br> friendly networks with out-of-the-box mindshare. Energistically incubate functionalized best practices after 24/365<br> information. Dramatically restore end-to-end strategic theme areas.</p>
								    		<span class="client-title">- Deanna Lewis -</span>
								    	</div><!-- /.testimonial-content -->
								    </div>
								    <div class="item">
								    	<div class="testimonial-content">
								    		<p>Progressively architect prospective imperatives through competitive communities. Professionally productize user<br> friendly networks with out-of-the-box mindshare. Energistically incubate functionalized best practices after 24/365<br> information. Dramatically restore end-to-end strategic theme areas.</p>
								    		<span class="client-title">- Deanna Lewis -</span>
								    	</div><!-- /.testimonial-content -->
								    </div>
								  </div>
								</div><!-- /.carousel -->
			              	</div><!-- /.col-md-12 -->
			              </div><!-- /.row -->

			              <hr>

			              <div class="partner-section">
				              <div class="row row-content">
				              	<div class="col-md-12">
									<div class="owl-carousel partner-carousel">
									    <div class="item">
									    	<a href="<?php echo base_url(); ?>assets/2/#"><img src="<?php echo base_url(); ?>assets/2/img/partner/p1.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="<?php echo base_url(); ?>assets/2/#"><img src="<?php echo base_url(); ?>assets/2/img/partner/p2.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="<?php echo base_url(); ?>assets/2/#"><img src="<?php echo base_url(); ?>assets/2/img/partner/p3.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="<?php echo base_url(); ?>assets/2/#"><img src="<?php echo base_url(); ?>assets/2/img/partner/p4.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="<?php echo base_url(); ?>assets/2/#"><img src="<?php echo base_url(); ?>assets/2/img/partner/p5.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="<?php echo base_url(); ?>assets/2/#"><img src="<?php echo base_url(); ?>assets/2/img/partner/p1.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="<?php echo base_url(); ?>assets/2/#"><img src="<?php echo base_url(); ?>assets/2/img/partner/p2.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="<?php echo base_url(); ?>assets/2/#"><img src="<?php echo base_url(); ?>assets/2/img/partner/p3.jpg" alt=""></a>
									    </div>
									    <div class="item">
									    	<a href="<?php echo base_url(); ?>assets/2/#"><img src="<?php echo base_url(); ?>assets/2/img/partner/p4.jpg" alt=""></a>
									    </div>
									</div>


							        <div class="partner-carousel-navigation">
							            <a class="prev"><i class="fa fa-angle-left"></i></a>
							            <a class="next"><i class="fa fa-angle-right"></i></a>
							        </div><!-- /.partner-carousel-navigation -->


				              	</div><!-- /.col-md-12 -->
				              </div><!-- /.row -->
			              </div><!-- /.partner-section -->
			            </div><!-- /.container -->
			        </section>
			        <!-- testimonial-section end -->
<!--/contact-->
	 <div class="section-contact" id="login">
	    <div class="container">
           <div class="contact-main">
				    <div class="col-md-6 contact-grid wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">
					
					<h2 class="section-title">Form Login</h2>
					<h3 class="info"> Register </h3>
						   <form method="POST" action="<?php echo base_url(); ?>index.php/frontend2/save" class="contact">
						   				<div class="row">
						   					<div class="col-md-8">
												<div class="form-group">
												    <label for="name">Username</label>
												    <input type="text" name="nama_kons" required class="form-control" placeholder="username" pattern="[A-Za-z0-9]{3,20}" title="username mengandung huruf, angka,tanpa spasi ">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-8">
											  <div class="form-group">
											    <label for="password">Password</label>
											    <input name="password" type="password" required class="form-control" placeholder="Password">
											  </div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="form-group">
												<label for="jenis_kelamin">Jenis Kelamin</label>
									 	<select name="jenis_kelamin" required class="form-control">
					                    	<option value="">-- Jenis Kelamin --</option>
					                    	<option value="Laki-Laki">Laki-Laki</option>
					                    	<option value="Perempuan">Perempuan</option>
					                    </select>
					                			</div>
					                		</div>
										</div>
										<div class="row">
						   					<div class="col-md-8">
												<div class="form-group">
												    <label for="no_telp">No Telepon</label>
												    <input type="text" name="no_telp" required class="form-control" placeholder="No Telepon">
												</div>
											</div>
										</div>
									<div class="row">
						   					<div class="col-md-8">
												<div class="form-group">
												    <label for="alamat_kons">Alamat</label>
												    <textarea required name="alamat_kons" class="form-control"></textarea>			
												</div>
											</div>
										</div>
										<div class="box-footer">
											<div class="row">
					<div class="col-md-5 control-label">
					<button type="submit" class="btn btn-info btn-xs"><i class="fa fa-check">&nbsp</i>Register</button></div>
					<div class="col-md-5 control-label">
					<button type="reset" class="btn btn-danger btn-xs"><i class="fa fa-close">&nbsp</i>Reset&nbsp&nbsp&nbsp&nbsp</button>
					</div>
				</div>
					</div>
						     </form>


					   </div>

					<div class="col-md-6 contact-in wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".5s">
					<br><br>	
					<h3 class="info"> Login </h3>
					<form action="<?php echo base_url(); ?>index.php/Frontend2/getlogindaftar" method="POST" class="contact">
										<div class="row">
						   					<div class="col-md-8">
												<div class="form-group">
												    <label for="name">Username</label>
												    <input type="text" name="nama_kons" required class="form-control" placeholder="username" pattern="[A-Za-z0-9]{3,20}" title="username mengandung huruf, angka,tanpa spasi ">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-8">
											  <div class="form-group">
											    <label for="password">Password</label>
											    <input name="password" type="password" required class="form-control" placeholder="Password">
											  </div>
											</div>
										</div>
					 <?php
                    $info = $this->session->flashdata('info');
                    if (!empty($info)) {
                        echo $info;
                    }
                ?>
					
					<div class="box-footer">
					<div class="row">
					<div class="col-md-5 control-label">
					<button type="submit" class="btn btn-info btn-xs"><i class="fa fa-check">&nbsp</i>Login</button></div>
					<div class="col-md-5 control-label">
					<button type="reset" class="btn btn-danger btn-xs"><i class="fa fa-close">&nbsp</i>Reset&nbsp&nbsp</button>
					</div>
					</div>
					</div>
					</form>
					
					</div>
					
						<div class="clearfix"> </div>
			      </div>
				   <!--map-->
				   <br><br><br>
			 </div>
		</div>
		<!--//contact-->
			        <!-- counter start -->
			        <section class="counter-section" data-stellar-background-ratio="0.5">
			        	<div class="container">
							<div class="row">
						        <div class="col-sm-4 col-xs-12">
						          <div class="counter-block">
						          	<span class="count-description flaticon-boat"><strong class="timer">799</strong>order delivered</span>
						          </div>
						        </div> 
						       <div class="col-sm-4 col-xs-12">
						          <div class="counter-block">
						          	<span class="count-description flaticon-international"><strong class="timer">19</strong>order delivered</span>
						          </div>
						        </div> 
						       <div class="col-sm-4 col-xs-12">
						          <div class="counter-block">
						          	<span class="count-description flaticon-compass"><strong class="timer">521</strong>order delivered</span>
						          </div>
						        </div> 
					      	</div> <!-- /.row -->
			        	</div><!-- /.container -->
			        </section><!-- /.counter-section -->
			        <!-- counter end -->
			         <!-- cta start -->
			        <section class="cta-section">
			        	<div class="container text-center">
			        		<a data-toggle="modal" data-target="#quoteModal" href="#" class="btn btn-primary quote-btn">Get a Quote</a>

							<!-- Modal -->
							<div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="quoteModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h3 class="modal-title" id="quoteModalLabel">Request a rate for the shipping of your goods.</h3>
							      </div>
							      <div class="modal-body">
									<form id="contactForm" action="sendemail.php" method="POST">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
												    <label for="name">Name</label>
												    <input id="name" name="name" type="text" class="form-control"  required="" placeholder="">
												</div>
											</div>
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="company">Company Name</label>
											    <input id="company" name="company" type="text" class="form-control" placeholder="">
											  </div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="phone">Phone Number</label>
											    <input id="phone" name="phone" type="text" class="form-control" placeholder="">
											  </div>
											</div>
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="email">Email address</label>
											    <input id="email" name="email" type="email" class="form-control" required="" placeholder="">
											  </div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="city">City Name</label>
											    <input id="city" name="city" type="text" class="form-control" placeholder="">
											  </div>
											</div>
											<div class="col-md-6">
											  <div class="form-group">
											    <label for="subject">Subject</label>
											    <input id="subject" name="subject" type="text" class="form-control" required="" placeholder="">
											  </div>
											</div>
										</div>
										<div class="form-group text-area">
											<label for="message">Your Message</label>
											<textarea id="message" name="message" class="form-control" rows="6" required="" placeholder=""></textarea>
										</div>

										<button type="submit" class="btn btn-primary">Send Message</button>
									</form>
							      </div>
							    </div>
							  </div>
							</div>

			        	</div><!-- /.container -->
			        </section><!-- /.cta-section -->
			        <!-- cta end -->
			        
			        
