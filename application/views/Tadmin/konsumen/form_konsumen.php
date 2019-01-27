<br>
<!--<script>
  jQuery(document).ready(function(){
    $('.simpan').on('click',function(){
      var string = $('#my-form').serialize();
      //alert(string);
      $.ajax({
     
          type  : 'POST',
          url   : '<?php echo site_url();?>/konsumen/simpan1',
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
              <h3 class="box-title">Tambah konsumen</h3>

              <a href="<?php echo base_url();?>index.php/konsumen" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" name="my-form" id="my-form" method="POST" action="<?php echo base_url(); ?>index.php/konsumen/simpan">
              <div class="box-body">
                <div class="form-group">
                <?php  $id_kons=0;
  $query = $this->db->get('tabel_kons');
      if ($query->num_rows()>0) {
        foreach($query->result() as $row ){
          $id_kons++;
        }
      }
  ?>
                  <label  class="col-md-2 control-label">id</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="id_kons" placeholder="username anda" value="<?php echo $id_kons; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Nama</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="nama_kons">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Password</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="password">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Jenis Kelamin</label>

                  <div class="col-md-5">
                    <select name="jenis_kelamin" class="form-control" required>
                    	<option value="">-- Jenis Kelamin --</option>
                    	<option value="Laki-Laki">Laki-Laki</option>
                    	<option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Alamat</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="alamat_kons" placeholder="jalan cinta 11 no.8 Banyumanik,Semarang " required>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">No Telepon</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="no_telp">
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