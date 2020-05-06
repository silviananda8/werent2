

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
              <div class="col">
                  <h2><strong>Pencarian Mobil</strong></h2>
              </div>
              <div class="col">
                <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
                  <div class="btn-group mr-2" role="group" aria-label="Third group">
                    <a type="button" class="btn btn-warning btn-lg" href="<?php echo site_url('auth/index');?>" id="mobil">
                    <i class="fas fa-car" style="font-size: 25px"></i>
                    <br>
                    <strong>Mobil</strong>
                    </a>
                  </div>
                  <div class="btn-group ml-2" role="group" aria-label="Third group">
                    <a type="button" class="btn btn-secondary btn-lg bg-light text-dark" href="<?php echo site_url('auth/index2');?>" id="motor">
                    <i class="fas fa-motorcycle" style="font-size: 25px"></i>
                    <br>
                    <strong>Motor</strong>
                    </a>
                  </div>
                </div>
              </div>
          </div>
          <!-- akhir kategori kendaraan -->

          <div class="row">
            <div class="col-lg">
               <label for="exampleInputPassword1">Lokasi Penjemputan</label>
                <input type="text" class="form-control" id="tempatPenjemputan">
               <label for="exampleInputPassword1">Waktu Penjemputan</label>
               <div class="row">
                <div class="col-lg">
                  <input type="text" class="form-control" id="tanggalPenjemputan">
                </div>
                <div class="col-lg">
                  <input type="text" class="form-control" id="waktuPenjemputan">
                </div>
              </div>
            </div>
            <div class="col-lg">
               <label for="exampleInputPassword1">Lokasi Pengembalian</label>
                <input type="text" class="form-control" id="tempatPengembalian">
               <label for="exampleInputPassword1">Waktu Pengembalian</label>
               <div class="row">
                <div class="col-lg">
                  <input type="text" class="form-control" id="tanggalPengembalian">
                </div>
                <div class="col-lg">
                  <input type="text" class="form-control" id="waktuPengembalian">
                </div>
              </div>
            </div>
            <div class="col-lg-2">
              <a class="btn btn-warning font-weight-bolder tombol-pencarian " href="<?php echo site_url('auth/listkendaraan');?>">CARI</a>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir form pencarian -->