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
                                $key = "3";
                                    $nilai = "0";
                                  $this->db->where('tugas',$nilai);
                                  $this->db->where('kd_program',$key);
                                  $pendidik = $this->db->get('pendaftar');
                                  foreach ($pendidik->result() as $row) {
                                ?>
                                <option value="<?php echo $row->nm_peserta; ?>"><?php echo $row->nm_peserta; ?></option>
                              <?php } ?>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Pendidik</label>
                  <div class="col-md-8">
                   <select name="pendidik" required class="form-control">
                                <option value="">-- Pilih Pendidik --</option>
                                <?php 
                                  $key = "pendidik";
                                  $this->db->where('jabatan',$key);
                                  $pendidik = $this->db->get('pengguna');
                                  foreach ($pendidik->result() as $row) {
                                ?>
                                <option value="<?php echo $row->kd_jabatan; ?>"><?php echo $row->nama_p; ?></option>
                              <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Nilai Tugas</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="tugas" pattern="[0-9]{1,3}" title="isi nilai tugas" required>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Nilai UTS</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="uts" placeholder="isi nilai uts">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Nilai UAS</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="uas" placeholder="isi nilai uas">
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