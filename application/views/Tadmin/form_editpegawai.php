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
                    <input type="text"  name="kode" class="form-control" value="<?php echo $kode;?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Nama Pegawai</label>

                  <div class="col-md-8">
                    <input type="text" class="form-control" name="nama" placeholder="sinar setyawan" required value="<?php echo $nama;?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Jabatan</label>

                  <div class="col-md-5">
                
                    <select name="jabatan" class="form-control" required>
                    	<option value="">-- Pilih Jabatan --</option>
                    	<option <?php if($jabatan=="Admin"){echo 'selected';} ?> value="Admin" >Admin</option>
                    	<option <?php if($jabatan=="Bendahara"){echo 'selected';} ?> value="Bendahara" >Bendahara</option>
                    	<option <?php if($jabatan=="Pimpinan"){echo 'selected';} ?> value="Pimpinan" >Pimpinan</option>
                    	<option <?php if($jabatan=="Pendidik"){echo 'selected';} ?> value="Pendidik" >Pendidik</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Password</label>

                  <div class="col-md-8">
                    <input type="password" class="form-control" name="password"  placeholder="silahkan isi jika ingin mengganti password baru">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Alamat</label>

                  <div class="col-md-8">
                    <input type="text" class="form-control" name="alamat" placeholder="jalan sendang utara" value="<?php echo $alamat; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Agama</label>

                  <div class="col-md-5">
                    <select name="agama" class="form-control">
                    	<option >-- Pilih Agama --</option>
                    	<option <?php if($agama=="Islam") {echo 'selected';} ?> value="Islam" >Islam</option>
                    	<option <?php if($agama=='Kristen'){echo 'selected'; } ?> value="Kristen">Kristen</option>
                    	<option <?php if($agama=='Katolik'){echo 'selected'; } ?> value="Katolik">Katolik</option>
                    	<option <?php if($agama=='Budha'){echo 'selected'; }  ?> value="Budha" >Budha</option>
                    	<option <?php if($agama=='Hindu'){echo 'selected'; }  ?> value="Hindu">Hindu</option>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Kota</label>

                  <div class="col-md-5">
                    <select name="kota" class="form-control">
                    	<option>-- Pilih Kota --</option>
                    	<option <?php if($kota=="Semarang"){echo 'selected';} ?> value="Semarang">Semarang</option>
                    	<option <?php if($kota=="Jakarta"){echo 'selected';} ?>  value="Jakarta">Jakarta</option>
                    	<option <?php if($kota=="Jogja"){echo 'selected';} ?>  value="Jogja">Jogja</option>
                    	<option <?php if($kota=="Bandung"){echo 'selected';} ?>  value="Bandung">Bandung</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Lulusan</label>

                  <div class="col-md-5">
                    <select name="lulusan" class="form-control" required>
                    	<option>-- Pilih Lulusan --</option>
                    	<option <?php if($lulusan=="SMA"){echo 'selected';} ?> value="SMA">SMA</option>
                    	<option <?php if($lulusan=="D3"){echo 'selected';} ?> value="D3">D3</option>
                    	<option <?php if($lulusan=="S1"){echo 'selected';} ?> value="S1">S1</option>
                    	<option <?php if($lulusan=="S2"){echo 'selected';} ?> value="S2">S2</option>
                    	<option <?php if($lulusan=="S3"){echo 'selected';} ?> value="S3">S3</option>
                    </select>
                  </div>
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              	<div class="col-md-3 control-label">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="Reset" class="btn btn-danger">Reset</button>
                </div>
              </div>
           <br>
              <!-- /.box-footer -->
            </form>
          </div>

</div>