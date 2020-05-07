
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
                    <div class="">
                        <img src="<?= base_url('assets/img/') ?><?php echo $rental->FOTO_RENTAL?>" alt="..." class="image-rental" style="width: 341px;">
                        <form action="" method="post" class="form-group mt-3">
                            <div class="form-group mt-3">
                                <input type="file" class="form-control" id="foto_rental" name="foto_rental" accept="image/png, image/jpeg">
                            </div>

                            <button type="submit" class="btn btn-warning tombol mt-3">
                                <strong>Simpan Foto</strong>
                            </button>
                        </form>
                    </div>
                </div>

                    
                <div class="col-7 ml-5 bg-white border border-dark">
                    <h4 class="text-uppercase"><strong>Informasi Pribadi</strong></h4>

                    <form action="<?php echo base_url().'rental/c_rental/prosesEditDetail'?>" method="post" class="form-group mb-3">
                        <dl class="row mt-3">
                            <dt class="col-sm-5">Nama Rental</dt>
                            <dd class="col-sm-7">
                                <input type="text" class="form-control" placeholder="Nama Rental" value="<?php echo $rental->NAMA_RENTAL?>" id="nama_rental" name="nama_rental">
                            </dd>

                            <dt class="col-sm-5 mt-2">Alamat Rental</dt>
                            <dd class="col-sm-7 mt-2">
                                <input type="text" class="form-control" placeholder="Alamat Rental" value="<?php echo $rental->ALAMAT_RENTAL?>" id="alamat_rental" name="alamat_rental">
                            </dd>

                            <dt class="col-sm-5 mt-2">Jam Buka</dt>
                            <dd class="col-sm-7 mt-2">
                                <input type="text" class="form-control" placeholder="Jam Buka" value="<?php echo $rental->JAM_BUKA?>" id="jam_buka" name="jam_buka">
                            </dd>

                            <dt class="col-sm-5 mt-2">Jam Tutup</dt>
                            <dd class="col-sm-7 mt-2">
                                <input type="text" class="form-control" placeholder="Jam Tutup" value="<?php echo $rental->JAM_TUTUP?>" id="jam_tutup" name="jam_tutup">
                            </dd>

                            <dt class="col-sm-5 mt-2">Lama Pemesanan Minimum</dt>
                            <dd class="col-sm-7 mt-2">
                                <input type="text" class="form-control" placeholder="Minimum" value="<?php echo $rental->LAMA_PEMESANAN_MINIMUM?>" id="lama_pemesanan_minimum" name="lama_pemesanan_minimum">
                            </dd>

                            <dt class="col-sm-5 mt-2">Lama Pemesanan Maksimum</dt>
                            <dd class="col-sm-7 mt-2">
                            <input type="text" class="form-control" placeholder="Maksimum" value="<?php echo $rental->PERSYARATAN_JARAK_WAKTU_PEMESANAN?>" id="lama_pemesanan_maksimum" name="lama_pemesanan_maksimum">
                            </dd>

                            <dt class="col-sm-5 mt-2">Aturan Pemesanan</dt>
                            <dd class="col-sm-7 mt-2">
                                <textarea class="form-control" name="aturan_pemesanan" id="aturan_pemesanan" cols="35" rows="3"><?php echo $rental->PERSYARATAN_PENYEWA?></textarea>
                            </dd>

                            <dt class="col-sm-5 mt-2">Kebijakan Pembatalan</dt>
                            <dd class="col-sm-7 mt-2">
                                <textarea class="form-control" name="kebijakan_pembatalan" id="kebijakan_pembatalan" cols="35" rows="3"><?php echo $rental->KEBIJAKAN_PEMBATALAN?></textarea>
                            </dd>

                            <dt class="col-sm-5 mt-2">Deskripsi Rental</dt>
                            <dd class="col-sm-7 mt-2">
                                <textarea class="form-control" name="deskripsi_rental" id="deskripsi_rental" cols="35" rows="3"><?php echo $rental->DESKRIPSI_RENTAL?></textarea>
                            </dd>
                        </dl>

                        <input type="text" class="form-control" value="<?php echo $rental->ID_RENTAL?>" id="id_rental" name="id_rental" hidden>
                        <button type="submit" class="btn btn-warning tombol">
                            <strong>Simpan Perubahan</strong>
                        </button>
                    </form>
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
