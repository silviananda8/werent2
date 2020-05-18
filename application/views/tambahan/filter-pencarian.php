<div class="section bg-light">
    <div class="container">
    
        <div class="row justify-content-center">

<!-- == start filter pencarian == -->
    <div class="col-lg-3 mt-4 ">
      <div class="row">
        <div class="col bg-white pb-4 rounded p-3 box-shadow">
           <form action="<?php if ($this->uri->segment('2')==='detailKendaraan') { echo site_url('c_search/SearchMobil');} else{echo site_url('c_search/SearchMotor');}?>" class="" method="post">
            <h4 class="font-weight-bold mb-3">
              Cari Mobil Yang Tersedia
            </h4>
            <div class="form-group mb-3">
                <label for="tempatPenjemputan">Tempat Penjemputan</label>
                <input name="kota" type="text" class="form-control" id="tempatPenjemputan" placeholder="Berdasarkan Kota, Bandara, Stasiun, Daerah, ..." value="<?php echo $this->session->userdata('kota');?>">
            </div>
                <div class="form-group">
                  <label for="tanggalPenjemputan">Waktu Penjemputan</label>
                  <div class="input-group">
                      <input name="TANGGAL_PENGAMBILAN" type="text" class="form-control" id="tanggalPenjemputan" value="<?php echo $this->session->userdata('TANGGAL_PENGAMBILAN');?>">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-calendar"></i>
                        </div>
                      </div>
                </div>

                  <label for="tanggalPengembalian">Waktu Pengembalian</label>
                  <div class="input-group">
                      <input name="TANGGAL_PENGEMBALIAN" type="text" class="form-control" id="tanggalPengembalian"name="TANGGAL_PENGEMBALIAN" class="form-control" value="<?php echo $this->session->userdata('TANGGAL_PENGEMBALIAN');?>">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-calendar"></i>
                        </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg mt-3 justify-content-center">
                  <button type="submit" class="btn btn-warning font-weight-bolder btn-block tombol pl-4 pr-4">
                    Cari 
                  </button>
                </div>
              </div>

        </form>
        </div>
      </div>
       
    </div>

<!-- == end filter pencarian == -->