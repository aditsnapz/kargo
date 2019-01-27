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
            <form class="form-horizontal"  >
              <div class="box-body">
                
                <div class="form-group">
                  <label class="col-md-2 control-label">id nota</label>
                  <div class="col-md-5">
                    <input type="text" class="form-control" name="id_nota" value="<?php echo $id_nota; ?>" readonly>
                  </div>
                  </div>
                
                 
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Tanggal</label>

                  <div class="col-md-5">
                     <label class="form-control" name="tgl_nota"><?php echo $tgl_nota;?></label>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">No Konsumen</label>

                  <div class="col-md-5">
                     <label class="form-control" name="id_kons"><?php echo $id_kons;?></label>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Total</label>

                  <div class="col-md-5">
                    <label class="form-control" name="total_nota"><?php echo $total_nota;?></label>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Status</label>

                  <div class="col-md-5">
                    <label class="form-control" name="status"><?php echo $status;?></label>
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Note</label>

                  <div class="col-md-5">
                    <label class="form-control" name="no_telp"><?php echo $note;?></label>
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