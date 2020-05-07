
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
  
         
  
            <!-- Begin Page Content -->
            <div class="container-fluid">
  
                <!-- Page Heading -->
                <div class="row row-cols-2 mt-5 mb-5">
                
                    
                    <div class="col-4 mr-4">

                        <div class="container">
                            <!-- input foto kendaraan -->
                            <div class="row row-cols-1">
                                <div class="col">
                                    <div class="">
                                        <img src="<?= base_url('assets/img/') ?>plus.png" alt="..." class="image-rental" style="width: 296px;">
                                            <div class="form-group mt-3">
                                                <input type="file" class="form-control" id="foto_kendaraan" name="foto_kendaraan" accept="image/png, image/jpeg">
                                                
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir input foto kendaraan -->


                            <!-- input fitur kendaraan -->
                            <!-- <div class="col border border-dark" id="input-fitur-kendaraan">
                                <h4 class="text-uppercase">
                                    <strong>Fitur Kendaraan</strong>
                                </h4>
                                <div class="row row-cols-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="supir">Supir</label>
                                            <select class="form-control" id="supir" name="supir">
                                                <option value="ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="rem_anti_lock">Rem Anti Lock</label>
                                            <select class="form-control" id="rem_anti_lock" name="rem_anti_lock">
                                                <option value="ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="pendingin_udara">Pendingin Udara</label>
                                            <select class="form-control" id="pendingin_udara" name="pendingin_udara">
                                                <option value="ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="power_windows">Power Windows</label>
                                            <select class="form-control" id="power_windows" name="power_windows">
                                                <option value="ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="radio">Radio</label>
                                            <select class="form-control" id="radio" name="radio">
                                                <option value="ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="airbag">Airbag</label>
                                            <select class="form-control" id="power" name="airbag">
                                                <option value="ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="power_steering">Power Steering</label>
                                            <select class="form-control" id="power_steering" name="power_steering">
                                                <option value="ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="rem_anti_lock">Rem Anti Lock</label>
                                            <select class="form-control" id="rem_anti_lock" name="rem_anti_lock">
                                                <option value="ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="power_door_lock">Lock Pintu</label>
                                            <select class="form-control" id="power_door_lock" name="power_door_lock">
                                                <option value="ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                        
                                        
                                </div>
                            </div> -->
                            <!-- akhir input fitur kendaraan -->

                        </div>

                    </div>

                    <!-- input detail kendaraan -->
                    <div class="col-7 ml-5 bg-white border border-dark"  id="input-detail-kendaraan">
                        <h4 class="text-uppercase">
                            <strong>Detail Kendaraan</strong>
                        </h4>

                            <form action="<?php echo base_url().'rental/c_mobil/tambahMobil'?>" class="" method="post">
                                <div class="row row-cols-2">
                                    <div class="col">
                                        
                                        <div class="form-group">
                                            <label for="merk_kendaraan">Merk Mobil</label>
                                            <input type="text" class="form-control" id="merk_kendaraan" name="merk_kendaraan" aria-describedby="emailHelp" required>
                                        </div>
                                        <input type="text" class="form-control" id="id_rental" name="id_rental" value="<?php echo $this->session->userdata('ID_RENTAL'); ?>" required hidden>
                                        <div class="form-group">
                                            <label for="deskripsi_kendaraan">Deskripsi Mobil</label>
                                            <textarea class="form-control" id="deskripsi_kendaraan" name="deskripsi_kendaraan" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga_kendaraan">Harga Sewa Mobil</label>
                                            <input type="number" class="form-control" id="harga_kendaraan" name="harga_kendaraan" min="1" aria-describedby="numberHelp" required>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <!-- <div class="form-group">
                                            <label for="jenis_kendaraan">Jenis Kendaraan</label>
                                            <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" required>
                                                <option></option>
                                                <option value="mobil">Mobil</option>
                                                <option value="sepeda motor">Sepeda Motor</option>
                                            </select>
                                        </div> -->
                                        <div class="form-group">
                                            <label for="nama_kendaraan">Nama Mobil</label>
                                            <input type="text" class="form-control" id="nama_kendaraan" name="nama_kendaraan" aria-describedby="emailHelp" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="transmisi">Transmisi Mobil</label>
                                            <select class="form-control" id="transmisi" name="transmisi" required>
                                                <option></option>
                                                <option value="otomatis">Otomatis</option>
                                                <option value="manual">Manual</option>
                                                <option value="continous variable">Continous Variable</option>
                                                <option value="dual clutch">Dual Clutch</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kapasitas">Kapasitas Penumpang</label>
                                            <input type="number" class="form-control" id="kapasitas" name="kapasitas" min="1" max="8" aria-describedby="numberHelp" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pintu">Pintu Kendaraan</label>
                                            <input type="number" class="form-control" id="pintu" name="pintu" min="2" max="4" aria-describedby="numberHelp" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-warning mb-3">
                                    Submit
                                </button>
                            </form>
                    </div>
                    <!-- akhir input detail kendaraan -->



                </div>
                </div>
                <!-- /.container-fluid -->
  
            </div>
            <!-- End of Main Content -->
  
  
  
        </div>
        <!-- End of Content Wrapper -->
  
    </div>
    <!-- End of Page Wrapper -->