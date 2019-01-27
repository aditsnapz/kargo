<br>
<div class="container-fluid">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah konsumen</h3>

              <a href="<?php echo base_url();?>index.php/konsumen" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/konsumen/simpan" >
              <div class="box-body">
                
                <div class="form-group">
                  <label class="col-md-2 control-label">id</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" pattern="[A-Za-z0-9]{3,20}"  name="id_kons" value="<?php echo $id_kons; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Nama</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="nama_kons" value="<?php echo $nama_kons; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Password</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Jenis Kelamin</label>
                  <div class="col-md-5">
                    <select name="jenis_kelamin" class="form-control" required>
                      <option>-- Jenis Kelamin --</option>
                      <option <?php if($jenis_kelamin=="Laki-Laki"){echo 'selected';} ?> value="Laki-Laki">Laki-Laki</option>
                      <option  <?php if($jenis_kelamin=="Perempuan"){echo 'selected';} ?> value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Alamat</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="alamat_kons"  required value="<?php echo $alamat_kons; ?>">
                  </div>
                </div>
                
                 <div class="form-group">
                  <label  class="col-md-2 control-label">No Telepon</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="no_telp" value="<?php echo $no_telp; ?>">
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