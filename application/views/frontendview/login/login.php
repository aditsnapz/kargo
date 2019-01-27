<br>
<div class="container">
  <div class="row">
   <div class="col-md-6 ">

     <h2 style="margin-bottom: 20px;">Profiles</h2>

          
  
  <ul class="nav nav-tabs" style="border-top: 2px solid #D9534F;">
    <li class="active"><a data-toggle="pill" href="#home">HOME</a></li>
    <li><a data-toggle="pill" href="#menu1">DOKUMEN</a></li>
    <li><a data-toggle="pill" href="#menu2">ABOUT</a></li>
    <li><a data-toggle="pill" href="#menu3">KEUANGAN</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3 style="border-left:4px solid #D9534F; padding-left:5px; ">Lembaga Belva</h3>
      <p class="atur">Lembaga Kursus dan Pelatihan (LKP) Lembaga BELVA adalah penyelenggara proses belajar mengajar dalam hal menjahit yang telah berdiri sejak tanggal 20 Agustus 1999 dengan nama LKP Lembaga BELVA, dengan ijin penyelenggaraan pelatihan dari Departemen Tenaga Kerja dengan No.ijin B.01/W.10/IV/1999 dengan adanya otonomi daerah pada tanggal 12 Agustus 2003</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3  style="border-left:4px solid #D9534F; padding-left:5px; ">  Dokumen</h3>
       <table class="table">
            <?php 
            foreach($data->result() as $row){
            ?>
                <tr>
                    <td style="font-weight:bold;" width="30%">TUGAS</td>
                    <td style="font-weight:bold;" width="1%">:</td>
                    <td><?php echo $row->tugas; ?></td>
       </tr>
       <tr>
                    <td style="font-weight:bold;" width="30%">UTS</td>
                    <td style="font-weight:bold;" width="1%">:</td>
                    <td><?php echo $row->uts; ?></td>
       </tr>
       <tr>
                    <td style="font-weight:bold;" width="30%">UAS</td>
                    <td style="font-weight:bold;" width="1%">:</td>
                    <td><?php echo $row->uas; ?></td>
       </tr>
       <tr>
                    <td style="font-weight:bold;" width="30%">Nilai Akhir</td>
                    <td style="font-weight:bold;" width="1%">:</td>
                    <td><?php echo $row->na; ?></td>
       </tr>
       <?php }; ?>    

            </table>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3 style="border-left:4px solid #D9534F; padding-left:5px; ">About</h3>
     
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3 style="border-left:4px solid #D9534F; padding-left:5px; ">Status Keuangan</h3>
      <table class="table">
            <?php 
            foreach($data->result() as $row){
            ?>
                <tr>
                    <td style="font-weight:bold;" width="30%">Tagihan</td>
                    <td style="font-weight:bold;" width="1%">:</td>
                    <td><?php echo $row->tagihan; ?></td>
       </tr>
       <tr>
                    <td style="font-weight:bold;" width="30%">Status Bayar</td>
                    <td style="font-weight:bold;" width="1%">:</td>
                    <td>
                    <?php if($row->status_bayar=="Terbayar")
                    {
                        echo '<font color="green" style="font-size:15px;">';
                        echo 'Terbayar Full Payment';  
                        echo '</font>';
                    } 
                    else{
                        echo '<font color="red">';
                        echo 'Belum Terbayar';  
                        echo '</font>';
                    }
                    ?>
                    </td>
       </tr>
       <?php }; ?>    

            </table>
            <div class="alert alert-danger">
           <table class="table table-hover">
               <tr><td>Catatan: </td></tr>
               <tr><td>1. Informasi diatas adalah tagihan untuk syarat INPUT KRS semester Genap tahun 2016/2017. </td></tr>
               <tr><td>2. Informasi akan berubah 1 minggu menjelang ( Input KRS ).</td></tr>
           </table>
       </div>
    </div>
  </div>
        </div>
        <div class="col-md-6" style="margin-bottom: 20px;">
            <h2 style="color: #012554;margin-bottom: 0px;text-align: center;">Detail Peserta</h2>
        </div>
        <div class="col-md-6" style="border-top: 2px solid #D9534F;">
            <table class="table">
            <?php 
            foreach($data->result() as $row){
            ?>
                <tr>
                    <td style="font-weight:bold;" width="30%">Nama</td>
                    <td style="font-weight:bold;" width="1%">:</td>
                    <td><?php echo $row->nm_peserta; ?></td>
                </tr>
               
                <tr>
                    <td style="font-weight:bold;">Pengajar</td>
                    <td style="font-weight:bold;">:</td>
                    <td><?php echo $row->nama_p; ?></td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Status</td>
                    <td style="font-weight:bold;">:</td>
                    <td>Aktif</td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Nilai Akhir</td>
                    <td style="font-weight:bold;">:</td>
                    <td><?php echo $row->na; ?></td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Tgl lahir</td>
                    <td style="font-weight:bold;">:</td>
                    <td><?php echo $row->tgl; ?></td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Alamat Semarang</td>
                    <td style="font-weight:bold;">:</td>
                    <td><?php echo $row->alamat; ?></td>
                </tr>
               
                <tr>
                    <td style="font-weight:bold;">Kemampuan</td>
                    <td style="font-weight:bold;">:</td>
                    <td><?php echo $row->kemampuan; ?></td>
                </tr>
                <tr>
                    <td style="font-weight:bold;">Agama</td>
                    <td style="font-weight:bold;">:</td>
                    <td><?php echo $row->agama; ?></td>
                </tr>
                <?php }; ?>
                <tr>
                    <td colspan="3" style="text-align: right;">
                        <button class="btn btn-danger btn-md"><a href="<?php echo base_url();?>index.php/Frontend2/logout">Logout</a></button>
                    </td>
                </tr>       

            </table>
      
        </div>  
    
    </div>
    

</div>

