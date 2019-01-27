<div id="main">

						<!-- Post -->
						<?php 
							
							foreach ($data as $row): ?>
							<article class="post">
							
								
								
								<header>
									<div class="title">
										<h2><?php echo $row->judul ?></h2>
										<p><?php echo $row->subjudul?></p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01"><?php echo $row->tgl;?></time>
										<a href="#" class="author"><span class="name">Sinar Setyawan</span> <?php 

										$image = ['src'=>'uploads/'.$row->image];
										echo img($image); ?> ></a>
									</div>
								</header>
								<a href="#" class="image featured"> <?php 

										$image = ['src'=>'uploads/'.$row->image,'height'=>'350s'];
										echo img($image); ?></a>
								
								<footer>
									<ul class="actions">
										<li>
										<?=anchor('frontend2/lihat/' . $row->id , ' Continue Reading' ,['class'=>'btn btn-success fa fa-check button big']) ?>
										</li>
									</ul>
									
								</footer>
							</article>
							<?php endforeach; ?>
						<!-- Post -->

						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button big previous">Previous Page</a></li>
								<li><a href="#" class="button big next">Next Page</a></li>
							</ul>

					</div>