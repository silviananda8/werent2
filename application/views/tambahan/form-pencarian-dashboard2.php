<section class="bg-light pb-2">

    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h4 class="display-4">Cari, Bandingkan & Simpan</h4>
        </div>
      </div>

    <!-- akhir jumbotron -->


    <div class="container">
      
      <!-- form pencarian -->
      <div class="row justify-content-center">
        <div class="col-lg-12 form-pencarian">

          <!-- kategori kendaraan -->
          <div class="row row-cols-1 mb-3" id="form-kategori-pencarian">
              <div class="col mb-3">
                  <h3><strong>Pencarian Motor</strong></h3>
              </div>
              <div class="col">
                <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group mr-2" role="group" aria-label="Third group">
                    <a type="button" class="btn btn-secondary btn-lg bg-light text-dark" href="<?php echo site_url('auth/index');?>" id="mobil">
                    <i class="fas fa-car" style="font-size: 25px"></i>
                    <br>
                    <strong>Mobil</strong>
                    </a>
                  </div>
                  <div class="btn-group ml-2" role="group" aria-label="Third group" href="<?php echo site_url('auth/index2');?>" id="motor">
                    <a type="button" class="btn btn-warning btn-lg">
                    <i class="fas fa-motorcycle" style="font-size: 25px"></i>
                    <br>
                    <strong>Motor</strong>
                    </a>
                  </div>
                </div>
              </div>
          <!-- akhir kategori kendaraan -->
          <form action="<?php echo site_url('c_search/SearchMotor');?>" method='post'>

          <div class="row mt-4">
            <div class="col-lg-4">
              <label for="exampleInputPassword1">Lokasi Penjemputan</label>
                <input type="text" name="kota" class="form-control" id="tempatPenjemputan" placeholder="Berdasarkan Kota, Wilayah, Daerah, ...">
            </div>
            <div class="col-lg-3">
               <label for="exampleInputPassword1">Waktu Penjemputan</label>
               <input type="text" name="TANGGAL_PENGAMBILAN" class="form-control" id="tanggalPenjemputan">
            </div>
            <div class="col-lg-3">
              <label for="exampleInputPassword1">Waktu Pengembalian</label>
              <input type="text" name="TANGGAL_PENGEMBALIAN" class="form-control" id="tanggalPengembalian">
            </div>
            <div class="col-lg-2">
              <button type="submit" class="btn btn-warning font-weight-bolder tombol-filter " href="">CARI</button>
            </div>
          </div>
         
          </div>
        </form>
        </div>
      </div>
      <!-- akhir form pencarian -->