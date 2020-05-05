

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




      <!-- artikel -->
      <!-- Section Title Start -->
        <div class="col-lg-12">
            <div class="section-title  text-center">
                <h2>Tips dan Artikel</h2>
                <span class="title-line"><i class="fa fa-car"></i></span>
                
            </div>
        </div>
        <!-- Section Title End -->
        
        <div class="card-deck artikel">
        <?php foreach($coba as $dta):?>
        <div class="card">
          <img src="<?= base_url('assets/uploads/thumbnail/') ?><?php echo $dta->thumbnail?>" class="card-img-top" alt="...">
          <div class="card-body">
            <a href="<?php echo site_url('auth/read_artikel/'.$dta->id);?>">
              <h5 class="card-title"><?php echo $dta->judul?></h5>
            </a>
            <p class="card-text"><?php echo substr($dta->artikel,0,251)?></p>
            <p class="card-text"><small class="text-muted"><?php echo $dta->last_update?></small></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- akhir artikel -->
    </div>


<!-- cara Kerja -->

    <div class="container site-section mb-5">
      <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <div class="section-title  text-center">
                <h2>Cara Kerja</h2>
                <span class="title-line"><i class="fa fa-car"></i></span>
                
            </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
        </div>
      </div>
      <div class="how-it-works d-flex">
        <div class="step">
          <span class="number"><span>01</span></span>
          <span class="caption">Kendaraan</span>
        </div>
        <div class="step">
          <span class="number"><span>02</span></span>
          <span class="caption">Tempat &amp; Waktu</span>
        </div>
        <div class="step">
          <span class="number"><span>03</span></span>
          <span class="caption">Detail</span>
        </div>
        <div class="step">
          <span class="number"><span>04</span></span>
          <span class="caption">Checkout</span>
        </div>
        <div class="step">
          <span class="number"><span>05</span></span>
          <span class="caption">Selesai</span>
        </div>

      </div>
    </div>

    <!-- akhir cara kerja -->

