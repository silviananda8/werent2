<?php foreach($data as $dta):?>
<section class="bg-light pt-3 ">
  <div class="container">
    <div class="row mt-4">
      <div class="col-lg-8 mb-3 ">
        <div class="card card-shadow mb-3" >
          <div class="card-body">
            <h5 class="card-title">Informasi Penyewa</h5>
            <div class="yellow-divider mb-3"></div>
            <div class="row justify-content-center">
              <div class="col icon-orange">
                <p><i class="fas fa-user-alt "></i>  penyewa : <small><?php echo $this->session->userdata('NAMA');?></small></p>
               </div>       
              <div class="col icon-orange">
                <p><i class="fas fa-envelope "></i>  Email akses : <small><?php echo $this->session->userdata('EMAIL');?></small></p>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-shadow mb-3" >
          <div class="card-body">
            <h5 class="card-title">Metode Pembayaran</h5>
            <a href="" class="btn btn-outline-primary">Transfer Bank</a>
            <div class="yellow-divider mb-3"></div>
            <h6>Pilih Bank</h6>
            <ul class="list-group">
              <li class="list-group-item float-right">
                <div class="row justify-content-center"> 
                  <div class="col-lg-1 form-group form-check pr-4">
                    <input type="checkbox" class="form-check-input " id="exampleCheck1">
                  </div>
                  <div class=" col-lg-1 pl-3">
                    <i class="fas fa-credit-card fa-2x"></i> 
                  </div>
                  <div class="col-lg">  
                    <p>Bank BCA</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item float-right">
                <div class="row justify-content-center"> 
                  <div class="col-lg-1 form-group form-check pr-4">
                    <input type="checkbox" class="form-check-input " id="exampleCheck1">
                  </div>
                  <div class=" col-lg-1 pl-3">
                    <i class="fas fa-credit-card fa-2x"></i> 
                  </div>
                  <div class="col-lg">  
                    <p>Bank Mandiri</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item float-right">
                <div class="row justify-content-center"> 
                  <div class="col-lg-1 form-group form-check pr-4">
                    <input type="checkbox" class="form-check-input " id="exampleCheck1">
                  </div>
                  <div class=" col-lg-1 pl-3">
                    <i class="fas fa-credit-card fa-2x"></i> 
                  </div>
                  <div class="col-lg">  
                    <p>Bank BRI</p>
                  </div>
                </div>
              </li>
              <li class="list-group-item float-right">
                <div class="row justify-content-center"> 
                  <div class="col-lg-1 form-group form-check pr-4">
                    <input type="checkbox" class="form-check-input " id="exampleCheck1">
                  </div>
                  <div class=" col-lg-1 pl-3">
                    <i class="fas fa-credit-card fa-2x"></i> 
                  </div>
                  <div class="col-lg">  
                    <p>Bank BCA</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="card card-shadow mb-3" >
          <div class="card-body">
            <h5 class="card-title">Total Pembayaran</h5>
            <div class="yellow-divider mb-3"></div>
             <div class="row justify-content-center ">
            <div class="col-lg-7 ">
                <p class="pl-3">Supir</p>
              </div>
            <div class="col-lg-5 font-weight-bolder">
                <p><span>Rp </span><?php if ($this->session->userdata('SUPIR')==''){
              echo "0";
            }else{
              echo $this->session->userdata('SUPIR');
            } ?></p>
            </div>

            <div class="col-lg-7 ">
                <p class="pl-3">penjemputan</p>
              </div>
              <div class="col-lg-5 font-weight-bolder">
                <p><span>Rp </span><?php if ($this->session->userdata('AlamatAmbil')=='Kantor Rental'){
              echo "0";
            }else{
              echo "300.000";
            } ?></p>
            </div>
            <div class="col-lg-7 ">
                <p class="pl-3">Pengembalian</p>
              </div>
              <div class="col-lg-5 font-weight-bolder">
                <p><span>Rp </span><?php if ($this->session->userdata('AlamatKembali')=='Kantor Rental'){
              echo "0";
            }else{
              echo "300.000";
            } ?></p>
            </div>
              <div class="col-lg-7 ">
                <p class="pl-3">Harga Sewa</p>
              </div>
              <div class="col-lg-5 font-weight-bolder">
                <p><span>Rp </span><?php echo $dta->HARGA_SEWA_KENDARAAN;?></p>
            </div>
             <div class="col-lg-7 ">
                <p class="pl-3">Total biaya Sewa</p>
              </div>
              <?php

                $sewa=(int)$dta->HARGA_SEWA_KENDARAAN;
                if ($this->session->userdata('SUPIR')==''){$Supir=(int)0;}else{$Supir=(int)1500000;}
                if ($this->session->userdata('AlamatAmbil')=='Kantor Rental'){$ambil=(int)0;}else{$ambil=(int)300000;}
                if ($this->session->userdata('AlamatKembali')=='Kantor Rental'){$kembali=(int)0;}else{$kembali=(int)300000;}
                
                $Total=$sewa+$Supir+$ambil+$kembali
              ?>
              <div class="col-lg-5 font-weight-bolder">
                <p><span>Rp </span><?php echo number_format($Total);?></p>
                <a href="" class="btn btn-warning font-weight-normal mt-3">Buat Pesanan</a>
            </div>
        </div>
       
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card card-shadow" >
          <div class="card-body">
            <div class="row">
              <div class="col-5">
                <img src="<?= base_url('assets/uploads/kendaraan/') ?><?php echo $dta->FOTO?>" class="img-fluid" style="height: 100px;width: 120px;" alt="">
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
          <div class="h-divider"></div>
          </div>
          <div class="row">
           <div class="col pl-4 icon-orange">
            <p><i class="fa fa-car "></i>  Pengambilan : <small><?php echo $this->session->userdata('TANGGAL_PENGAMBILAN');?></small></p>
            <p class="pl-4 mt-1"><?php echo $this->session->userdata('AlamatAmbil');?></p>
            <p><i class="fa fa-car "></i>  Pengembalian : <small><?php echo $this->session->userdata('TANGGAL_PENGEMBALIAN');?></small></p>
            <p class="pl-4 mt-1"><?php echo $this->session->userdata('AlamatKembali');?></p>

          </div>            
           <div class="h-divider"></div>
          </div>
          <p class="font-weight-bolder mb-1 pl-3">Reservasi termasuk dengan </p>
          <div class="col-lg mt-2 ">
            <p><i class="fas fa-check mr-1"></i>Pembatalan</p>
            <p><i class="fas fa-check mr-1"></i>Amandemen</p>
            <p><i class="fas fa-check mr-1"></i>Perlindungan Pencurian</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endforeach;?>

<!-- akhir konfirmasi -->