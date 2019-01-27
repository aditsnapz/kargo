<br>
<div class="container-fluid">
	<div class="box box-default ">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Berita FrontEnd</b></h3>
            <div class="box-tools pull-right">
            <?=anchor('berita/create',' Tambah',['class'=>'btn btn-primary btn-md fa fa-print']) ?>
           
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
          
            <div class="tengah">
   				<table id="dataku" class="table table-bordered table-hover">
                <thead class="atas"> 
                <tr>
                  <th>#</th>
                  <th><center>JUDUL</center></th>
                  <th><center>ISI</center></th>
                  <th><center>GAMBAR</center></th>
                  <th><center>AKSI</center></th>
                </tr>
                </thead>
                <tbody>
                 <?php
                 $no=1;
                foreach($data as $row) : ?>
                 
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td width="120"><?=$row->judul ?></td>
                  <td width="430"><?=$row->isi ?></td>
                  <td ><center><?php 
                  $image = ['src'=>'uploads/'.$row->image,'width'=>'250','height'=>'99'];
                  echo img($image);?>
                    </center>
                  </td>
                  <td>
                  <?=anchor('berita/update/' . $row->id , ' Edit' ,['class'=>'btn btn-success fa fa-check edit']) ?>
                  <?=anchor('berita/delete/' . $row->id ,'Delete',['class'=>'btn btn-danger fa fa-remove delete']) ?>

                  </td>
                </tr>
                <?php endforeach; ?>
               
                </tbody>
            
               
              </table>
            </div> 
         
          </div>
          <!-- /.row -->
        </div>
    </div>       
</div>
<script>
        jQuery(document).ready(function(){
            $('.delete').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: "Apakah anda yakin?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        cancelButtonText: "Batalkan !",
                        confirmButtonText: "Ya, hapus !",
                        
                        closeOnConfirm: false,
                        closeOnCancel: false,
                      },
                      function(isConfirm){
                         if (isConfirm) {
                            swal("Deleted!", "Your imaginary file has been deleted.", "success");
                            window.location.href=getLink
                          } else {
                              swal("Cancelled", "Your imaginary file is safe :)", "error");
                          }
                        
                    });
                return false;
            });
        });
    </script>
    <script>
        jQuery(document).ready(function(){
            $('.edit').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: "Apakah anda yakin?",
                        type: "warning",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        confirmButtonColor: "#DD6B55",
                        cancelButtonText: "Cancel !",
                        confirmButtonText: "Ya , Update !",
                        closeOnCancel: false,
                        showLoaderOnConfirm:true,
                        
                      },
                      function(isConfirm){
                         if (isConfirm) {
                          setTimeout(function(){
                            swal("Update!", "Update Succes", "success");
                          },2000);
                          window.location.href=getLink
                          }
                            
                           else {
                              swal("Cancelled", "Cancel is Okay:)", "error");
                          }
                        
                    });
                return false;
            });
        });
    </script>
<script >
  $(function () {
    $("#dataku").DataTable(
      {
      "paging": true,
      "ordering": true,
      
    });
  });
</script>
