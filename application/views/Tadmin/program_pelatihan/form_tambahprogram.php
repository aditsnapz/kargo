<div class="container-fluid">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Program Pelatihan</h3>

              <a href="<?php echo base_url();?>index.php/program" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" name="my-form" id="my-form" method="POST" action="<?php echo base_url(); ?>index.php/program/simpan">
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-md-2 control-label">Progam Pelatihan</label>
                  <div class="col-md-8">
                  <input type="hidden" name="kd_program" class="form-control">
                    <input type="text" class="form-control" name="program" required placeholder="Isi nama program pelatihan">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Harga</label>
                  <div class="col-md-8">
                  	<input type="text" class="form-control" name="harga" required placeholder="Isi harga program pelatihan">
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