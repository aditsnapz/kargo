
<br>
<div class="container-fluid">
	<div class="box box-default ">
        <div class="box-header with-border">
          <h3 class="box-title"><b>Data Pegawai Keseluruhan </b></h3>
            <div class="box-tools pull-right">
            <a href="<?php echo base_url(); ?>index.php/pegawai/tambah" class="btn btn-primary" ><i class="fa fa-plus"></i> Tambah</a>
           
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
                  <th>Kode Jabatan</th>
                  <th>Nama Pegawai</th>
                  <th>Jabatan</th>
                  <th>Alamat</th>
                  <th>Agama</th>
                  <th>Kota</th>
                  <th>lulusan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                 <?php
                $no=1;
               
                foreach ($data->result() as $row) {
                  ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row->kd_jabatan; ?></td>
                  <td><?php echo $row->nama_p; ?></td>
                  <td><?php echo $row->jabatan; ?></td>
                  <td><?php echo $row->alamat; ?></td>
                  <td><?php echo $row->agama; ?></td>
                  <td><?php echo $row->kota; ?></td>
                  <td><?php echo $row->lulusan; ?></td>
                  <td>
					<a class="btn btn-success btn-sm edit-link" href="<?php echo base_url();?>index.php/pegawai/edit/<?php echo $row->kd_jabatan; ?>"><i class="fa fa-check"></i>Update</a>
					<a class="btn btn-danger btn-sm delete-link" href="<?php echo base_url(); ?>index.php/pegawai/delete/<?php echo $row->kd_jabatan;?>" ><i class="fa fa-check "></i>Delete</a>

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
            $('.edit-link').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: "Apakah anda yakin?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        cancelButtonText: "Tidak, Batalkan !",
                        confirmButtonText: "Ya, Update !",
                        
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
            $('.delete-link').on('click',function(){
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

<script >
  $(function () {
    $("#dataku").DataTable(
      {
      "paging": true,
      "ordering": true,
      
    });
  });
</script>
