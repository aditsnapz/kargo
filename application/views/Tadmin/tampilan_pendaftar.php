<br>
<div class="container-fluid">
	<div class="box box-default ">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Data Peserta Keseluruhan </b></h3>
            <div class="box-tools pull-right">
            <a href="<?php echo base_url(); ?>index.php/pendaftar/tambah" class="btn btn-primary" ><i class="fa fa-plus"></i> Tambah</a>
           
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
                  <th>Nama Pendaftar</th>
                  <th>Tgl lhr</th>
                  <th>Jenis Kelamin</th>
                  <th>Kemampuan</th>
                  <th>Agama</th>
                  <th>Alamat</th>
                
                  <th><center>Aksi</center></th>
                </tr>
                </thead>
                <tbody>
                 <?php
                $no=1;
               
                foreach ($data->result() as $row) {
                  ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row->nm_peserta; ?></td>
                  <td><?php echo $row->tgl; ?></td>
                  <td><?php echo $row->jk; ?></td>
                  <td><?php echo $row->kemampuan; ?></td>
                  <td><?php echo $row->agama; ?></td>
                  <td><?php echo $row->alamat; ?></td>
                  
                  <td>
          <a class="btn btn-primary btn-sm detail" href="<?php echo base_url(); ?>index.php/pendaftar/info/<?php echo $row->nm_peserta; ?>" ><i class="fa fa-user-o"></i> Detail</a>
					<a class="btn btn-success btn-sm edit" href="<?php echo base_url();?>index.php/pendaftar/edit/<?php echo $row->nm_peserta; ?>"><i class="fa fa-check"></i>Update</a>
					<a class="btn btn-danger btn-sm delete" href="<?php echo base_url(); ?>index.php/pendaftar/delete/<?php echo $row->nm_peserta; ?>" ><i class="fa fa-remove"></i>Delete</a>

                  </td>
                </tr>
                <?php $no++; } ?>
               
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
    <script>
        jQuery(document).ready(function(){
            $('.detail').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: "Apakah anda yakin?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        cancelButtonText: "Batalkan !",
                        confirmButtonText: "Ya, Lihat !",
                        
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
<script >
  $(function () {
    $("#dataku").DataTable(
      {
      "paging": true,
      "ordering": true,
      
    });
  });
</script>
