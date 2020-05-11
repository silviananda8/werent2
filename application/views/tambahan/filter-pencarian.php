
    
        <div class="row justify-content-center">

<!-- == start filter pencarian == -->
    <div class="col-4 mt-5 mr-4 bg-white filter-pencarian rounded p-3 box-shadow">
        <form action="<?php if ($this->uri->segment('2')==='listKendaraan') { echo site_url('c_search/SearchMobil');} else{echo site_url('c_search/SearchMotor');}?>" class="" method="post">
            <h4 class="font-weight-bold mb-3">
              Cari Mobil Yang Tersedia
            </h4>
            <div class="form-group mb-3">
                <label for="tempatPenjemputan">Tempat Penjemputan</label>
                <input type="text" class="form-control" id="tempatPenjemputan" placeholder="Berdasarkan Kota, Bandara, Stasiun, Daerah, ..." value="<?php echo $this->session->userdata('kota');?>">
            </div>
  <!--           <div class="form-group mb-3">
                <label for="tempatPengembalian">Tempat Pengembalian</label>
                <input type="text" class="form-control" id="tempatPengembalian" placeholder="Berdasarkan Kota, Bandara, Stasiun, Daerah, ...">
            </div>
 -->
            <div class="form-row mb-3">
                <div class="form-group col-md-6">
                  <label for="tanggalPenjemputan">Waktu Penjemputan</label>
                  <div class="input-group">
                      <input type="text" class="form-control" id="tanggalPenjemputan" value="<?php echo $this->session->userdata('TANGGAL_PENGAMBILAN');?>">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-calendar"></i>
                        </div>
                      </div>
                  </div>
                </div>

          <!--       <div class="form-group col-md-6 mb-3">
                  <label for="waktuPenjemputan"></label>
                  <input type="text" class="form-control mt-2" id="waktuPenjemputan">
                </div>
 -->

                <div class="form-group col-md-6 mb-3">
                  <label for="tanggalPengembalian">Waktu Pengembalian</label>
                  <div class="input-group">
                      <input type="text" class="form-control" id="tanggalPengembalian"name="TANGGAL_PENGEMBALIAN" class="form-control" value="<?php echo $this->session->userdata('TANGGAL_PENGEMBALIAN');?>">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-calendar"></i>
                        </div>
                      </div>
                  </div>
                </div>

<!-- 
                <div class="form-group col-md-6 mb-3">
                  <label for="waktuPengembalian"></label>
                  <input type="text" class="form-control mt-2" id="waktuPengembalian">
                </div> -->
              </div>

              <div class="row">
                <div class="col d-flex justify-content-center">
                  <a type="submit" class="btn btn-warning font-weight-bolder tombol pl-4 pr-4">
                    Cari 
                  </a>
                </div>
              </div>

        </form>
    </div>
<!-- == end filter pencarian == -->