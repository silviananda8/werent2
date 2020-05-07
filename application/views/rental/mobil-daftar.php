
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
  
         
  
          <!-- Begin Page Content -->
          <div class="container-fluid">
  
              <!-- Page Heading -->
              <div class="container">
                    <div class="row justify-content-center">
                        <h4 class="mt-5">
                            <strong>Daftar Semua Mobil</strong>
                        </h4>
                    </div>
                    
                    <?php foreach($data as $dta):?>
                        <div class="row row-cols-1 mt-3 mb-3">
                        
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        <label for="namaKendaraan">
                                        <h4 class="col font-weight-bold"><?php echo $dta->MERK_KENDARAAN;?> <?php echo $dta->NAMA_KENDARAAN;?></h4>
                                        </label>
                                    </div>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="container">
                                                    <img src="<?= base_url('assets/uploads/kendaraan/') ?><?php echo $dta->FOTO?>" alt="Load" id="gambarKendaraan" >
                                                </div>
                                            </div>
                        
                                        
                                            <div class="col-5 align-self-center">
                                                <div class="row row-cols-4">
                                                    <div class="col">
                                                        <h4 class="display-3">
                                                            0
                                                        </h4>
                                                        Jumlah Pesanan
                                                    </div>
                                                    <div class="col">
                                                        <h4 class="display-3">
                                                            0
                                                        </h4>
                                                        Menunggu Pembayaran
                                                    </div>
                                                    <div class="col">
                                                        <h4 class="display-3">
                                                            0
                                                        </h4>
                                                        Pembatalan
                                                    </div>
                                                    <div class="col">
                                                        <h4 class="display-3">
                                                            0
                                                        </h4>
                                                        Pesan
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="col-3 align-self-center" style="right: -100px;">
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
                                </div>
                            </div>
                        
                        </div>
                    <?php endforeach; ?>
              </div>
              
  
          </div>
          <!-- /.container-fluid -->
  
        </div>
        <!-- End of Main Content -->
  
  
  
      </div>
      <!-- End of Content Wrapper -->
  
    </div>
    <!-- End of Page Wrapper -->