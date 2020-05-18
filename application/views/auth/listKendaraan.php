<section class="bg-light pb-3">
    <!-- Start Form List Kendaraan -->
      <div class="container text-justify mb-5">
        <div class="row justify-content-center">

          <!-- Start Form Cari Pada Header -->
            <div class="col-lg-12 mt-4 mb-5 bg-white  rounded p-2 card-shadow">
              <form action="<?php if ($this->uri->segment('2')==='listKendaraan'|| $this->uri->segment('2')==='FilterMobil') { echo site_url('c_search/SearchMobil');} else{echo site_url('c_search/SearchMotor');}?>" method="post">
                <h2 class="font-weight-bold">
                  Cari Kendaraan Yang Tersedia
                </h2>

                  <div class="form-row mt-2">
                    <!-- Tempat Penjemputan -->
                    <div class="form-group col-lg-4">
                      <label for="tempatPenjemputan">Tempat Penjemputan</label>
                      <input type="text" class="form-control" name="kota" id="tempatPenjemputan" aria-describedby="textHelp" placeholder="Berdasarkan Kota, Bandara, Stasiun, Daerah, ..." value="<?php echo $this->session->userdata('kota');?>">
                      </div>

                    <div class="form-group col-lg-3">
                      <label for="tanggalPenjemputan">Waktu Penjemputan</label>
                      <div class="input-group">
                          <input type="text" name="TANGGAL_PENGAMBILAN" class="form-control" value="<?php echo $this->session->userdata('TANGGAL_PENGAMBILAN');?>" id="tanggalPenjemputan">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-calendar"></i>
                            </div>
                          </div>
                      </div>

                  </div>


                    <div class="form-group col-lg-3">
                      <label for="tanggalPengembalian">Waktu Pengembalian</label>
                      <div class="input-group">
                          <input type="text" name="TANGGAL_PENGEMBALIAN" class="form-control" value="<?php echo $this->session->userdata('TANGGAL_PENGEMBALIAN');?>"id="tanggalPengembalian">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-calendar"></i>
                            </div>
                          </div>
                      </div>
                    </div>


                    <div class="col-2">
                      <button type="submit" class="btn btn-warning font-weight-bolder tombol-filter  ">
                        Cari 
                      </button>
                    </div>
                  </div>
              </form>

            </div>
          <!-- End Form Cari Pada Header -->
           <!-- Start Form Filter Kendaraan -->
            <div class="col-lg-3  bg-white  filter-kendaraan rounded p-3 card-shadow" >
              <form action="<?php if ($this->uri->segment('2')==='listKendaraan'|| $this->uri->segment('2')==='FilterMobil') { echo site_url('c_search/FilterMobil');} else{echo site_url('c_search/FilterMotor');}?>" class="" method="post">

              
                
                <!-- Start Transisi Kendaraan -->
                <div class="row mt-3">
                  <label for="filterTransisi" class="col font-weight-bold">
                    Transisi
                  </label>
                </div>

                <div class="checkTransisi">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="TRANSISI" id="transisi1" value="Otomatis">
                    <label class="custom-control-label" for="transisi1" >Otomatis</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="TRANSISI" id="transisi2" value="Manual">
                    <label class="custom-control-label" for="transisi2">Manual</label>
                  </div>
                </div>
                <!-- End Transisi Kendaraan -->

                <!-- Start Penumpang -->
                <div class="row mt-3">
                  <label for="filterPenumpang" class="col font-weight-bold">
                    Penumpang
                  </label>
                </div>

                <div class="banyakPenumpang">
                  <input type="number" class="form-control w-50" id="penumpang" name="KAPASITAS" min="1" max="8">
                  <div class="invalid-feedback">  
                    Penumpang Minimal = 1, Maksimal Maksimal = 8
                  </div>
                </div>
                <!-- End Penumpang -->

                <div class="row mt-3">
                  <label for="filterTambahan" class="col font-weight-bold">
                    Tambahan
                  </label>
                </div>

                <div class="tambahan">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="tambahan1" value="Supir">
                    <label class="custom-control-label" for="tambahan1">Supir</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="tambahan2" value="Pengantaran Mobil Oleh Rental">
                    <label class="custom-control-label" for="tambahan2">Pengantaran Mobil Oleh Rental</label>
                  </div>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="tambahan3" value="Penjemputan Mobil Oleh Rental">
                    <label class="custom-control-label" for="tambahan3">Penjemputan Mobil Oleh Rental</label>
                  </div>
                </div>

                <div class="row m-2">
                  <div class="col d-flex ">
                    <button type="submit" class="btn btn-warning font-weight-bold m-2 mt-4 tombol-filter">
                      Cari 
                    </button>
                  </div>
                </div>

              </form>
            </div>
          <!-- End Form Filter Kendaraan -->

          <!-- Start List Kendaraan -->
          <div class="col-lg">
            <div class="row-lg">
               <div class="col-lg  bg-white rounded p-2 ml-2 card-shadow">
              <?php foreach($data as $dta):?>
              <div class="card">
                <div class="row">
                  <div class="col-lg-4">
                    <label for="namaKendaraan">
                      <h4 class="col font-weight-bold"><?php echo $dta->MERK_KENDARAAN;?> <?php echo $dta->NAMA_KENDARAAN;?></h4>
                    </label>
                    <img src="<?= base_url('assets/uploads/kendaraan/') ?><?php echo $dta->FOTO?>" alt="Load" class="ml-3 mt-3" id="gambarKendaraan" >
                    
                  </div>
  
                
                  <div class="col-lg-5 mt-5">
                    <div class="container">
                      <small>
                        <div class="row row-cols-2">
                          <div class="col">
                            <i class="fas fa-couch"></i>
                            <?php echo $dta->KAPASITAS;?> orang
                          </div>
                          <div class="col">
                            <i class="fas fa-door-closed"></i>
                            <?php echo $dta->PINTU;?> Pintu
                          </div>
                          <div class="col">
                            <i class="fas fa-snowflake"></i>
                            <?php echo $dta->PENDINGIN_UDARA;?>
                          </div>
                          <div class="col">
                            <i class="fas fa-cog"></i>
                            <?php echo $dta->TRANSISI;?>
                          </div>
                        </div>
                      </small>
                    </div>

                    <hr>
                    
                    <div class="container">
                      <small>
                        <p>Termasuk Harga:</p>
                        <div class="ml-2">
                          <div class="row row-cols-2">
                            <p><i class="fas fa-check mr-1"></i>Pembatalan</p>
                            <p><i class="fas fa-check mr-1"></i>Amandemen</p>
                          </div>
                          <div class="row row-cols-2">
                            <p><i class="fas fa-check mr-1"></i>Perlindungan Pencurian</p>
                            <p><i class="fas fa-check mr-1"></i>Pengabaian Tabrakan</p>
                          </div>
                        </div>
                      </small>
                    </div>
                  </div>
                
                  <div class="col-lg-3 mt-5 align-self-center">
                    <p class="font-weight-bold">
                     Rp. <?php echo number_format($dta->HARGA_SEWA_KENDARAAN);?>
                    <p>
                      <a href="<?php if ($this->uri->segment('2')==='listKendaraan' || $this->uri->segment('2')==='FilterMobil') { echo site_url('auth/detailKendaraan/'.$dta->ID_MOBIL);} else{echo site_url('auth/detailmotor/'.$dta->ID_MOTOR);}?>" class="btn btn-warning font-weight-bolder tombol  ml-4" <?php if ($this->session->userdata('logged_in') != TRUE) {echo "data-toggle='modal' data-target='#modalMasuk'";}?>>Pesan</a>
                  </div>
                </div>

                <div class="card-footer mt-2">
                  <div class="row ml-1">
                    <div class="col-lg-4">
                        <p class=""><small><?php echo $dta->NAMA_RENTAL;?></small><i class="fas fa-star ml-1 rating"></i></p>
                    </div>
                    <div class="col-lg-8 ">
                      <p class=""><small><?php echo $dta->ALAMAT_RENTAL;?></small><i class="fas fa-map-marker icon-map ml-1"></i></p>
                    </div>
                  </div>
                </div>
              </div>
               <?php endforeach; ?>
            </div>
           
          <!-- End List Kendaraan -->
            </div>
          </div>
          
           

        </div>
      </div>
    <!-- End Form List Kendaraan -->

</section>