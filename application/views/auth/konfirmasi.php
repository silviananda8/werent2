<?php foreach($data as $dta):?>
<div class="container">
    <section id="halaman-konfirmasi">
        <h3 id="title-konfirmasi-pemesanan">Pembayaran</h3>    

        <div class="row" id="row-konfirmasi-utama">

            <div class="col-8" id="col-right">
                <div class="col rounded box-shadow" id="col-kode-konfirmasi">
                    <div class="row">
                        <div class="col-8">
                            <p >Bank...</p>
                            <p ><small>No.Rekening</small></p>
                            <p style="color: #e8ab02;font-weight: bold;">098-756332</p>
                            <p >Total : Rp. <?php echo number_format($dta->TOTAL);?></p>
                        </div>
                        
                        <div class="col-3" id="button-tampilkan-pesanan">
                           
                        </div>
                    </div>
                    
                </div>

                <div class="col rounded box-shadow" id="col-lokasi-penjemputan">

                        <h5 class="mb-3"><strong>Penjemputan:</strong></h5>
                        <p class="waktuPenjemputan"><?php echo $dta->TANGGAL_PENGAMBILAN;?></p>
                        <p class="tempatPenjemputan"><?php echo $dta->LOKASI_PENJEMPUTAN;?></p>
                    
                        <hr>

                        <h5><strong>Pengembalian:</strong></h5>
                        <p class="waktuPenjemputan"><?php echo $dta->TANGGAL_PENGEMBALIAN;?></p>
                        <p class="tempatPenjemputan"><?php echo $dta->LOKASI_PENGANTARAN;?></p>

                        <button type="button" class="btn btn-warning tombol mb-3" data-toggle="modal" data-target="#modalLokasiPengembalian">
                            <strong>Lihat pesanan saya</strong>
                        </button>
                </div>
            </div>
        </div>
    </section>
</div>
<?php endforeach;?>