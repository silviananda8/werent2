<?php foreach($detail as $dt):?>
     <section class="bg-light pt-2 pb-2">
      <div class="container ">
        <div class="mt-3 mb-4">
          <a href="<?php echo site_url('c_user/akunPenyewa/'.$kode=2);?>">Tampilkan semua pesanan saya</a>
        </div>
        <div class="card card-shadow mb-3">
          <div class="card-body p-2">
            <h5>Kode Pesanan : <?php echo $dt->KODE_PEMESANAN;?></h5>
          </div>
        </div>
        <div class="card card-shadow mb-3">
          <div class="card-body p-3">
            <h5 class="card-title">Detail Reservasi</h5>
            <div class="yellow-divider mb-3"></div>
            <div class="row">
              <div class="col-lg-3">
                <img src="<?= base_url('/assets/uploads/kendaraan/') ?><?php echo $dt->FOTO;?>" class="card-img gambar-list" style="width: 200px; height: 150px"  alt="...">
              </div>
              <div class="col-lg-4">               
                <h5 class=""><?php echo $dt->MERK_KENDARAAN;?> <?php echo $dt->NAMA_KENDARAAN;?></h5> 
                <p>Jenis kendaraan</p>
                    <div class="row row-cols-2 icon-orange">
                          <div class="col mt-2">
                            <i class="fas fa-couch"></i>
                            <?php echo $dt->KAPASITAS;?> orang
                          </div>
                          <div class="col mt-3">
                            <i class="fas fa-door-closed"></i>
                            <?php echo $dt->PINTU;?> Pintu
                          </div>
                          <div class="col mt-3">
                            <i class="fas fa-snowflake"></i>
                            <?php echo $dt->PENDINGIN_UDARA;?>
                          </div>
                          <div class="col mt-3">
                            <i class="fas fa-cog"></i>
                            <?php echo $dt->TRANSISI;?>
                          </div>
                        </div>
              </div>
              <div class="col-lg-4">
                <h5><?php echo $dt->NAMA_RENTAL;?></h5>
                <p><?php echo $dt->ALAMAT_RENTAL;?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-shadow mb-3">
          <div class="card-body p-3 icon-orange">
            <div class="row justify-content-center">
              <div class="col-lg">
            <h5 class="card-title ">Lokasi Pengambilan</h5>
            <div class="yellow-divider mb-3 "></div>
            <p> <i class="far fa-calendar-alt "></i> Waktu Pengambilan: <?php echo $dt->TANGGAL_PENGAMBILAN;?></p>
            <p><i class="fas fa-map-marker-alt"></i> <?php echo $dt->LOKASI_PENJEMPUTAN;?></p>
              </div>
              <div class="col-lg">
            <h5 class="card-title">Lokasi Pengembalian</h5>
            <div class="yellow-divider mb-3"></div>   
            <p> <i class="far fa-calendar-alt"></i> Waktu Pengambilan: <?php echo $dt->TANGGAL_PENGEMBALIAN;?></p>
            <p><i class="fas fa-map-marker-alt"></i> <?php echo $dt->LOKASI_PENGANTARAN;?></p>           
            </div>
          </div>
        </div>
      </div>
  
        <div class="card card-shadow mb-3">
          <div class="card-body p-3">
            <h5 class="card-title">Detail Reservasi</h5>
            <div class="yellow-divider mb-3"></div>
             <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="row">
                  <div class="col-lg-4 ">
                  <p class="pl-3">Supir</p>
                  </div>
                  <div class="col-lg-5 font-weight-bolder">
                      <p><span>Rp </span>0</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row">
                  <div class="col-lg-4 ">
                  <p class="pl-3">Pengantaran Kendaraan</p>
                  </div>
                  <div class="col-lg-5 font-weight-bolder">
                      <p><span>Rp </span>0</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row">
                  <div class="col-lg-4 ">
                  <p class="pl-3">Pengambilan Kendaraan</p>
                  </div>
                  <div class="col-lg-5 font-weight-bolder">
                      <p><span>Rp </span>0</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row">
                  <div class="col-lg-4 ">
                  <p class="pl-3">Harga Sewa</p>
                  </div>
                  <div class="col-lg-5 font-weight-bolder">
                      <p><span>Rp </span><?php echo number_format($dt->HARGA_SEWA_KENDARAAN);?></p>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="row">
                  <div class="col-lg-4 ">
                  <p class="pl-3">Total Sewa</p>
                  </div>
                  <div class="col-lg-5 font-weight-bolder">
                      <p><span>Rp </span><?php echo number_format($dt->TOTAL);?></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
            



      </div>
       

     </section>
<?php endforeach;?>
<!-- akhir konfirmasi -->