
    
    <!-- == start detail pembayaran == -->
            <div class="col-7 mt-5 ml-5 ">

            <!-- Card Kendaraan -->
                <div class="card bg-white rounded p-2" id="card-kendaraan">
                    <div class="row">
                        <div class="col-4">
                            <label for="namaKendaraan">
                                <h4 class="col font-weight-bold">Ford Fusion</h4>
                            </label>
                            <div class="container">
                                <img src="<?= base_url(''); ?>assets/img/ford.jpg" alt="ford" class="mt-3" id="gambarKendaraan">
                            </div>
                        </div>

                        <div class="col-5 mt-5">
                            <div class="container">
                            <h5 class="mb-3"><strong>Penjemputan:</strong></h5>
                                <p class="waktuPenjemputan">10:00 AM, Mon 26-Apr-2020</p>
                                <p class="tempatPenjemputan">Bandara Juanda, Surabaya</p>
                            </div>

                            <hr>
                        
                            <div class="container">
                                <h5><strong>Pengembalian:</strong></h5>
                                    <p class="waktuPenjemputan">12:00 AM, Wed 28-Apr-2020</p>
                                    <p class="tempatPenjemputan">Bandara Juanda, Surabaya</p>
                            </div>
                        </div>
                    
                        <div class="col-3 align-self-center">
                            <a href="<?php echo site_url('auth/detailkendaraan');?> " class="btn btn-warning font-weight-bolder tombol mr-2">Ubah Tanggal</a>
                        </div>
                    </div>
                </div>
            <!-- Card Kendaraan -->

            <!-- Rincian Biaya -->
                <div class="card bg-white rounded p-2 mt-3" id="rincian-biaya">
                    <div class="row">
                        <div class="col-5">
                            <label for="namaKendaraan">
                                <h4 class="col font-weight-bold">Rincian Biaya</h4>
                            </label>
                            <div class="container">
                                <h6 class="mt-2"><strong>Tarif Layanan: </strong></h6>
                                    <p  id="jarak-tempuh">Jarak Tempuh: Rp. ...</p>
                                    <p class="mt-n3" id="nilai-per-mil-tambahan">Nilai Per Mil Tambahan: Rp. ...</p>
                                    <p class="mt-n3" id="jumlah-hari">Jumlah Hari: Rp. ...</p>
                                    <p class="mt-n3" id="jam-tambah">Jam Tambah: Rp. ...</p>
                                    <p class="mt-n3" id="tarif-kendaraan">Tarif Kendaraan: Rp. ...</p>
                                    <p class="mt-n3" id="biaya-kendaraan-tambahan">Biaya Kendaraan Tambahan: Rp. ...</p>
                                    <p class="mt-n3" id="biaya-perusahaan-sewa">Biaya Perusahaan Sewa: Rp. ...</p>
                            </div>
                        </div>

                        <div class="col-4 mt-5">
                            <h6 class="mt-2"><strong>Total Seluruh Biaya: </strong></h6>
                            <p class="total-biaya">Rp. 1.782.000</p> 
                        </div>
                    
                        <div class="col-2 align-self-center ml-n3">
                            <a href="<?php echo site_url('auth/konfirmasi');?> " class="btn btn-warning font-weight-bolder tombol  ">Konfirmasi Pembayaran</a>
                        </div>
                    </div>
                </div>
            <!-- Rincian Biaya -->

            </div>
    <!-- == end detail pembayaran == -->

        </div>

        
    </div>
</div>

    
