<br>
<!--<script>
  jQuery(document).ready(function(){
    $('.simpan').on('click',function(){
      var string = $('#my-form').serialize();
      //alert(string);
      $.ajax({
     
          type  : 'POST',
          url   : '<?php echo site_url();?>/nota/simpan1',
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
              <h3 class="box-title">Tambah nota</h3>

              <a href="<?php echo base_url();?>index.php/nota" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" name="my-form" id="my-form" method="POST" action="<?php echo base_url(); ?>index.php/nota/simpan">
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-md-2 control-label">No Nota</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="id_nota" >
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Tanggal</label>
                  <div class="col-md-5">
                    <input type="date" class="form-control" name="tgl_nota">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">No Konsumen</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="id_kons">
                  </div>
                </div>
                 
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Total</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="total_nota" required>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Status</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="status">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Note</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="note">
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