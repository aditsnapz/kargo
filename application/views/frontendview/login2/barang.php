 <table id="dataku" class="table table-bordered table-hover">
                <thead class="atas"> 
                <tr>
                  <th>id</th>
                  <th>Nama Barang</th>
                  <th>Satuan</th>
                  <th>Harga</th>
                  <th>Stok</th>
                </tr>
              </thead>
              <tbody>
                 <?php
                
                $data=$this->db->get('tabel_barang');
                foreach ($data->result() as $row) {
                  ?>
                <tr>
                  <td><?php echo $row->id_barang; ?></td>
                  <td><?php echo $row->nama_barang; ?></td>
                  <td><?php echo $row->satuan; ?></td>
                  <td><?php echo $row->harga_barang; ?></td>
                  <td><?php echo $row->stok; ?></td>
                </tr>
                <?php  } ?>
               
                </tbody>

            </table>