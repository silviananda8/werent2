
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
  
         
  
          <!-- Begin Page Content -->
          <div class="container-fluid">
  
              <!-- Page Heading -->
              <div class="container">
                    <div class="row justify-content-center">
                        <h4 class="mt-4">
                            <strong>Daftar Semua Mobil</strong>

                            

                        </h4>
                    </div>
                    <span id="bbb"></span>
                    <?php //menampilkan kendaraan yang ada pada tabel pesanan
                    $i = 0;
                    foreach($data as $dta):?>

                        <div class="row row-cols-1 mt-3 mb-1">
                        
                            <div class="col-lg">
                                <div class="card bg-white shadow-sm p-3 mb-5 bg-white rounded">
                                    <div class="card-header bg-white pb-1 ">
                                        <label for="namaKendaraan">
                                        <h4 class="col font-weight-bold text-center"><?php echo $dta->MERK_KENDARAAN;?> <?php echo $dta->NAMA_KENDARAAN;?></h4>
                                        
                                        </label>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="container">
                                                    <img src="<?= base_url('assets/uploads/kendaraan/') ?><?php echo $dta->FOTO;?>" alt="Load" id="gambarKendaraan" >
                                                </div>
                                            </div>
                        
                                        
                                            <div class="col-lg-5 align-self-center">
                                                <div class="row row-cols-4">
                                                    <div class="col-lg">
                                                            <button class="btn btn" type="button" data-toggle="collapse" data-target="#jumlahPesanan<?= $i;  ?>" aria-expanded="false" aria-controls="collapseExample" >
                                                            <h4 class="display-3 text-center">
                                                                <span id="jumlah<?php echo $dta->ID_MOBIL?>"></span>
                                                            </h4>
                                                            <p class="text-center">Jumlah pesanan</p>
                                                          </button>
                                                        
                                                    </div>

                                                    <div class="col-lg">
                                                        <h4 class="display-3 text-center">
                                                            0
                                                        </h4>
                                                        <p class="text-center">Menunggu Pembayaran</p>
                                                    </div>
                                                    <div class="col-lg">
                                                        <h4 class="display-3 text-center">
                                                            0
                                                        </h4>
                                                        <p class="text-center">Pesanan Telah Dibatalkan</p>
                                                    </div>
                                                    
                                                </div>

                                            </div>
                                        
                                            <div class="col-lg-3 align-self-center" style="right: -100px;">
                                                <a href="<?php echo site_url('rental/c_mobil/editDetailKendaraan/'.$dta->ID_MOBIL);?>" class="btn btn-primary tombol w-50 mb-2">
                                                    <strong>Edit</strong>
                                                </a>
                                                <br>
                                                <a href="<?php echo site_url('rental/c_mobil/deleteMobil/'.$dta->ID_MOBIL);?>" class="btn btn-danger tombol w-50 mt-2">
                                                    <strong>Hapus</strong>
                                                </a>
                                            </div>

                                        </div>
                                        
                                    </div>

                                    <!-- collapse -->

                                    
                                    <div id="aaa<?php echo $dta->ID_MOBIL;?>">
                                        <div class="collapse" id="jumlahPesanan<?= $i;  ?>">
                                        <!-- isi dropdown -->
                                        <?php foreach($pesan as $ps):
                                        if($dta->ID_MOBIL == $ps->ID_Mobil):
                                            for($k=0; $k<$ps->jumlah; $k++):?>
                                        <div class="card card-body border border-warning"><a class="" data-toggle="collapse" href="#collapseExample<?= $k;?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <div class="card border border-light shadow-sm  mb-5 bg-white rounded p-2" >
                                                <div class="card-body">
                                                    <div class="row justify-content-center">
                                                        <div class="col-lg-4">
                                                            <h5>Nama Pemesan: <span id="nama<?php echo $k.$dta->ID_MOBIL;?>"><?php echo $k.$dta->ID_MOBIL;?></span></h5>
                                                            <p>Kode Pesanan <span class="font-weight-bold"><span id="kode_pemesanan<?php echo $k.$dta->ID_MOBIL;?>"></span></span></p>
                                                            <a href="" class="badge badge-danger">Batalkan Pesanan</a>
                                                            <a class="badge badge-info" data-toggle="collapse" href="#collapseExample<?= $k;?>" role="button" aria-expanded="false" aria-controls="collapseExample<?= $k;  ?>">
                                                                Detail Pesanan
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="col icon-orange">
                                                                <p>Pengambilan : <small><span id="tanggal_pengambilan<?php echo $k.$dta->ID_MOBIL;?>"></span></small></p>
                                                                <p><i class="fa fa-map-marker"></i><span id="lokasi_pengantaran<?php echo $k.$dta->ID_MOBIL;?>"></span></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="col icon-orange">
                                                                <p>Pengambilan : <small><span id="tanggal_pengembalian<?php echo $k.$dta->ID_MOBIL;?>"></span></small></p>
                                                                <p><i class="fa fa-map-marker"></i><span id="lokasi_penjemputan<?php echo $k.$dta->ID_MOBIL;?>"></span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="collapse" id="collapseExample<?= $k;?>">
                                                    <div class="card card-body">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-5 float-right">
                                                                <h5>Fasilitas YANG DIPESAN</h5>
                                                                <ul>
                                                                    <li><span id="kapasitas<?php echo $k.$dta->ID_MOBIL;?>"></span> Penumpang</li>
                                                                    <li><span id="pendingin_udara<?php echo $k.$dta->ID_MOBIL;?>"></span></li>
                                                                    
                                                                    <li>Transmisi <span id="transisi<?php echo $k.$dta->ID_MOBIL;?>"></span></li>
                                                                    
                                                                    <li><span id="pintu<?php echo $k.$dta->ID_MOBIL;?>"></span> Pintu</li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <h5>Tarif Layanan</h5>
                                                                <ul class="list-unstyled">
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-lg">
                                                                                <p>Jumlah Hari</p>
                                                                            </div>
                                                                            <div class="col-7">
                                                                                <p>1 <span> hari</span></p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-lg">
                                                                                <p>Supir</p>
                                                                            </div>
                                                                            <div class="col-7">
                                                                                <p><span>Rp</span> 0</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-lg">
                                                                                <p>Pengantaran Kendaraan</p>
                                                                            </div>
                                                                            <div class="col-7">
                                                                                <p><span>Rp</span> 0</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-lg">
                                                                                <p>Penjemputan Kendaraan</p>
                                                                            </div>
                                                                            <div class="col-7">
                                                                                <p><span>Rp</span> 0</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-lg">
                                                                                <p>Biaya Sewa Kendaraan</p>
                                                                            </div>
                                                                            <div class="col-7">
                                                                                <p><span>Rp</span> <span id="harga_sewa_kendaraan<?php echo $k.$dta->ID_MOBIL;?>"></span></p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-lg">
                                                                                <p>Total Biaya Sewa</p>
                                                                            </div>
                                                                            <div class="col-7">
                                                                                <p><span>Rp</span> <span id="totalharga<?php echo $k.$dta->ID_MOBIL;?>"></span></p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                        endfor;
                                        endif;
                                        endforeach;?>
                                        <!-- end isi dropdown -->

                                        </div>
                                    </div>
                                    


                                </div>
                            </div>
                        
                        </div>
                    
                    <?php
                    $i++;
                     endforeach; ?>
              </div>
              
  
          </div>
          <!-- /.container-fluid -->
  
        </div>
        <!-- End of Main Content -->
  
  
  
      </div>
      <!-- End of Content Wrapper -->
  
    </div>

    <!-- End of Page Wrapper -->

    