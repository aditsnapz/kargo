   <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php $data = $this->db->get('pengguna'); 
              echo $jumlah = $data->num_rows();
              ?></h3>

              <p>LAPORAN KEUANGAN</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo base_url();?>index.php/laporan/keuangan" class="small-box-footer">EXPORT PDF <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
 
        <!-- ./col -->
      </div>
      
    </section>