
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
  <script src="<?= base_url('assets/'); ?>js/jquery-3.4.1.slim.min.js"></script>
  <script src="<?= base_url('assets/'); ?>js/popper.min.js"></script>
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
</body>

</html>
