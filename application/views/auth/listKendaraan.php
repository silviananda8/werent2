
    <!-- Start Form List Kendaraan -->
      <div class="container text-justify mb-5">
        <div class="row justify-content-center">

          <!-- Start Form Cari Pada Header -->
            <div class="col-11 mt-3 mb-5 bg-white  rounded p-2 box-shadow">
              <form action="" method="post" class="">
                <h2 class="font-weight-bold">
                  Cari Mobil Yang Tersedia
                </h2>

                  <div class="form-row mt-2">
                    <!-- Tempat Penjemputan -->
                    <div class="form-group col">
                      <label for="tempatPenjemputan">Tempat Penjemputan</label>
                      <input type="text" class="form-control" id="tempatPenjemputan" aria-describedby="textHelp" placeholder="Berdasarkan Kota, Bandara, Stasiun, Daerah, ...">
                      </div>

                    <!-- Tempat Pengambilan -->
                    <div class="form-group col">
                      <label for="tempatPengembalian">Tempat Pengembalian</label>
                      <input type="text" class="form-control" id="tempatPengembalian" aria-describedby="textHelp" placeholder="Berdasarkan Kota, Bandara, Stasiun, Daerah, ...">
                    </div>
                  </div>

                  <div class="form-row mt-2">
                    <div class="form-group col-md-4">
                      <label for="tanggalPenjemputan">Waktu Penjemputan</label>
                      <div class="input-group">
                          <input type="text" class="form-control" id="tanggalPenjemputan">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-calendar"></i>
                            </div>
                          </div>
                      </div>
                    </div>

                    <div class="form-group col-md-2">
                      <label for="waktuPenjemputan"></label>
                      <input type="text" class="form-control mt-2" id="waktuPenjemputan">
                    </div>


                    <div class="form-group col-md-4">
                      <label for="tanggalPengembalian">Waktu Pengembalian</label>
                      <div class="input-group">
                          <input type="text" class="form-control" id="tanggalPengembalian">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-calendar"></i>
                            </div>
                          </div>
                      </div>
                    </div>


                    <div class="form-group col-md-2">
                      <label for="waktuPengembalian"></label>
                      <input type="text" class="form-control mt-2" id="waktuPengembalian">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col d-flex justify-content-end">
                      <button type="submit" class="btn btn-info font-weight-bold m-2">
                        Cari 
                      </button>
                    </div>
                  </div>
                  
              </form>

            </div>
          <!-- End Form Cari Pada Header -->

          <!-- Start Form Filter Kendaraan -->
            <div class="col-3 mt-3 mr-5 bg-white  rounded p-3 box-shadow" >
              <form action="" class="" method="post">

                <!-- Start Peringkat Rental -->
                  <div class="row">
                    <label for="filterPeringkatRental" class="col font-weight-bold">
                      Peringkat Rental
                    </label>
                  </div>
                  
                  <div class="checkPeringkat">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="peringkat1" value="Sangat Bagus">
                      <label class="custom-control-label" for="peringkat1">Sangat Bagus</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="peringkat2" value="Bagus">
                      <label class="custom-control-label" for="peringkat2">Bagus</label>
                    </div>

                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="peringkat3" value="Cukup">
                      <label class="custom-control-label" for="peringkat3">Cukup</label>
                    </div>
                  </div>
                <!-- End Peringkat Rental -->
                
                <!-- Start Transisi Kendaraan -->
                <div class="row mt-3">
                  <label for="filterTransisi" class="col font-weight-bold">
                    Transisi
                  </label>
                </div>

                <div class="checkTransisi">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="transisi1" value="Otomatis">
                    <label class="custom-control-label" for="transisi1">Otomatis</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="transisi2" value="Manual">
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
                  <input type="number" class="form-control w-50" id="penumpang" name="penumpang" min="1" max="8">
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
                  <div class="col d-flex justify-content-center">
                    <button type="submit" class="btn btn-info font-weight-bold m-2">
                      Cari 
                    </button>
                  </div>
                </div>

              </form>
            </div>
          <!-- End Form Filter Kendaraan -->

          <!-- Start List Kendaraan -->
            <div class="col-7 mt-3 ml-5 bg-white rounded p-2 box-shadow">

              <div class="card">
                <div class="row">
                  <div class="col-4">
                    <label for="namaKendaraan">
                      <h4 class="col font-weight-bold">Ford Fusion</h4>
                    </label>
                    <img src="<?= base_url(''); ?>assets/img/ford.jpg" alt="ford" class="ml-3 mt-3" id="gambarKendaraan" >
                    
                  </div>
  
                
                  <div class="col-5 mt-5">
                    <div class="container">
                      <small>
                        <div class="row row-cols-2">
                          <div class="col">
                            <i class="fas fa-couch"></i>
                            4 orang
                          </div>
                          <div class="col">
                            <i class="fas fa-door-closed"></i>
                            4 Pintu
                          </div>
                          <div class="col">
                            <i class="fas fa-snowflake"></i>
                            AC
                          </div>
                          <div class="col">
                            <i class="fas fa-cog"></i>
                            Otomatis
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
                
                  <div class="col-3 mt-5 align-self-center">
                    <p class="font-weight-bold">
                     Rp. 1.782.000,00
                    <p>
  
                    <button type="submit" class="btn btn-outline-info ml-4">Pesan</button>
                  </div>
                </div>

                <div class="card-footer mt-2">
                  <div class="row ml-1">
                    <div class="col-4">
                        <p class=""><small>Adam Rental 3</small><i class="fas fa-star ml-1 rating"></i></p>
                    </div>
                    <div class="col-8 ">
                      <p class=""><small>Jl. Semangka no.27-29, Surabaya</small><i class="fas fa-map-marker icon-map ml-1"></i></p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          <!-- End List Kendaraan -->

        </div>
      </div>
    <!-- End Form List Kendaraan -->