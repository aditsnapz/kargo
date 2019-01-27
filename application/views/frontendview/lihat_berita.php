

 <div class="news-section single" id="news">
  <?php 
 foreach ($data->result() as $row) :
 ?>
			<div class="container">
				 <h3 class="tittle"><span><?php echo $row->judul ?></span></h3>
				<div class="article-post">
				<div class="post-details s-page">
				<?php 

										$image = ['src'=>'uploads/'.$row->image,'class'=>' zoom-img','width'=>'1200','height'=>'500'];
										echo img($image); ?> >
				   
					<h2><?php echo $row->subjudul; ?></h2>
					<p><?php echo $row->isi; ?> </p>
				</div>
			</div>
		</div>
				<!--post-details-->	
	
			<section class="blog-section single-blog">
						<div class="container">
							<div class="row">
								<div class="posts-container">
									<div class="col-md-8 col-sm-8">
									<section class="comments-wrapper">
										<h2>Comments</h2>
													
										<ul class="media-list">
											 <li>
											 	<?php foreach($dataisi as $isi) : ?>
									            <div class="media">
											        <div class="media-left">
											        	
														<div class="comment-avatar">
															<a href="#">
																<img class="media-object" src="img/admin.jpg" alt="Author">
															</a>
														</div><!-- /.comment-avatar -->
											        </div><!-- /.media-left -->

											        <div class="media-body">
											        	<span class="comment-author"><i class="fa fa-user"></i><?=$isi->nama; ?></span>
											        	<span class="comment-date"><i class="fa fa-calendar"></i><?=$isi->tgl; ?></span>
											        	<?=$isi->waktu; ?>

										          		<div class="comment-body"><?=$isi->pesan;?></div><!-- /.comment-body -->

										          		<span class="comments-buttons"><a href="#">Reply</a></span>
										          	</div><!-- /.media-body -->
									          	</div><!-- /.media-->
									          	<?php endforeach; ?>
										    </li>
										</ul>
										<div class="comment-form">
											<h2>Add Comment</h2>
											<div class="comment-notes">Your email address will not be published. Required fields are marked *</div>
											<form action="<?php echo base_url();?>index.php/frontend2/simpan" id="my-form" name="my-form" method="POST">
												<div class="row">
												 	<div class="col-sm-6 col-xs-12">
												 		<div class="form-group">
														    <label>Name</label>
														    <input type="text" class="form-control" placeholder="" name="nama">
												  		</div>
												 	</div> <!-- /.col -->
												 	<div class="col-sm-6 col-xs-12">
												 		<div class="form-group">
														    <label >E-mail</label>
														    <input type="email" class="form-control"  placeholder="" name="email">
												 		 </div>
												 	</div> <!-- /.col -->
												</div><!-- /.row -->
											 	<div class="row">
											 		<div class="col-sm-12">
											 			<div class="form-group">
														    <label>Message</label>
														    <textarea class="form-control" rows="6"  placeholder="" name="pesan"></textarea>
														</div>
											 		</div> <!-- /.col -->
											 	</div><!-- /.row -->
											<button type="submit" class="btn btn-info btn-lg simpan" id="simpan">SEND</button>			
											
						
										</form>
										</div>
									</section>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php endforeach;?>
			</div>
			 