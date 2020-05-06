
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <?php foreach ($rental as $rental): ?>
          <!-- Page Heading -->
          <div class="row mt-5">
            <div class="col-4 mr-4">
              <div class="card">
                    <img src="<?= base_url('assets/img/') ?><?php echo $rental->FOTO_RENTAL?>" alt="..." class="image-rental" style="width: 341px;">
                    <div class="card-body">
                        <a href="<?php echo site_url('c_rental/editDetail');?>" class="btn btn-warning" type="button">
                            <strong>Edit Detail</strong>
                        </a>
                    </div>
              </div>
            </div>

            <div class="col-7 ml-5 bg-white border border-dark">
                <h4 class="text-uppercase"><strong>Informasi Rental</strong></h4>
                <div class="container">
                    <dl class="row mt-3">
                        <dt class="col-sm-5">Nama Rental</dt>
                        <dd class="col-sm-7"><?php echo $rental->NAMA_RENTAL?></dd>

                        <dt class="col-sm-5">Alamat Rental</dt>
                        <dd class="col-sm-7"><?php echo $rental->ALAMAT_RENTAL?></dd>

                        <dt class="col-sm-5">Jam Buka</dt>
                        <dd class="col-sm-7"><?php echo $rental->JAM_BUKA?></dd>

                        <dt class="col-sm-5">Jam Tutup</dt>
                        <dd class="col-sm-7"><?php echo $rental->JAM_TUTUP?></dd>

                        <dt class="col-sm-5">Lama Pemesanan Minimum</dt>
                        <dd class="col-sm-7"><?php echo $rental->LAMA_PEMESANAN_MINIMUM?></dd>

                        <dt class="col-sm-5">Lama Pemesanan Maksimum</dt>
                        <dd class="col-sm-7"><?php echo $rental->PERSYARATAN_JARAK_WAKTU_PEMESANAN?></dd>

                        <dt class="col-sm-5">Aturan Pemesanan</dt>
                        <textarea class="form-control" name="aturan_pemesanan" id="aturan_pemesanan" cols="35" rows="5" disabled><?php echo $rental->PERSYARATAN_PENYEWA?></textarea>
                        

                        <dt class="col-sm-5 mt-3">Kebijakan Pembatalan</dt>
                        <textarea class="form-control" name="kebijakan_pembatalan" id="kebijakan_pembatalan" cols="35" rows="5" disabled><?php echo $rental->KEBIJAKAN_PEMBATALAN?></textarea>
                        

                        <dt class="col-sm-5 mt-3">Deskripsi Rental</dt>
                        <textarea class="form-control" name="deskripsi_rental" id="deskripsi_rental" cols="35" rows="5" disabled><?php echo $rental->DESKRIPSI_RENTAL?></textarea>
                        
                    </dl>
                </div>
            </div>
          </div>

        <?php endforeach;?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
