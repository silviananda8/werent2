
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

                        </div>

                    </div>

                    <!-- input detail kendaraan -->
                    <div class="col-7 ml-5 bg-white border border-dark"  id="input-detail-kendaraan">
                        <h4 class="text-uppercase">
                            <strong>Detail Kendaraan</strong>
                        </h4>

                            <form action="<?php echo base_url().'rental/c_motor/tambahMotor'?>" class="" method="post">
                                <div class="row row-cols-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="merk_kendaraan">Merk Motor</label>
                                            <input type="text" class="form-control" id="merk_kendaraan" name="merk_kendaraan" aria-describedby="emailHelp" required>
                                        </div>
                                        
                                        <input type="text" class="form-control" id="id_rental" name="id_rental" value="<?php echo $this->session->userdata('ID_RENTAL'); ?>" required hidden>
                                        <div class="form-group">
                                            <label for="deskripsi_kendaraan">Deskripsi Motor</label>
                                            <textarea class="form-control" id="deskripsi_kendaraan" name="deskripsi_kendaraan" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga_kendaraan">Harga Sewa Motor</label>
                                            <input type="number" class="form-control" id="harga_kendaraan" name="harga_kendaraan" min="1" aria-describedby="numberHelp" required>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nama_kendaraan">Nama Motor</label>
                                            <input type="text" class="form-control" id="nama_kendaraan" name="nama_kendaraan" aria-describedby="emailHelp" required>
                                        </div>
                                            <input type="text" class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" value="motor" hidden>
                                        <div class="form-group">
                                            <label for="transisi">Transmisi Motor</label>
                                            <select class="form-control" id="transisi" name="transisi" required>
                                                <option></option>
                                                <option value="otomatis">Otomatis</option>
                                                <option value="manual">Manual</option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kapasitas">Kapasitas Penumpang</label>
                                            <input type="number" class="form-control" id="kapasitas" name="kapasitas" min="1" max="2" aria-describedby="numberHelp" required>
                                        </div>
                                            <input type="number" class="form-control" id="pintu" name="pintu" min="0" max="0" value="0" hidden>
                                            <input type="text" class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" value="motor" hidden>
                                            <input type="text" class="form-control" id="pendingin_udara" name="pendingin_udara" value="tidak" hidden>
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