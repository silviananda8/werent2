<div class="section">
    <div class="container mb-5">

    <!-- == start bar panduan == -->
        <div class="container panduan-detail-kendaraan mt-3">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('auth/listKendaraan');?>">Kembali ke Pencarian</a>
                </li>
                <?php foreach($data as $dta):?>
                <li class="nav-item panduan-a">
                    <a class="nav-link" href="<?php echo site_url('auth/detailKendaraan/'.$dta->ID_MOBIL);?>">Detail Kendaraan</a>
                </li>
                <li class="nav-item panduan-b">
                    <a class="nav-link" href="<?php echo site_url('auth/persyaratanPenyewa/'.$dta->ID_MOBIL);?>">Persyaratan Penyewa</a>
                </li>
                <li class="nav-item panduan-c">
                    <a class="nav-link" href="<?php echo site_url('auth/pembayaran/'.$dta->ID_MOBIL);?>">Pembayaran</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <!-- == end bar panduan == -->