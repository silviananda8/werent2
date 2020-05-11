
    <!-- pendaftaran -->
    
      <!-- Modal masuk-->
      <div class="modal fade " id="modalMasuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-bolder" id="exampleModalCenterTitle ">Masuk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo site_url('login/auth');?>" method='post'>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Lupa Password</label>
                </div>
                <button type="submit" class="btn btn-warning btn-block mb-3 tombol font-weight-bolder">Masuk</button>
                <a href="#lost" type="button" data-toggle="modal" data-target="#modalDaftar" data-dismiss="modal">Belum Punya Akun?
                  <button type="submit" class="badge badge-pill badge-primary" >Daftar</button>
                </a>
                <hr><small class="form-text text-muted text-center">Masuk Dengan Akun</small>
                <div class="row">
                  <div class="col mt-3  mb-3 text-center">
                  <button type="masuk" class="btn btn-outline-primary btn-lg-4 btn-block masuk">
                    <a href="#" class="btn-google mb-20 tombol">
                    <img src="<?= base_url('assets') ?>/icons/icon-google.png"  alt="GOOGLE">
                      Google
                    </a>
                  </button>
                 </div>
                </div>  
                <div>
                
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Akhir Modal masuk-->


      <!-- Modal Daftar-->
      <div class="modal fade " id="modalDaftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg-3 modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-bolder" id="exampleModalCenterTitle ">Daftar</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo site_url('auth/register');?>" method='post'>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="name" name='Nama' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Email</label>
                  <input type="email" name='Email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Konfirmasi Password</label>
                  <input type="password" name='password' class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary btn-block mb-3 tombol font-weight-bolder">Daftar</button>
                <a href="" data-dismiss="modal" type="button" data-toggle="modal" data-target="#modalMasuk" data-dismiss="modal">Sudah Punya Akun?
                  <button type="submit" class="badge badge-pill badge-warning" >Masuk</button>
                </a>
                <hr><small class="form-text text-muted text-center">Daftar Dengan Akun</small>
                <div class="row">
                  <div class="col mt-3  mb-3 text-center">
                  <button type="masuk" class="btn btn-outline-primary btn-lg-4 btn-block masuk">
                    <a href="#" class="btn-google mb-20 tombol">
                    <img src="<?= base_url('assets') ?>/icons/icon-google.png"  alt="GOOGLE">
                      Google
                    </a>
                  </button>
                 </div>
                </div>  
                <div>
                
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Akhir Modal daftar-->

    <!-- akhir pendaftaran -->



    <!--== Footer Area Start ==-->
    <section id="footer-area">
        <!-- Footer Widget Start -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-5 col-md-7">
                        <div class="single-footer-widget">
                            <h2>About Us</h2>
                            <div class="widget-body">
                                <a class="navbar-brand col-lg-10 col-md-6" href="#"><span class="title-line"><i class="fa fa-car fa-lg" style="color: #ffd000; margin-right: 7px;"></i></span>Werent</a>
                                <p class="col-lg-10 col-md-6 "  >Lorem ipsum dolor sit amet, consectetur adipisicing elit. At tempore quisquam cum nihil ipsam officia et reprehenderit officiis asperiores architecto.</p>

                                

                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-3 col-md-5">
                        <div class="single-footer-widget">
                            <h2>Pintasan</h2>
                            <div class="widget-pintasan">

                              <a href="" class="pintasan">Pesan Sekarang</a><br><br>
                              <a href="" class="pintasan">Tips dan Artikel</a><br><br>
                              <a href="" class="pintasan">Proses Pemesanan</a><br><br>
                              <a href="" class="pintasan">Kondisi & Ketentuan</a>
                              
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->

                    <!-- Single Footer Widget Start -->
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget">
                            <h2>Kontak Kami</h2>
                            <div class="widget-body">
                                <p>Lorem ipsum doloer sited amet, consectetur adipisicing elit. nibh auguea, scelerisque sed</p>

                                <ul class="get-touch">
                                    <li><i class="fa fa-map-marker"></i> 800/8, Kazipara, Dhaka</li>
                                    <li><i class="fa fa-mobile"></i> +880 01 86 25 72 43</li>
                                    <li><i class="fa fa-envelope"></i> kazukamdu83@gmail.com</li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget End -->
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> Werent
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->
    </section>
    <!--== Footer Area End ==-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/'); ?>js/jquery-3.4.1.slim.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js" ></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.datetimepicker.full.min.js" ></script>
    <script src="<?= base_url('assets/'); ?>js/myjs.js" ></script>
    <script src="<?php echo base_url().'assets/js/jquery.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/'); ?>js/jquery-ui.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $( "#tempatPenjemputan, #tempatPengembalian" ).autocomplete({
              source: "<?php echo site_url('auth/get_autocomplete/?');?>"
            });

            $( "#id_kota" ).autocomplete({
              source: "<?php echo site_url('rental/c_rental/get_autocomplete/?');?>"
            });
        });
    </script>
  </body>
</html>