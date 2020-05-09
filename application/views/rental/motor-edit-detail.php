
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
  
         
  
            <!-- Begin Page Content -->
            <div class="container-fluid">
  
                <!-- Page Heading -->
                <?php echo form_open_multipart('rental/c_motor/prosesEditDetail');?>
                <div class="row row-cols-2 mt-5 mb-5">
                
                <?php foreach ($data as $dta): ?>
                    
                    <div class="col-4 mr-4">

                        <div class="container">
                            <!-- input foto kendaraan -->
                            <div class="row row-cols-1">
                                <div class="col">
                                    <div class="">
                                        <img src="<?= base_url('assets/uploads/kendaraan/') ?><?php echo $dta->FOTO;?>" alt="..." class="image-rental" style="width: 296px;">
                                            <div class="form-group mt-3">
                                                <input type="file" class="form-control" id="foto" name="foto" accept="image/png, image/jpeg" required>
                                                
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
                            <div class="row row-cols-2">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nama_kendaraan">Merk Motor</label>
                                        <input type="text" class="form-control" id="merk_kendaraan" name="merk_kendaraan" value="<?php echo $dta->MERK_KENDARAAN;?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi_kendaraan">Deskripsi Motor</label>
                                        <textarea class="form-control" id="deskripsi_kendaraan" name="deskripsi_kendaraan" rows="4"><?php echo $dta->DESKRIPSI_KENDARAAN;?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga_kendaraan">Harga Sewa Motor</label>
                                        <input type="number" class="form-control" id="harga_kendaraan" name="harga_kendaraan" min="1" value="<?php echo $dta->HARGA_SEWA_KENDARAAN;?>" required>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label for="nama_kendaraan">Nama Motor</label>
                                        <input type="text" class="form-control" id="nama_kendaraan" name="nama_kendaraan" value="<?php echo $dta->NAMA_KENDARAAN;?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="transmisi">Transmisi Motor</label>
                                        <select class="form-control" id="transmisi" name="transmisi" required>
                                            <option></option>
                                            <option value="otomatis">Otomatis</option>
                                            <option value="manual">Manual</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kapasitas">Kapasitas Penumpang</label>
                                        <input type="number" class="form-control" id="kapasitas" name="kapasitas" min="1" max="2" value="<?php echo $dta->KAPASITAS;?>" required>
                                    </div>
                                </div>
                            </div>
                            <input type="text" class="form-control" value="<?php echo $dta->ID_MOTOR?>" id="id_motor" name="id_motor" hidden>
                            <button type="submit" class="btn btn-warning mb-3">
                                Submit
                            </button>
                    </div>
                    <!-- akhir input detail kendaraan -->

                    <?php endforeach; ?>
                </div>
                <?php echo form_close();?>
                </div>
                <!-- /.container-fluid -->
  
            </div>
            <!-- End of Main Content -->
  
  
  
        </div>
        <!-- End of Content Wrapper -->
  
    </div>
    <!-- End of Page Wrapper -->