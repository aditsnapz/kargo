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
              <h3 class="box-title">Set Jadwal Mengajar</h3>

              <a href="<?php echo base_url();?>index.php/jadwal" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" name="my-form" id="my-form" enctype="multipart/form-data" method="POST" action="<?php echo base_url(); ?>index.php/jadwal/simpan">
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-md-2 control-label">Atur Jadwal</label>
                  
                  <input type="hidden" name="id_jadwal" class="form-control" value="">
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="jadwal" required placeholder="Atur Jadwal Mengajar">
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