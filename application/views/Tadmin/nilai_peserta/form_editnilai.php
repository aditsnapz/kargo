<div class="container-fluid">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Set Jadwal Mengajar</h3>

              <a href="<?php echo base_url();?>index.php/nilai_peserta" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" name="my-form" id="my-form" method="POST" action="<?php echo base_url(); ?>index.php/nilai_peserta/simpan">
              <div class="box-body">
               
                  <div class="form-group">
                  <label  class="col-md-2 control-label">Nama Peserta</label>
                  <div class="col-md-8">
                    <select name="peserta" required class="form-control">
                                <option value="">-- Pilih Peserta --</option>
                                <?php 
                                  $pendi = $this->db->get('pendaftar');
                                  foreach ($pendi->result() as $row) {
                                ?>
                                <option <?php if ($peserta=="$row->nm_peserta"){echo 'selected';} ?> value="<?php echo $row->nm_peserta; ?>"><?php echo $row->nm_peserta; ?></option>
                              <?php } ?>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Pendidik</label>
                  <div class="col-md-8">
                   <select name="pendidik" required class="form-control" readonly>
                                <option hidden>-- Pilih Pendidik --</option>
                              <?php 
                             
                                  $this->db->where('kd_jabatan',$pendidik);
                                  $pend = $this->db->get('pengguna');
                                  foreach ($pend->result() as $row) {
                                ?>
                                <option value="<?php echo $row->kd_jabatan; ?>" <?php if($pendidik=="$row->kd_jabatan"){echo 'selected';} ?> > <?php echo $row->nama_p; ?> </option>
                              <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Nilai Tugas</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="tugas" placeholder="isi nilai uts" value="<?php echo $tugas; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Nilai UTS</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="uts" placeholder="isi nilai uts" value="<?php echo $uts; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Nilai UAS</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="uas" placeholder="isi nilai uas" value="<?php echo $uas;?>">
                  </div>
                </div>

               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              	<div class="col-md-3 control-label">
                <button type="submit" class="btn btn-success simpan" id="simpan">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </div>
         
              <!-- /.box-footer -->
            </form>
          </div>

</div>