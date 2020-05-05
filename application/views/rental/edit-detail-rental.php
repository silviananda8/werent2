
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row mt-5">
                <div class="col-4 mr-4">
                    <div class="">
                        <img src="<?= base_url('assets/img/') ?>avatar.jpg" alt="..." class="image-rental" style="width: 341px;">
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

                    <form action="" method="post" class="form-group mb-3">
                        <dl class="row mt-3">
                            <dt class="col-sm-5">Nama Rental</dt>
                            <dd class="col-sm-7">
                                <input type="text" class="form-control" placeholder="Nama Rental" value="Adam's Rental" id="nama_rental" name="nama_rental">
                            </dd>

                            <dt class="col-sm-5 mt-2">Alamat Rental</dt>
                            <dd class="col-sm-7 mt-2">
                                <input type="text" class="form-control" placeholder="Alamat Rental" value="Jl. Semangka no.27-29, Surabaya" id="alamat_rental" name="alamat_rental">
                            </dd>

                            <dt class="col-sm-5 mt-2">Jam Buka</dt>
                            <dd class="col-sm-7 mt-2">
                                <input type="text" class="form-control" placeholder="Jam Buka" value="08:00 AM" id="jam_buka" name="jam_buka">
                            </dd>

                            <dt class="col-sm-5 mt-2">Jam Tutup</dt>
                            <dd class="col-sm-7 mt-2">
                                <input type="text" class="form-control" placeholder="Jam Tutup" value="09:00 PM" id="jam_tutup" name="jam_tutup">
                            </dd>

                            <dt class="col-sm-5 mt-2">Lama Pemesanan Minimum</dt>
                            <dd class="col-sm-7 mt-2">
                                <input type="text" class="form-control" placeholder="Minimum" value="24 Jam" id="lama_pemesanan_minimum" name="lama_pemesanan_minimum">
                            </dd>

                            <dt class="col-sm-5 mt-2">Lama Pemesanan Maksimum</dt>
                            <dd class="col-sm-7 mt-2">
                            <input type="text" class="form-control" placeholder="Maksimum" value="72 Jam" id="lama_pemesanan_maksimum" name="lama_pemesanan_maksimum">
                            </dd>

                            <dt class="col-sm-5 mt-2">Aturan Pemesanan</dt>
                            <dd class="col-sm-7 mt-2">
                                <textarea class="form-control" name="aturan_pemesanan" id="aturan_pemesanan" cols="35" rows="3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, at.</textarea>
                            </dd>

                            <dt class="col-sm-5 mt-2">Kebijakan Pembatalan</dt>
                            <dd class="col-sm-7 mt-2">
                                <textarea class="form-control" name="kebijakan_pembatalan" id="kebijakan_pembatalan" cols="35" rows="3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit, perspiciatis!</textarea>
                            </dd>

                            <dt class="col-sm-5 mt-2">Deskripsi Rental</dt>
                            <dd class="col-sm-7 mt-2">
                                <textarea class="form-control" name="deskripsi_rerntal" id="deskripsi_rerntal" cols="35" rows="3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores adipisci in error dolor dolorem eveniet veniam minus deleniti molestiae commodi?</textarea>
                            </dd>
                        </dl>

                        <button type="submit" class="btn btn-warning tombol">
                            <strong>Simpan Perubahan</strong>
                        </button>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
