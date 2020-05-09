
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       

        <!-- Begin Page Content -->
        <div class="container-fluid">
        <?php foreach ($rental as $rental): ?>
            <!-- Page Heading -->
            <?php echo form_open_multipart('rental/c_rental/prosesEditDetail');?>
            <div class="row mt-5">
                <div class="col-4 mr-4">
                    <img src="<?= base_url('assets/uploads/rental/image-profil/') ?><?php echo $rental->FOTO_RENTAL?>" alt="..." class="image-rental" style="width: 341px;">
                    
                    <div class="form-group mt-3">
                        <label for="foto_rental">Upload Foto</label>
                        <input type="file" class="form-control" id="foto_rental" name="foto_rental" required>
                    </div>
                </div>

                    
                <div class="col-7 ml-5 bg-white border border-dark">
                    <h4 class="text-uppercase"><strong>Informasi Pribadi</strong></h4>
                        <dl class="row mt-3">
                            <dt class="col-sm-5">Nama Rental</dt>
                            <dd class="col-sm-7">
                                <input type="text" class="form-control" placeholder="Nama Rental" value="<?php echo $rental->NAMA_RENTAL?>" id="nama_rental" name="nama_rental" required>
                            </dd>

                            <dt class="col-sm-5 mt-2">Alamat Rental</dt>
                            <dd class="col-sm-7 mt-2">
                                <input type="text" class="form-control" placeholder="Alamat Rental" value="<?php echo $rental->ALAMAT_RENTAL?>" id="alamat_rental" name="alamat_rental" required>
                            </dd>

                            <dt class="col-sm-5 mt-2">Jam Buka</dt>
                            <dd class="col-sm-7 mt-2">
                                <input type="text" class="form-control" placeholder="Jam Buka" value="<?php echo $rental->JAM_BUKA?>" id="jam_buka" name="jam_buka" required>
                            </dd>

                            <dt class="col-sm-5 mt-2">Jam Tutup</dt>
                            <dd class="col-sm-7 mt-2">
                                <input type="text" class="form-control" placeholder="Jam Tutup" value="<?php echo $rental->JAM_TUTUP?>" id="jam_tutup" name="jam_tutup" required>
                            </dd>

                            <dt class="col-sm-5 mt-2">Lama Pemesanan Minimum</dt>
                            <dd class="col-sm-7 mt-2">
                                <input type="text" class="form-control" placeholder="Minimum" value="<?php echo $rental->LAMA_PEMESANAN_MINIMUM?>" id="lama_pemesanan_minimum" name="lama_pemesanan_minimum" required>
                            </dd>

                            <dt class="col-sm-5 mt-2">Lama Pemesanan Maksimum</dt>
                            <dd class="col-sm-7 mt-2">
                            <input type="text" class="form-control" placeholder="Maksimum" value="<?php echo $rental->PERSYARATAN_JARAK_WAKTU_PEMESANAN?>" id="lama_pemesanan_maksimum" name="lama_pemesanan_maksimum" required>
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
                </div>
                <!-- </form> -->
            <?php echo form_close();?>
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
