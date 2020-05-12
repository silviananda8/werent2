<?php foreach($data as $dta):?>
<form action="<?php if ($this->uri->segment('2')==='konfirmasiBookingMobil') { echo site_url('auth/pembayaranMobil/'.$dta->ID_MOBIL);} else{echo site_url('auth/pembayaranMotor/'.$dta->ID_MOTOR);}?>" method='post'>
<section class="bg-light pt-3 ">
  <div class="container">
    <div class="row mt-4">
      <div class="col-lg-8 mb-3 ">
        <div class="card card-shadow mb-3" >
          <div class="card-body">
            <h5 class="card-title">Lokasi Pengambilan dan Pengembalian</h5>
            <div class="yellow-divider mb-3"></div>
            <div class="row justify-content-center">
              <div class="col icon-orange">
                <p><i class="fa fa-car "></i>  Pengambilan : <small><?php echo $this->session->userdata('TANGGAL_PENGAMBILAN');?></small></p>
                <div class="card mb-3">

                  <div class="card-body p-2 form-check">
                    <div class="form-check">
                   <input class="form-check-input" type="radio" name="AlamatAmbil" value="Kantor Rental" checked id="kantor" onchange="disable()">
                   <label class="form-check-label" for="AlamatAmbil1">
                     Kantor Rental <br><small>Gratis</small>
                   </label>
                 </div>
                 </div>
                </div>
                 <div class="card mb-3">
                  <div class="card-body p-2 form-check">
                    <div class="form-check ">
                   <input class="form-check-input" type="radio" name="AlamatAmbil" onchange="disable()" id="lokasilain" >
                   <label class="form-check-label" for="AlamatAmbil2">
                     <p>  Lokasi lain :</p>
                     <small>Dapat dikenakan biaya tambahan</small>
                   </label>
                 </div>
                 </div>
                 <div class="form-group p-2">
                <input  class="form-control" id="alamatambil" disabled placeholder="alamat pengambilan" name="AlamatAmbil">
                </div>
               </div>
                          
              </div>
              <div class="col icon-orange">
                <p><i class="fa fa-car "></i>  Pengembalian : <small><?php echo $this->session->userdata('TANGGAL_PENGEMBALIAN');?></small></p>
                  <div class="card mb-3">
                  <div class="card-body p-2">
                    <div class="form-check ">
                   <input class="form-check-input" type="radio" name="AlamatKembali" value="Kantor Rental" checked id="kantor2" onchange="disable2()">
                   <label class="form-check-label" for="defaultCheck1">
                     Kantor Rental <br><small> Gratis</small>
                   </label>
                 </div>
                 </div>
                </div>
                 <div class="card mb-3">
                  <div class="card-body p-2">
                    <div class="form-check ">
                   <input class="form-check-input" type="radio" name="AlamatKembali" id="lokasilain2" onchange="disable2()" value="Lokasi Lain">
                   <label class="form-check-label" for="defaultCheck1">
                     <p>  Lokasi lain :</p>
                     <small>Dapat dikenakan biaya tambahan</small>
                   </label>
                 </div>
                 </div>
                 <div class="form-group p-2">
                <input class="form-control" id="alamatkembali" disabled placeholder="alamat pengembalian" name="AlamatKembali">
                </div>
               </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-shadow mb-3" >
          <div class="card-body tambahan">
            <h5 class="card-title">Layanan Tambahan (Opsional)</h5>
            <div class="yellow-divider mb-3"></div>
            <ul class="list-group">
              <li class="list-group-item float-right">
                <div class="row justify-content-center"> 
                  <div class=" col-lg form-group form-check pr-4">
                    <input type="checkbox" class="form-check-input " name="SUPIR" value="1.500.000">
                    <label class="form-check-label" for="exampleCheck1">Supir tambahan selama menyewa</label>
                  </div>
                  <div class="col-lg-3">  
                    <p><small>Rp1.500.000/Hari</small></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="card card-shadow mb-3" >
          <div class="card-body">
            <h5 class="card-title">Persyaratan Sewa Kendaraan</h5>
            <div class="yellow-divider mb-3"></div>
            <h6>Usia Minimum</h6>
            <p> Usia minimum untuk menyewa kendaraan ini yaitu 20 tahun</p>
            <h6>Surat Izin Mengemudi</h6>
            <p>Setiap pengemudi harus menunjukkan SIM nasional yang lengkap, valid, dan asli, minimum selama 2 tahun. Jika SIM Anda tidak dalam bahasa yang digunakan di negara tujuan Anda, Izin Pengemudi Internasional untuk menemani SIM Anda sangat dianjurkan.</p>
            <h6>Kartu Tanda Pengenal</h6>
            <p>Setiap driver harus menunjukkan kartu tanda pengenalnya</p>
            <h6>Voucher Pemesanan</h6>
            <p>Penyewa harus menunjukkan cetakan Voucher Konfirmasi Pemesanan di lokasi rental. Dokumen ini secara resmi mengkonfirmasi semua layanan yang disepakati, kondisi pembayaran, tarif, diskon, serta ketersediaan kendaraan di dalam grup yang dipilih.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 mb-4">
        <div class="card card-shadow" >
          <div class="card-body">
            <div class="row">
              <div class="col-5">
                <img src="<?= base_url('assets/uploads/kendaraan/') ?><?php echo $dta->FOTO?>" class="img-fluid" style="height: 100px;width: 100px;" alt="">
              </div>      
              <div class="col-7">
                <p class="font-weight-bolder mb-1"><?php echo $dta->NAMA_KENDARAAN;?></p>
                <p><small><?php echo $dta->MERK_KENDARAAN;?></small></p>
                <a href=""><small>Lihat Detail Kendaraan</small></a>
              </div>
              <div class="h-divider mt-3"></div>
              </div>
            </div>
            <div class="row justify-content-center ">
              <div class="col ">
                <p class="pl-3"><?php echo $dta->NAMA_RENTAL;?></p>           
              </div>
              <div class="col icon-orange">
                <p><i class="fas fa-star "></i> 7,5 / Bagus</p>
            </div>
          </div>
          <div class="row">
           <div class="col">
               <p class="pl-3"><?php echo $dta->ALAMAT_RENTAL;?></p>
          </div>            
           <div class="h-divider"></div>
          </div>
          <p class="font-weight-bolder mb-1 pl-3">Reservasi termasuk dengan </p>
          <div class="col-lg mt-2 ">
            <p><i class="fas fa-check mr-1"></i>Pembatalan</p>
            <p><i class="fas fa-check mr-1"></i>Amandemen</p>
            <p><i class="fas fa-check mr-1"></i>Perlindungan Pencurian</p>
          </div>
          <div class="h-divider mb-3"></div>
          <div class="row justify-content-center ">
              <div class="col ">
                <p class="pl-3">Harga Sewa</p>
              </div>
              <div class="col font-weight-bolder">
                <p><span>Rp </span><?php echo $dta->HARGA_SEWA_KENDARAAN;?></p>
            </div>
        </div>
        
        <input class="btn btn-lg btn-warning btn-block" type="submit" value="Pesan Sekarang" ></input>
        
      </div>
    </div>
  </div>
</section>
</form>
<?php endforeach;?>
<!-- akhir konfirmasi -->
<script >
function disable() {
    //one radio button
    var radio = document.getElementById("lokasilain");
    var radio2 = document.getElementById("kantor");
    var ambil = document.getElementById("alamatambil");
    if (radio.checked == true) {
        ambil.disabled  = false;
    }else if(radio2.checked == true){
      ambil.disabled  = true;
      ambil.value="";
    }
}
</script>
<script >
function disable2() {
    //one radio button
    var radio = document.getElementById("lokasilain2");
    var radio2 = document.getElementById("kantor2");
    var ambil = document.getElementById("alamatkembali");
    if (radio.checked == true) {
        ambil.disabled  = false;
    }else if(radio2.checked == true){
      ambil.disabled  = true;
      ambil.value="";
    }
}
</script>