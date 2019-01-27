<div class="container-fluid">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah Berita</h3>

              <a href="<?php echo base_url();?>index.php/berita" class="btn btn-info pull-right">Kembali</a>

            </div>
            <div><?=validation_errors() ?></div>
           <?= form_open_multipart('berita/create',['class'=>'form-horizontal']) ?>
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-md-2 control-label">Judul</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="judul" required placeholder="Judul Berita" value="<?= set_value('judul') ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Sub Judul</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="subjudul" required placeholder="sub Judul Berita" value="<?= set_value('subjudul') ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Isi Berita</label>
                  <div class="col-md-8">
                   <textarea type="text" class="form-control textarea" rows="16" name="isi" required value="<?= set_value('isi') ?>"> </textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Gambar</label>
                  <div class="col-md-4">
                   <input type="file" class="form-control" name="image"  >
                  </div>
                </div>
                  <div class="form-group">
                  <label  class="col-md-2 control-label">Tanggal</label>
                  <div class="col-md-4">
                   <input type="date" class="form-control" name="tgl" required value="<?= set_value('tgl') ?>">
                  </div>
                </div>
              
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              	<div class="col-md-3 control-label">
                <button type="Submit" class="btn btn-success simpan" name="upload">Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </div>
         
              <!-- /.box-footer -->
     <?= form_close() ?>
          </div>

</div>