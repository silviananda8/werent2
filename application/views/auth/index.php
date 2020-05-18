

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
</section>

<!-- cara Kerja -->

    <div class="container site-section mb-5">
      <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <div class="section-title  text-center">
                <h2>Cara Kerja</h2>
                <span class="title-line"><i class="fa fa-car"></i></span>
                
            </div>
          <p>Berikut langkah-langkah yang akan dilalui saat akan menyewa kendaraan melalui kami</p>
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

