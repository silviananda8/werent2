<?php foreach($data as $dta):?>
    
    <!-- == start detail kendaraan == -->
        <div class="col-7 mt-5 ml-5 ">
            <div class="card bg-white rounded p-2 box-shadow">
                <div class="row">
                    <div class="col-4">
                        <label for="namaKendaraan">
                            <h4 class="col font-weight-bold"><?php echo $dta->MERK_KENDARAAN;?> <?php echo $dta->NAMA_KENDARAAN;?></h4>
                        </label>
                        <img src="<?= base_url('assets/uploads/kendaraan/') ?><?php echo $dta->FOTO?>" alt="ford" class="ml-3 mt-3" id="gambarKendaraan">
                    </div>

                    <div class="col-5 mt-5">
                        <div class="container">
                            <small>
                            <div class="row row-cols-2">
                                <div class="col">
                                <i class="fas fa-couch"></i>
                                <?php echo $dta->KAPASITAS;?> orang
                                </div>
                                <div class="col">
                                <i class="fas fa-door-closed"></i>
                                <?php echo $dta->PINTU;?> Pintu
                                </div>
                                <div class="col">
                                <i class="fas fa-snowflake"></i>
                                <?php echo $dta->PENDINGIN_UDARA;?>
                                </div>
                                <div class="col">
                                <i class="fas fa-cog"></i>
                                <?php echo $dta->TRANSISI;?>
                                </div>
                            </div>
                            </small>
                        </div>

                        <hr>
                    
                        <div class="container">
                            <small>
                                <p>Termasuk Harga:</p>
                                <div class="ml-2">
                                    <div class="row row-cols-2">
                                        <p><i class="fas fa-check mr-1"></i>Pembatalan</p>
                                        <p><i class="fas fa-check mr-1"></i>Amandemen</p>
                                    </div>
                                    <div class="row row-cols-2">
                                        <p><i class="fas fa-check mr-1"></i>Perlindungan Pencurian</p>
                                        <p><i class="fas fa-check mr-1"></i>Pengabaian Tabrakan</p>
                                    </div>
                                </div>
                            </small>
                        </div>
                    </div>
                
                    <div class="col-3 align-self-center mt-5">
                        <p class="font-weight-bold">
                             Rp. <?php echo $dta->HARGA_SEWA_KENDARAAN;?>,00
                        <p>

                        <a href="#" class="btn btn-warning font-weight-bolder tombol ml-2">Chatting</a>
                    </div>
                </div>
            </div>


            <div class="card bg-white rounded p-2 box-shadow mt-3">
                <div class="row">
                    <div class="col list-group ml-4">
                        <!-- Nama Rental -->
                        <h5 class="mb-1">Nama Rental</h5>
                        <p class="mb-1"><small><?php echo $dta->NAMA_RENTAL;?></small></p>

                        <!-- Rating -->
                        <h5 class="mb-1 mt-3">Rating <small>3</small><i class="fas fa-star ml-1 rating"></i></h5>

                        <!-- Lokasi Rental -->
                        <h5 class="mb-1 mt-3">Lokasi Rental</h5>
                        <p class=""><i class="fas fa-map-marker icon-map ml-1"></i><small> <?php echo $dta->ALAMAT_RENTAL;?></small></p>
                    
                        <!-- Jam Buka -->
                        <h5 class="mb-1 mt-3">Jam Buka</h5>
                        <div class="row">
                            <div class="col">
                                <p class=""><small><?php echo $dta->HARI_1;?>-<?php echo $dta->HARI_2;?></small></p>
                            </div>
                            <div class="col mr-5">
                                <p class=""><small><?php echo $dta->buka;?> - <?php echo $dta->tutup;?></small></p>
                            </div>
                        </div>
                        
                        <!-- Cara Pengambilan -->
                        <h5 class="mb-1">Cara Pengambilan</h5>
                        <p class="mb-1"><small>Penjemputan dan pengembalian kendaraan sesuai dengan tempat dan waktu yang telah ditentukan sesuai kesepakatan di awal.</small></p>
                    </div>

                    <!-- Map -->
                    <div class="col">
                        <div class="map">
                            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63316.450627349535!2d112.70970413268631!3d-7.32261999101443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb6c094d1b87%3A0xbc3def4f4bd2fa7!2sUniversitas%20Islam%20Negeri%20Sunan%20Ampel%20Surabaya!5e0!3m2!1sid!2sid!4v1587529136716!5m2!1sid!2sid" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php foreach($data as $dta):?>
                    <div class="col d-flex justify-content-end pl-3 pr-3" disable >
                        <a type="button" href="<?php if($this->uri->segment('2')==='detailmotor'){echo site_url('auth/persyaratanPenyewa_motor/'.$dta->ID_MOTOR);} else if ($this->uri->segment('2')==='detailKendaraan') { echo site_url('auth/persyaratanPenyewa/'.$dta->ID_MOBIL);}?>" class="btn btn-warning font-weight-bolder tombol mr-3 mt-2">Selengkapnya</a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <!-- == end detail kendaraan == -->


        </div>

        
    </div>
</div>

<?php endforeach; ?>
