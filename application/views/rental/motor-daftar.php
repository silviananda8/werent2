
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
                            <strong>Daftar Semua Motor</strong>
                        </h4>
                    </div>
                    
                    <?php 
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
                                                    <img src="<?= base_url('assets/uploads/kendaraan/') ?><?php echo $dta->FOTO?>" alt="Load" id="gambarKendaraan" >
                                                </div>
                                            </div>
                        
                                        
                                            <div class="col-lg-5 align-self-center">
                                                <div class="row row-cols-4">
                                                    <div class="col-lg">
                                                         <button class="btn btn " type="button" data-toggle="collapse" data-target="#jumlahPesanan<?= $i;  ?>" aria-expanded="false" aria-controls="collapseExample" onclick="ambilId(<?php echo $dta->ID_MOTOR;?>,2)">
                                                            <h4 class="display-3 text-center">
                                                            0
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
                                                <a href="<?php echo site_url('rental/c_motor/editDetailKendaraan/'.$dta->ID_MOTOR);?>" class="btn btn-primary tombol w-50 mb-2">
                                                    <strong>Edit</strong>
                                                </a>
                                                <br>
                                                <a href="<?php echo site_url('rental/c_motor/deleteMotor/'.$dta->ID_MOTOR);?>" class="btn btn-danger tombol w-50 mt-2">
                                                    <strong>Hapus</strong>
                                                </a>
                                            </div>

                                        </div>
                                        
                                    </div>

                                    <!-- ISI DROPDOWN -->
                                    <div id="aaa<?php echo $dta->ID_MOTOR;?>">
                                    <div class="collapse" id="jumlahPesanan<?= $i;  ?>">
                                          <div class="card card-body border border-warning"><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            <div class="card border border-light shadow-sm  mb-5 bg-white rounded p-2" >
                                              <div class="card-body">
                                                
                                                
                                              
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-4">
                                                        <h5>Nama Pemesan: <span id="nama<?php echo $dta->ID_MOTOR;?>"></h5>
                                                        <p>Kode Pesanan <span class="font-weight-bold"><span id="kode_pemesanan<?php echo $dta->ID_MOTOR;?>"></span></p>
                                                        <a href="" class="badge badge-danger">Batalkan Pesanan</a>
                                                        <a class="badge badge-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Detail Pesanan</a>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="col icon-orange">
                                                        <p>Pengambilan : <small><span id="tanggal_pengambilan<?php echo $dta->ID_MOTOR;?>"></small></p>
                                                        <p><i class="fa fa-map-marker"></i><span id="lokasi_pengantaran<?php echo $dta->ID_MOTOR;?>"></p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="col icon-orange">
                                                        <p>Pengambilan : <small><span id="tanggal_pengembalian<?php echo $dta->ID_MOTOR;?>"></small></p>
                                                        <p><i class="fa fa-map-marker"></i><span id="lokasi_penjemputan<?php echo $dta->ID_MOTOR;?>"></p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        
                                                    </div>
                                                </div>
                                            
                                              </div><div class="collapse" id="collapseExample">
                                              <div class="card card-body">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-5 float-right">
                                                        <h5>Fasilitas YANG DIPESAN</h5>
                                                        <ul>
                                                            <!-- <li>5 kursi</li> -->
                                                            <!-- <li>AC</li> -->
                                                            <!-- <li>Power Steering</li> -->
                                                            <li>Transmisi <span id="transisi<?php echo $dta->ID_MOTOR;?>"></li>
                                                            <!-- <li>Airbag</li> -->
                                                            <!-- <li>4 Pintu</li> -->
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
                                                                      <p><span>Rp</span> 500.000</p>
                                                                  </div>
                                                              </div>
                                                          </li>
                                                          <li>
                                                              <div class="row">
                                                                  <div class="col-lg">
                                                                      <p>Pengantaran Kendaraan</p>
                                                                  </div>
                                                                  <div class="col-7">
                                                                      <p><span>Rp</span> 50.000</p>
                                                                  </div>
                                                              </div>
                                                          </li>
                                                          <li>
                                                              <div class="row">
                                                                  <div class="col-lg">
                                                                      <p>Penjemputan Kendaraan</p>
                                                                  </div>
                                                                  <div class="col-7">
                                                                      <p><span>Rp</span> 50.000</p>
                                                                  </div>
                                                              </div>
                                                          </li>
                                                          <li>
                                                              <div class="row">
                                                                  <div class="col-lg">
                                                                      <p>Biaya Sewa Kendaraan</p>
                                                                  </div>
                                                                  <div class="col-7">
                                                                      <p><span>Rp</span> <span id="harga_sewa_kendaraan<?php echo $dta->ID_MOTOR;?>"></p>
                                                                  </div>
                                                              </div>
                                                          </li>
                                                          <li>
                                                              <div class="row">
                                                                  <div class="col-lg">
                                                                      <p>Total Biaya Sewa</p>
                                                                  </div>
                                                                  <div class="col-7">
                                                                      <p><span>Rp</span> 2500.000</p>
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