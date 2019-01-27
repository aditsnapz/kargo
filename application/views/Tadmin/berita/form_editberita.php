<?php 

	$id 		= $data->id;
	if($this->input->post('is_submit')){
		$judul 		= set_value('judul');
    $subjudul = set_value('subjudul');
		$isi 		  = set_value('isi');
    $tgl      = set_value('tgl');
		
	}else{
		$judul 		  = $data->judul;
    $subjudul   = $data->subjudul;
		$isi        = $data->isi;
    $tgl        = $data->tgl;
		
	}
?>

<div class="container-fluid">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Berita</h3>

              <a href="<?php echo base_url();?>index.php/berita" class="btn btn-info pull-right">Kembali</a>

            </div>
            <div><?=validation_errors() ?></div>
           <?=form_open_multipart('berita/update/' .$id,['class'=>'form-horizontal']) ?>
              <div class="box-body">
                <div class="form-group">
                  <label  class="col-md-2 control-label">Judul</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="judul"  placeholder="Judul Berita" value="<?= $judul ?>">
                  </div>
                </div>
                 <div class="form-group">
                  <label  class="col-md-2 control-label">Sub Judul</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control" name="subjudul" required placeholder="Sub Judul Berita" value="<?= $subjudul ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Isi Berita</label>
                  <div class="col-md-8">
                   <textarea type="text" class="form-control" rows="16" name="isi" required value="<?= $isi ?>"><?= $isi ?> </textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Gambar</label>
                  <div class="col-md-4">
                    <input type="file" class="form-control" name="image" >
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-md-2 control-label">Tanggal</label>
                  <div class="col-md-4">
                    <input type="date" class="form-control" name="tgl" required value="<?= $tgl ?>">
                  </div>
                </div>
              
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              	<div class="col-md-3 control-label">
              	<input type="hidden"  name="is_submit" value="1">
                <button type="submit" class="btn btn-success simpan" >Simpan</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </div>
         
              <!-- /.box-footer -->
          <?=form_close() ?>
          </div>

</div>