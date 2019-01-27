<br>
<div class="container-fluid">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Konsumen</h3>

              <a href="<?php echo base_url();?>index.php/konsumen" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal"  >
              <div class="box-body">
                
                <div class="form-group">
                  <label class="col-md-2 control-label">id konsumen</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="id_kons" placeholder="username anda" value="<?php echo $id_kons; ?>" readonly>
                  </div>
                  </div>
                
                 
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Nama</label>

                  <div class="col-md-5">
                     <label class="form-control" name="nama_kons"><?php echo $nama_kons;?></label>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Password</label>

                  <div class="col-md-5">
                     <label class="form-control" name="password"><?php echo $password;?></label>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Jenis Kelamin</label>

                  <div class="col-md-5">
                    <label class="form-control" name="jenis_kelamin"><?php echo $jenis_kelamin;?></label>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Alamat</label>

                  <div class="col-md-5">
                    <label class="form-control" name="alamat_kons"><?php echo $alamat_kons;?></label>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">No Telepon</label>

                  <div class="col-md-5">
                    <label class="form-control" name="no_telp"><?php echo $no_telp;?></label>
                  </div>
                </div>
                </div>
               
              
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="col-md-3 control-label">
                <button type="submit" class="btn btn-primary "><i class="fa fa-print"></i> Print</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </div>
           <br>
              <!-- /.box-footer -->
            </form>
          </div>

</div>