<br>
<div class="container-fluid">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Pegawai</h3>

              <a href="<?php echo base_url();?>index.php/absensi" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/absensi/simpan" >
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
                  <label  class="col-md-2 control-label">Absen</label>

                  <div class="col-md-8">
                    <input type="text" class="form-control" name="absen" placeholder="isi kehadiran" value="<?php echo $absen;?>">
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