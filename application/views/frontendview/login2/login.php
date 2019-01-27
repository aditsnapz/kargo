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
      <h3 style="border-left:4px solid #D9534F; padding-left:5px; ">PT Domestic Andalan Kargo</h3>
     <p class="atur">  Domestic Andalan Cargo adalah perusahaan ekspedisi jasa transportasi, handling dan pengiriman barang via darat dan laut yang berdiri mulai 2009.

    Dengan berbekal pengalaman dan jaringan yang dimiliki kami terus mengembangkan diri mengikuti permintaan pasar serta memberikan pelayanan yang terbaik demi memberikan kepuasan kepada pelanggan dalam hal pengiriman barang melalui darat dan laut.

    Lingkup palayanan yang sangat complex mulai dari pengiriman consumer goods, project cargo, general cargo, personal effect, mobil, alat –alat berat keseluruh Indonesia dengan service LCL maupun FCL </p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3  style="border-left:4px solid #D9534F; padding-left:5px; ">  Dokumen</h3>
        <?php $this->load->view('frontendview/login2/barang') ?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3 style="border-left:4px solid #D9534F; padding-left:5px; ">Cart</h3>
             

    </div>
    <div id="menu3" class="tab-pane fade">
      <h3 style="border-left:4px solid #D9534F; padding-left:5px; ">Status Keuangan</h3>
      <?php $this->load->view('frontendview/login2/cart') ?>
    </div>
  </div>
        </div>
        <div class="col-md-6" style="margin-bottom: 20px;">
            <h2 style="color: #012554;margin-bottom: 0px;text-align: center;">Detail Konsumen</h2>
        </div>
        <div class="col-md-6" style="border-top: 2px solid #D9534F;">
            <table class="table">
            <?php
                        $text_cart_url  = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
                        $text_cart_url .= ' Shopping Cart: '. $this->cart->total_items() .' items';
                    ?>
                <?=anchor('Frontend2/cart', $text_cart_url)?>
            <?php  
            echo $this->session->userdata('username');
            ?>

            

                    <td colspan="3" style="text-align: right;">
                        <a href="<?php echo base_url();?>index.php/Frontend2/logout" class="btn btn-danger btn-flat">Logout</a>
                    </td>
                </tr>       

            </table>
      
        </div>  
    
    </div>
    

</div>

