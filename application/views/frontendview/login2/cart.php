<div right-margin="100px">
<div class="row" >
					 <?php $products=$this->db->get('tabel_barang'); 
					 foreach ($products->result() as $row) {?>
					 						 <div class="col-md-4">
							 <div class="thumbnail">
								 <div class="caption">
									 <h4><?php echo $row->nama_barang;?></h4>
									 <h4><?php echo $row->satuan;?></h4>
									 <div class="row">
										 <div class="col-md-8">
											 <h4><?php echo 'Rp '.number_format($row->harga_barang);?></h4>
										  </div>
										</div>
										<p>
											<?=anchor('Frontend2/add_to_cart2/' . $row->id_barang, 'Buy' , [
												'class'	=> 'btn btn-primary',
												'role'	=> 'button'
											])?>
										</p>
									 </div>
								 </div>
							 </div>
						 <?php }?>
					 </div>
         </div>
