<br>
<div class="container-fluid">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah jual</h3>

              <a href="<?php echo base_url();?>index.php/jual" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/jual/simpan" >
              <div class="box-body">
                
                <div class="form-group">
                  <label class="col-md-2 control-label">id</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control"  name="id" value="<?php echo $id; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">No Nota</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="id_nota" value="<?php echo $id_nota; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">No Barang</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="id_barang" value="<?php echo $id_barang; ?>">
                  </div>
                </div>
                  <div class="form-group">
                  <label  class="col-md-2 control-label">Nama Barang</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="nama_barang" value="<?php echo $nama_barang; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Satuan</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="satuan" value="<?php echo $satuan; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Harga</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="harga_barang" value="<?php echo $harga_barang; ?>">
                  </div>
                </div>

                 <div class="form-group">
                  <label  class="col-md-2 control-label">Jumlah</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="jumlah_barang"  required value="<?php echo $jumlah_barang; ?>">
                  </div>
                </div>
                
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Diskon</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="diskon" value="<?php echo $diskon; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Total</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="total_harga" value="<?php echo $total_harga; ?>">
                  </div>
                </div>
                
          
               
                </div>
               
              
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="col-md-3 control-label">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </div>
           <br>
              <!-- /.box-footer -->
            </form>
          </div>

</div>