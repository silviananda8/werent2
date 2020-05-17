

        <div class="container">
          <div class="card text-center mt-4 mb-4 card-shadow">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <?php if($kode==1):?>
                <li class="nav-item">
                  <a class="nav-link text-warning link-orange" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pesanan Saya</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-warning link-orange"  id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                </li>
                <?php else:?>
                <li class="nav-item">
                  <a class="nav-link active text-warning link-orange" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pesanan Saya</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-warning link-orange"  id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
                </li>
                <?php endif;?>
              </ul>
            </div>
            <div class="card-body list-booking ">
              <div class="tab-content" id="pills-tabContent">
              <?php if($kode==1):?>
                <div class="tab-pane fade show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <?php else:?>
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <?php endif;?>

              <?php if($this->session->flashdata() == true):?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('msg','Pesanan berhasil dihapus');?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php else:?>
              <?php endif;?>

              <?php foreach($mobil as $ps):?>
              <div class="card mb-3 shadow-sm p-3 mb-5 bg-white rounded" >
                <div class="row no-gutters">
                  <div class="col-lg-2 p-2 mt-4">
                    <img src="<?= base_url('/assets/uploads/kendaraan/') ?><?php echo $ps->FOTO;?>" class="card-img" alt="...">
                  </div>
                  <div class="col-md-10">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-3 text-left mt-1">
                          <div><span class="badge badge-warning"><?php echo $ps->KODE_PEMESANAN;?></span><small> Kode Pemesanan</small>
                          </div> 
                              <h5 class="card-title mt-2"><?php echo $ps->MERK_KENDARAAN;?> <?php echo $ps->NAMA_KENDARAAN;?></h5>
                              <p class="card-text font-weight-bold mt-2">Rp <?php echo number_format($ps->HARGA_SEWA_KENDARAAN);?></p>

                        </div>
                        <div class="col-lg-6 text-left">
                          <p>Pengambilan : <?php echo $ps->TANGGAL_PENGAMBILAN;?></p>
                          <p>Lokasi Pengambilan : <?php echo $ps->LOKASI_PENJEMPUTAN;?> </p>
                          <p>Pengembalian : <?php echo $ps->TANGGAL_PENGEMBALIAN;?></p>
                          <p>Lokasi Pengambilan : <?php echo $ps->LOKASI_PENGANTARAN;?> </p>
                        </div>
                        <div class="col-lg-3 ml-auto">

                          <a class="btn btn-info pl-4 pr-4 mb-3" href="<?php echo site_url('c_user/detailMobil/'.$ps->ID_PESAN);?>" role="button">Melihat Rincian</a>
                          <a class="btn btn-danger pl-3 pr-3" href="<?php echo site_url('c_user/deletePesanan/'.$ps->KODE_PEMESANAN);?>" role="button">Batalkan Pesanan</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach;?>

              <?php foreach($motor as $ps):?>
              <div class="card mb-3 shadow-sm p-3 mb-5 bg-white rounded" >
                <div class="row no-gutters">
                  <div class="col-lg-2 p-2 mt-4">
                    <img src="<?= base_url('/assets/uploads/kendaraan/') ?><?php echo $ps->FOTO;?>" class="card-img" alt="...">
                  </div>
                  <div class="col-md-10">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-3 text-left mt-1">
                          <div><span class="badge badge-warning"><?php echo $ps->KODE_PEMESANAN;?></span><small> Kode Pemesanan</small>
                          </div> 
                              <h5 class="card-title mt-2"><?php echo $ps->MERK_KENDARAAN;?> <?php echo $ps->NAMA_KENDARAAN;?></h5>
                              <p class="card-text font-weight-bold mt-2">Rp <?php echo $ps->HARGA_SEWA_KENDARAAN;?></p>

                        </div>
                        <div class="col-lg-6 text-left">
                          <p>Pengambilan : <?php echo $ps->TANGGAL_PENGAMBILAN;?></p>
                          <p>Lokasi Pengambilan : <?php echo $ps->LOKASI_PENJEMPUTAN;?> </p>
                          <p>Pengembalian : <?php echo $ps->TANGGAL_PENGEMBALIAN;?></p>
                          <p>Lokasi Pengambilan : <?php echo $ps->LOKASI_PENGANTARAN;?> </p>
                        </div>
                        <div class="col-lg-3 ml-auto">

                          <a class="btn btn-info pl-4 pr-4 mb-3" href="<?php echo site_url('c_user/detailMotor/'.$ps->ID_PESAN);?>" role="button">Melihat Rincian</a>
                          <a class="btn btn-danger pl-3 pr-3" href="<?php echo site_url('c_user/deletePesanan/'.$ps->KODE_PEMESANAN);?>" role="button">Batalkan Pesanan</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach;?>
              
              
              </div>
              <?php if($kode==1):?>
                <div class="tab-pane fade show active text-left" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <?php else:?>
                <div class="tab-pane fade show text-left" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <?php endif;?>
                <h5>Informasi Akun Saya</h5> <hr>
                <?php if($this->session->flashdata() == true):?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <?php echo $this->session->flashdata('msg','Data anda berhasil diperbarui');?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php else:?>
                  <?php endif;?>
                <div class="row">
                  <div class="col-lg-2">
                    <p>Nama pengguna</p>
                    <p>Email pengguna</p>
                    <p>Password pengguna</p>
                    <p>Kota tinggal</p>
                    <p>Nomor telp.</p>
                    <p>Tanggal lahir</p>
                    <p>Jenis kelamin</p>
                  </div>
                  <div class="col-lg-4">
                    <?php foreach ($profil as $pf):?>
                    <form action="<?php echo site_url('c_user/editProfil');?>" method="post">
                      <div class="form-group">
                        <input class="form-control form-control-sm mb-2" type="text" id="nama" name="nama" placeholder="Nama Pengguna..." value="<?php echo $pf->NAMA;?>" required>
                        <input class="form-control form-control-sm mb-2" type="email" id="email" name="email" placeholder="xxxxx@gmail.com" required value="<?php echo $pf->EMAIL;?>">
                        <input class="form-control form-control-sm mb-2" type="password" id="password" name="password" placeholder="Password" required value="<?php echo $pf->PASSWORD;?>">
                        <input class="form-control form-control-sm mb-2" type="text" id="tempatPenjemputan" name="kota" placeholder="Kota Saat Ini" value="<?php echo $pf->KOTA;?>">
                        <input class="form-control form-control-sm mb-2" type="number" id="nomer_telepon" name="nomer_telepon" min="00000000000" max="999999999999" placeholder="012-3456-7890" value="<?php echo $pf->TELEPON_SELULER;?>">
                        <input class="form-control form-control-sm mb-2" type="text" id="tanggalLahir" name="tanggal_lahir" placeholder="Tahun - Bulan - Tanggal" value="<?php echo $pf->TANGGAL_LAHIR;?>">
                        <select class="form-control form-control-sm mb-2" id="jenis_kelamin">
                          <?php if($pf->JENIS_KELAMIN == "Perempuan"):?>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-Laki">Laki-Laki</option>  
                          <?php else: ?>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                          <?php endif;?>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-info mt-4"> Simpan Perubahan </button>
                    </form>
                    <?php endforeach;?>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>



          
        </div>


<!-- akhir konfirmasi -->
