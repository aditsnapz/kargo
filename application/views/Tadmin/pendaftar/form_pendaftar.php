<br>
<!--<script>
  jQuery(document).ready(function(){
    $('.simpan').on('click',function(){
      var string = $('#my-form').serialize();
      //alert(string);
      $.ajax({
     
          type  : 'POST',
          url   : '<?php echo site_url();?>/pendaftar/simpan1',
          data  : string,
          success : function(data){
             swal("Update!", "Update Succes", "success");
          }
      })
    })
  }
    );
</script>-->
<div class="container-fluid">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Pendaftar</h3>

              <a href="<?php echo base_url();?>index.php/pendaftar" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" name="my-form" id="my-form" method="POST" action="<?php echo base_url(); ?>index.php/pendaftar/simpan">
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-md-2 control-label">Nama Pendaftar</label>

                  <div class="col-md-8">
                    <input type="text" class="form-control" pattern="[A-Za-z0-9]{3,20}" name="nama" required title="username mengandung huruf, angka,tanpa spasi " placeholder="Username anda" >
                  </div>
                </div>
                  <div class="form-group">
                  <label class="col-md-2 control-label">Program</label>
                  <div class="col-md-5">
                    <select name="program" class="form-control">
                     <option value="">-- Pilih Program --</option>
                                <?php 
                               
                                  $pendi = $this->db->get('program_pelatihan');
                                  foreach ($pendi->result() as $row) {
                                ?>
                                <option value="<?php echo $row->kd_program; ?>"><?php echo $row->program_pelatihan; ?></option>
                              <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-2 control-label">Jadwal</label>
                  <div class="col-md-5">
                    <select name="jadwal" class="form-control">
                     <option value="">-- Pilih jadwal --</option>
                                <?php 
                               
                                  $pendi = $this->db->get('jadwal');
                                  foreach ($pendi->result() as $row) {
                                ?>
                                <option value="<?php echo $row->id_jadwal; ?>"><?php echo $row->jadwal; ?></option>
                              <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Jadwal Hari</label>

                  <div class="col-md-5">
                    <select name="hari" class="form-control" required>
                      <option value="">-- Pilih Hari --</option>
                      <option value="senin">Senin & Rabu</option>
                      <option value="selasa">Selasa & Kamis</option>
                      <option value="rabu">Rabu & Jumat</option>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Tanggal Lahir</label>

                  <div class="col-md-3">
                    <input type="date" class="form-control" name="tgl">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Jenis Kelamin</label>

                  <div class="col-md-5">
                    <select name="jk" class="form-control" required>
                    	<option value="">-- Jenis Kelamin --</option>
                    	<option value="Laki-Laki">Laki-Laki</option>
                    	<option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Kemampuan</label>

                  <div class="col-md-8">
                     <select name="kemampuan" class="form-control" required>
                    	<option>--  Level Kemampuan --</option>
                    	<option value="Dasar">Dasar</option>
                    	<option value="Menengah">Menengah</option>
                    	<option value="Ahli">Ahli</option>
                    	<option value="Profesional">Profesional</option>
                    </select>
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
                  <label  class="col-md-2 control-label">Alamat</label>

                  <div class="col-md-8">
                    <input type="text" class="form-control" name="alamat" placeholder="jalan sendang utara 3 No 28" required>
                  </div>
                </div>
                
                <div class="form-group">
                  

                  <div class="col-md-8">
                    <input type="hidden" class="form-control" name="tagihan" placeholder="jalan sendang utara 3 No 28" required>
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