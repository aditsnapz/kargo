   <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php 
              $key = "Bendahara";
              $this->db->where('jabatan',$key);
              $data = $this->db->get('pengguna'); 
              echo $jumlah = $data->num_rows();
              ?></h3>

              <p>ABSENSI BENDAHARA</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/laporan/bendahara" class="small-box-footer">Export PDF <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php 
              $key = "Pendidik";
              $this->db->where('jabatan',$key);
              $data = $this->db->get('pengguna'); 
              echo $jumlah = $data->num_rows();
              ?></h3>

              <p>ABSENSI PENDIDIK</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/laporan/pendidik" class="small-box-footer">Export PDF <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php 
              $data = $this->db->get('pendaftar'); 
              echo $jumlah = $data->num_rows();
              ?></h3>

              <p>ABSENSI PESERTA</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/laporan/peserta" class="small-box-footer">Export PDF <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      
        <!-- ./col -->
      </div>
      
    </section>