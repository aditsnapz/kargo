<br>
<div class="container-fluid">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah nota</h3>

              <a href="<?php echo base_url();?>index.php/nota" class="btn btn-info pull-right">Kembali</a>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>index.php/nota/simpan" >
              <div class="box-body">
                
                <div class="form-group">
                  <label class="col-md-2 control-label">id</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control"  name="id_nota" value="<?php echo $id_nota; ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Tanggal</label>

                  <div class="col-md-5">
                    <input type="date" class="form-control" name="tgl_nota" value="<?php echo $tgl_nota; ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">No Konsumen</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="id_kons" value="<?php echo $id_kons; ?>">
                  </div>
                </div>
                 
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Total</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="total_nota"  required value="<?php echo $total_nota; ?>">
                  </div>
                </div>
                
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Status</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="status" value="<?php echo $status; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Note</label>

                  <div class="col-md-5">
                    <input type="text" class="form-control" name="note" value="<?php echo $note; ?>">
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