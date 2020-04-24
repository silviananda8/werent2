<div class="container">
    <section id="halaman-konfirmasi">
        <h3 id="title-konfirmasi-pemesanan">voucher konfirmasi pemesanan</h3>    

        <div class="row" id="row-konfirmasi-utama">
            <div class="col-3 rounded box-shadow" id="penyewa">
                <h5>
                    <p id="nama-penyewa">Nama Penyewa</p>
                    <p id="nama-kendaraan">Nama Kendaraan :</p>
                    <p id="detail-kendaraan">Detail Kendaraan :</p>

                    <!-- Button Detail Kendaraan -->
                    <button type="button" class="btn btn-warning tombol" data-toggle="modal" data-target="#detailKendaraan">
                        <strong>Check Detail Kendaraan</strong>
                    </button>

                    <!-- Button Tarif Layanan -->
                    <p id="tarif-layanan">Tarif Layanan :</p>
                    <button type="button" class="btn btn-warning tombol" data-toggle="modal" data-target="#tarifLayanan">
                        <strong>Check Tarif Layanan</strong>
                    </button>
                </h5>
            </div>

            <div class="col-8 col-right">
                <div class="col rounded box-shadow" id="col-kode-konfirmasi">
                    <p id="kode-konfirmasi">Kode Konfirmasi: ...</p>
                    <p id="kode-permintaan">Kode Permintaan: ...</p>
                    <p id="perjanjian-kode-harga">Perjanjian Kode Harga: ...</p>
                    <p id="nama">Nama lengkap: ...</p>
                </div>

                <div class="col rounded box-shadow" id="col-lokasi-penjemputan">
                    <h5 id="lokasi-penjemputan"><strong> Lokasi Penjemputan: ...</strong></h5>

                        <h5 class="mb-3"><strong>Penjemputan:</strong></h5>
                        <p class="waktuPenjemputan">10:00 AM, Mon 26-Apr-2020</p>
                        <p class="tempatPenjemputan">Bandara Juanda, Surabaya</p>

                        <button type="button" class="btn btn-warning tombol" data-toggle="modal" data-target="#modalLokasiPenjemputan">
                            <strong>Check Lokasi Penjemputan</strong>
                        </button>
                    
                        <hr>

                        <h5><strong>Pengembalian:</strong></h5>
                        <p class="waktuPenjemputan">12:00 AM, Wed 28-Apr-2020</p>
                        <p class="tempatPenjemputan">Bandara Juanda, Surabaya</p>

                        <button type="button" class="btn btn-warning tombol mb-3" data-toggle="modal" data-target="#modalLokasiPengembalian">
                            <strong>Check Lokasi Pengembalian</strong>
                        </button>

                    
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Start Modal Check Detail Kendaraan -->
    <div class="modal fade" id="detailKendaraan" tabindex="-1" role="dialog" aria-labelledby="detail-kendaraanLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Detail Kendaraan</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col">
                    <i class="fas fa-couch"></i>
                    Penumpang 4 orang
                </div>  
                <div class="col">
                    <i class="fas fa-door-closed"></i>
                    4 Pintu
                </div>
                <div class="col">
                    <i class="fas fa-snowflake"></i>
                    Air Conditioner baik
                </div>  
                <div class="col">
                    <i class="fas fa-cog"></i>
                    Transisi Otomatis
                </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal"><strong>Close</strong></button>
            </div>
            </div>
        </div>
    </div>
<!-- End Modal Check Detail Kendaraan -->

<!-- Start Modal Check Tarif Layanan -->
    <div class="modal fade" id="tarifLayanan" tabindex="-1" role="dialog" aria-labelledby="tarifLayananLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Tarif Layanan</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p  id="jarak-tempuh">Jarak Tempuh: Rp. ...</p>
                <p class="mt-n3" id="nilai-per-mil-tambahan">Nilai Per Mil Tambahan: Rp. ...</p>
                <p class="mt-n3" id="jumlah-hari">Jumlah Hari: Rp. ...</p>
                <p class="mt-n3" id="jam-tambah">Jam Tambah: Rp. ...</p>
                <p class="mt-n3" id="tarif-kendaraan">Tarif Kendaraan: Rp. ...</p>
                <p class="mt-n3" id="biaya-kendaraan-tambahan">Biaya Kendaraan Tambahan: Rp. ...</p>
                <p class="mt-n3" id="biaya-perusahaan-sewa">Biaya Perusahaan Sewa: Rp. ...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal"><strong>Close</strong></button>
            </div>
            </div>
        </div>
    </div>
<!-- End Modal Check Tarif Layanan -->

<!-- Start Modal Check Detail Lokasi Penjemputan -->
    <div class="modal fade" id="modalLokasiPenjemputan" tabindex="-1" role="dialog" aria-labelledby="lokasiPenjemputanLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Lokasi Penjemputan</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae ad nulla temporibus eaque dolor excepturi voluptatibus quos quidem repudiandae odio doloribus sit perferendis placeat labore nam veritatis, deleniti sint, impedit inventore quia alias. Ad consequatur esse iure, quisquam qui dolorem! Incidunt consequuntur deserunt praesentium expedita deleniti, quidem adipisci nobis? Vitae voluptatem autem officia accusamus esse similique nam voluptates corrupti laudantium fugit? Laudantium officia et nemo nam, eveniet aspernatur earum in deserunt molestiae eum animi dignissimos provident, architecto fugiat! Voluptates sunt, similique optio eum excepturi saepe corporis inventore sit hic ab laudantium quo fuga consequatur! Quibusdam a eos velit deleniti provident!
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal"><strong>Close</strong></button>
            </div>
            </div>
        </div>
    </div>
<!-- End Modal Check Detail Lokasi Penjemputan -->

<!-- Start Modal Check Deail Lokasi Pengembalian -->
    <div class="modal fade" id="modalLokasiPengembalian" tabindex="-1" role="dialog" aria-labelledby="lokasiPengembalianLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Lokasi Pengembalian</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae ad nulla temporibus eaque dolor excepturi voluptatibus quos quidem repudiandae odio doloribus sit perferendis placeat labore nam veritatis, deleniti sint, impedit inventore quia alias. Ad consequatur esse iure, quisquam qui dolorem! Incidunt consequuntur deserunt praesentium expedita deleniti, quidem adipisci nobis? Vitae voluptatem autem officia accusamus esse similique nam voluptates corrupti laudantium fugit? Laudantium officia et nemo nam, eveniet aspernatur earum in deserunt molestiae eum animi dignissimos provident, architecto fugiat! Voluptates sunt, similique optio eum excepturi saepe corporis inventore sit hic ab laudantium quo fuga consequatur! Quibusdam a eos velit deleniti provident!
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal"><strong>Close</strong></button>
            </div>
            </div>
        </div>
    </div>
<!-- End Modal Check Deail Lokasi Pengembalian -->