<br>
<div class="container-fluid">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Pegawai</h3>

              <a href="<?php echo base_url();?>index.php/absen_peserta" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/absen_peserta/simpan" >
              <div class="box-body">
                
                <div class="form-group">
                  <label class="col-md-2 control-label">Nama Pendaftar</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" pattern="[A-Za-z0-9]{3,20}" placeholder="Username anda" name="nama" value="<?php echo $nama; ?>" readonly>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Tanggal Lahir</label>

                  <div class="col-md-4">
                    <input type="date" class="form-control" name="tgl" value="<?php echo $tgl; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Jenis Kelamin</label>

                  <div class="col-md-5">
                    <select name="jk" class="form-control" required>
                      <option>-- Jenis Kelamin --</option>
                      <option <?php if($jk=="Laki-Laki"){echo 'selected';} ?> value="Laki-Laki">Laki-Laki</option>
                      <option  <?php if($jk=="Perempuan"){echo 'selected';} ?> value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Kemampuan</label>

                  <div class="col-md-5">
                     <select name="kemampuan" class="form-control" required>
                      <option>--  Level Kemampuan --</option>
                      <option <?php if($kemampuan=="Dasar"){echo 'selected';} ?> value="Dasar">Dasar</option>
                      <option <?php if($kemampuan=="Menengah"){echo 'selected';} ?> value="Menengah">Menengah</option>
                      <option <?php if($kemampuan=="Ahli"){echo 'selected';} ?> value="Ahli">Ahli</option>
                      <option <?php if($kemampuan=="Profesional"){echo 'selected';} ?> value="Profesional">Profesional</option>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Agama</label>

                  <div class="col-md-5">
                    <select name="agama" class="form-control">
                      <option>-- Pilih Agama --</option>
                      <option <?php if($agama=="Islam"){echo 'selected';}?> value="Islam">Islam</option>
                      <option <?php if($agama=="Kristen"){echo 'selected';}?> value="Kristen">Kristen</option>
                      <option <?php if($agama=="Katolik"){echo 'selected';}?> value="Katolik">Kristen</option>
                      <option <?php if($agama=="Budha"){echo 'selected';}?> value="Budha">Budha</option>
                      <option <?php if($agama=="Hindu"){echo 'selected';}?> value="Hindu">Hindu</option>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Alamat</label>

                  <div class="col-md-8">
                    <input type="text" class="form-control" name="alamat" placeholder="jalan sendang utara 3 No 28" required value="<?php echo $alamat; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Absen</label>

                  <div class="col-md-8">
                    <input type="text" class="form-control" name="absen" required value="<?php echo $absen; ?>">
                  </div>
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