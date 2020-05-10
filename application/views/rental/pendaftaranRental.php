
<div class="container">
  <div class="card border-warning mb-3 mt-4 p-2 rounded-top card-shadow" >
  <div class="card-header bg-warning rounded-top text-center "><h4>Pendaftaran Perusahaan Penyewa Kendaraan</h4></div>
  <div class="card-body ">
    <h4 class="card-title mb-4">Tantang Penyewaan</h4>
    <?php echo form_open_multipart('rental/c_rental/tambahRental');?>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nama Penyewaan</label>
      <input type="text" class="form-control" placeholder="Apa nama usaha penyewaan anda?" id="nama_rental" name="nama_rental" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Kota Penyewaan</label>
      <input type="text" class="form-control" placeholder="Dimana kota penyewaan anda?" id="id_kota" name="id_kota" required>
    </div>
  </div>
    <div class="mb-3">
      <label for="inputDeskripsi">Deskripsi Penyewaan</label>
      <textarea class="form-control " placeholder="Silahkan masukkan deskripsi rinci mengenai usaha penyewaan anda" required id="deskripsi_rental" name="deskripsi_rental"></textarea>
      <div class="invalid-feedback">
        Please enter a message in the textarea.
      </div>
    </div>
  <div class="form-group">
    <label for="inputAddress">Alamat Penyewaan</label>
    <input type="text" class="form-control" id="alamat_rental" name="alamat_rental" placeholder="Dimana lokasi penyewaan anda?">
  </div>
  
  <!-- <h4 class="card-title mb-4 mt-4">Persyaratan Menyewa</h4> -->
  <div class="form-group">
    <!-- <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label float-left" for="gridCheck">
        Check me out                  
      </label><input type="number" class="form-control" style="width: 60px" id="penumpang" name="penumpang" min="1" max="8">
    </div> -->

    <div class="custom-file">
      <input type="file" class="custom-file-input" id="foto" name="foto" required>
      <label class="custom-file-label" for="customFile">Foto Rental</label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</div>
<?php echo form_close();?>
  </div>
</div>
</div>

    <!-- pendaftaran -->