<br>
<div class="container-fluid">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Pegawai</h3>

              <a href="<?php echo base_url();?>index.php/pendaftar" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal"  >
              <div class="box-body">
                
                <div class="form-group">
                  <label class="col-md-2 control-label">Nama Pendaftar</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" pattern="[A-Za-z0-9]{3,20}" placeholder="Username anda" name="nama" value="<?php echo $nama; ?>" readonly>
                  </div>
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
                                <option <?php if($program=="$row->kd_program"){echo 'selected';}?>  value="<?php echo $row->kd_program; ?>"><?php echo $row->program_pelatihan; ?></option>
                              <?php } ?>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label class="col-md-2 control-label">Jadwal</label>
                  <div class="col-md-5">
                    <select name="jadwal" class="form-control" >
                     <option value="">-- Pilih jadwal --</option>
                                <?php 
                               
                                  $pendi = $this->db->get('jadwal');
                                  foreach ($pendi->result() as $row) {
                                ?>
                                <option <?php if($jadwal=="$row->id_jadwal"){echo 'selected';}?> value="<?php echo $row->id_jadwal; ?>"><?php echo $row->jadwal; ?></option>
                              <?php } ?>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Tanggal Lahir</label>
                  <div class="col-md-4">
                  <label class="control-label" name="tgl"><?php echo $tgl; ?></label>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Jadwal Hari</label>

                  <div class="col-md-5">
                    <select name="hari" class="form-control" required>
                      <option value="">-- Pilih Hari --</option>
                      <option <?php if($hari=="senin"){echo 'selected';} ?> value="senin">Senin & Rabu</option>
                      <option <?php if($hari=="selasa"){echo 'selected';} ?> value="selasa">Selasa & Kamis</option>
                      <option <?php if($hari=="rabu"){echo 'selected';} ?> value="rabu">Rabu & Jumat</option>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Jenis Kelamin</label>

                  <div class="col-md-5">
                     <label class="form-control" name="jk"><?php echo $jk;?></label>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Kemampuan</label>

                  <div class="col-md-5">
                     <label class="form-control" name="Kemampuan"><?php echo $kemampuan;?></label>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Agama</label>

                  <div class="col-md-5">
                    <label class="form-control" name="agama"><?php echo $agama;?></label>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Alamat</label>

                  <div class="col-md-8">
                    <label class="control-label" name="alamat"><?php echo $alamat;?></label>
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
                    <input type="text" class="form-control" name="tagihan" placeholder="@example 80" required value="Rp.<?php echo $row->harga; ?>" readonly>
                  <?php } ?>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Status Bayar</label>

                  <div class="col-md-8">
                    <select class="form-control" name="status" required>
                    	<option value="">Status bayar</option>
                    	<option <?php if($status=="Terbayar"){echo 'selected';}?> value="Terbayar">Terbayar</option>
                    	<option <?php if($status=="Belum_Terbayar"){echo 'selected';}?> value="Belum_Terbayar">Belum Terbayar</option>
                    </select>
                  </div>
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