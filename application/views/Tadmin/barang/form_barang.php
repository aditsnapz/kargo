<br>
<!--<script>
  jQuery(document).ready(function(){
    $('.simpan').on('click',function(){
      var string = $('#my-form').serialize();
      //alert(string);
      $.ajax({
     
          type  : 'POST',
          url   : '<?php echo site_url();?>/barang/simpan1',
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
              <h3 class="box-title">Tambah barang</h3>

              <a href="<?php echo base_url();?>index.php/barang" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" name="my-form" id="my-form" method="POST" action="<?php echo base_url(); ?>index.php/barang/simpan">
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-md-2 control-label">id</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="id_barang" >
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Nama</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="nama_barang">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Satuan</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="satuan">
                  </div>
                </div>
                 
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Harga</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="harga_barang" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Stok</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="stok">
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