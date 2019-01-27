<br>
<div class="container-fluid">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Pegawai</h3>

              <a href="<?php echo base_url();?>index.php/pegawai" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/pegawai/simpan" >
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-md-2 control-label">Kode Pegawai</label>

                  <div class="col-md-8">
                    <input type="text"  name="kode" class="form-control" placeholder="@A2-12" required>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Nama Pegawai</label>

                  <div class="col-md-8">
                    <input type="text" class="form-control" name="nama" placeholder="sinar setyawan" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Jabatan</label>

                  <div class="col-md-5">
                    <select name="jabatan" class="form-control" required>
                    	<option>-- Pilih Jabatan --</option>
                    	<option value="Admin">Admin</option>
                    	<option value="Bendahara">Bendahara</option>
                    	<option value="Pimpinan">Pimpinan</option>
                    	<option value="Pendidik">Pendidik</option>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Password</label>

                  <div class="col-md-8">
                    <input type="password" class="form-control" name="password" required >
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Alamat</label>

                  <div class="col-md-8">
                    <input type="text" class="form-control" name="alamat" placeholder="jalan sendang utara">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Agama</label>

                  <div class="col-md-5">
                    <select name="agama" class="form-control">
                    	<option>-- Pilih Agama --</option>
                    	<option value="Islam">Islam</option>
                    	<option value="Kristen">Kristen</option>
                    	<option value="Katolik">Kristen</option>
                    	<option value="Budha">Budha</option>
                    	<option value="Hindu">Hindu</option>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Kota</label>

                  <div class="col-md-5">
                    <select name="kota" class="form-control">
                    	<option>-- Pilih Kota --</option>
                    	<option value="Semarang">Semarang</option>
                    	<option value="Jakarta">Jakarta</option>
                    	<option value="Jogja">Jogja</option>
                    	<option value="Bandung">Bandung</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Lulusan</label>

                  <div class="col-md-5">
                    <select name="lulusan" class="form-control" required>
                    	<option>-- Pilih Lulusan --</option>
                    	<option value="SMA">SMA</option>
                    	<option value="D3">D3</option>
                    	<option value="S1">S1</option>
                    	<option value="S2">S2</option>
                    	<option value="S3">S3</option>
                    </select>
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