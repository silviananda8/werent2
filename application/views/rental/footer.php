
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Anda akan kembali pada halaman utama
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
          <a class="btn btn-primary" href="<?php echo site_url('login/logout');?>">Ya</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url(''); ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(''); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(''); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url(''); ?>/assets/js/sb-admin-2.min.js"></script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?= base_url('assets/'); ?>js/jquery-3.4.1.slim.min.js" ></script>
  <script src="<?= base_url('assets/'); ?>js/popper.min.js" ></script>
  <script src="<?= base_url('assets/'); ?>js/jquery.datetimepicker.full.min.js" ></script>
  <script src="<?= base_url('assets/'); ?>js/myjs.js" ></script>
  <script src="<?php echo base_url().'assets/js/jquery.js'?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>js/jquery-ui.js" type="text/javascript"></script>

  <script type="text/javascript">
        $(document).ready(function(){
            $( "#id_kota" ).autocomplete({
              source: "<?php echo site_url('rental/c_rental/get_autocomplete/?');?>"
            });
        });
  </script>

  <script type="text/javascript">
    
    <?php if($kd==1):
      foreach ($data as $dta):?>
          ambilId(<?php echo $dta->ID_MOBIL;?>,<?php echo $kd;?>);
      <?php endforeach;
    elseif($kd==2):
      foreach ($data as $dta):?>
          ambilId(<?php echo $dta->ID_MOTOR;?>,<?php echo $kd;?>);
      <?php endforeach;
    else:
    endif;?>
    
    function ambilId(id,kode){
      console.log(kode);
        if(kode==1){
          $.ajax ({
          type:"POST",
          url:'<?php echo base_url()."rental/c_mobil/ambilId/"?>'+id+'',
          dataType: 'json',
          success: function(hasil){
            console.log(hasil);
            if(hasil[0].jumlah == 0){
            $('#aaa'+id+'').hide();
            $("#jumlah"+id+"").html(hasil[0].jumlah);
            }else{
              $('#aaa'+id+'').show();
              for(i=0; i<hasil.length; i++){
                  $("#nama"+id+"").html(hasil[i].NAMA);
                  $("#kode_pemesanan"+id+"").html(hasil[i].KODE_PEMESANAN);
                  $("#tanggal_pengambilan"+id+"").html(hasil[i].TANGGAL_PENGAMBILAN);
                  $("#tanggal_pengembalian"+id+"").html(hasil[i].TANGGAL_PENGEMBALIAN);
                  $("#lokasi_pengantaran"+id+"").html(hasil[i].LOKASI_PENGANTARAN);
                  $("#lokasi_penjemputan"+id+"").html(hasil[i].LOKASI_PENJEMPUTAN);
                  $("#kapasitas"+id+"").html(hasil[i].KAPASITAS);
                  $("#pintu"+id+"").html(hasil[i].PINTU);
                  $("#transisi"+id+"").html(hasil[i].TRANSISI);
                  $("#pendingin_udara"+id+"").html(hasil[i].PENDINGIN_UDARA);
                  $("#harga_sewa_kendaraan"+id+"").html(hasil[i].HARGA_SEWA_KENDARAAN);
                  $("#jumlah"+id+"").html(hasil[i].jumlah);
                }
              }
          }
          });
        }else{
          $.ajax ({
          type:"POST",
          url:'<?php echo base_url()."rental/c_motor/ambilId/"?>'+id+'',
          dataType: 'json',
          success: function(hasil){
            if(hasil[0].jumlah == 0){
            $('#aaa'+id+'').hide();
            $("#jumlah"+id+"").html(hasil[0].jumlah);
            }else{
              $('#aaa'+id+'').show();
              for(i=0; i<hasil.length; i++){
                  $("#nama"+id+"").html(hasil[i].NAMA);
                  $("#kode_pemesanan"+id+"").html(hasil[i].KODE_PEMESANAN);
                  $("#tanggal_pengambilan"+id+"").html(hasil[i].TANGGAL_PENGAMBILAN);
                  $("#tanggal_pengembalian"+id+"").html(hasil[i].TANGGAL_PENGEMBALIAN);
                  $("#lokasi_pengantaran"+id+"").html(hasil[i].LOKASI_PENGANTARAN);
                  $("#lokasi_penjemputan"+id+"").html(hasil[i].LOKASI_PENJEMPUTAN);
                  $("#kapasitas"+id+"").html(hasil[i].KAPASITAS);
                  $("#pintu"+id+"").html(hasil[i].PINTU);
                  $("#transisi"+id+"").html(hasil[i].TRANSISI);
                  $("#pendingin_udara"+id+"").html(hasil[i].PENDINGIN_UDARA);
                  $("#harga_sewa_kendaraan"+id+"").html(hasil[i].HARGA_SEWA_KENDARAAN);
                  $("#jumlah"+id+"").html(hasil[i].jumlah);
                }
              }
          }
          });
        }
        
    }
  </script>
</body>

</html>
