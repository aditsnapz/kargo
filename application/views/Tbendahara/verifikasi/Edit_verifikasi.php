<br>
<div class="container-fluid">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Pegawai</h3>

              <a href="<?php echo base_url();?>index.php/Bendahara/Verifikasi" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/Bendahara/Verifikasi/simpan" >
              <div class="box-body">
                
                <div class="form-group">
                  <label class="col-md-2 control-label">Nama Pendaftar</label>
                  <div class="col-md-8">
                  <input type="text"  name="nama" class="form-control" value="<?php echo $nama;?>" readonly>
                  </div>
                </div>
                 
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Alamat</label>

                  <div class="col-md-8">
                    <input type="text"  name="alamat" class="form-control" value="<?php echo $alamat;?>" readonly>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Tagihan</label>

                  <div class="col-md-8">
                  <?php 
                    $this->db->where('kd_program',$program);
                    $query= $this->db->get('program_pelatihan');
                    foreach($query->result() as $row){
                      ?>
                    <input type="text" class="form-control" name="tagihan" placeholder="@example 80" required value="<?php echo $row->harga; ?>" readonly>
                  <?php } ?>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Status Bayar</label>

                  <div class="col-md-8">
                    <select class="form-control" name="status" required>
                      <option value="">Status bayar</option>
                      <option <?php if($status=="Terbayar"){echo 'selected';}?> value="Terbayar">Terbayar</option>
                      <option <?php if($status=="Belum"){echo 'selected';}?> value="Belum_Terbayar">Belum Terbayar</option>
                    </select>
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