<!-- <div class="section">
    <div class="container mb-5">

        <div class="container panduan-detail-kendaraan mt-3">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('auth/listmotor');?>">Kembali ke Pencarian</a>
                </li>
                <?php foreach($data as $dta):?>
                <li class="nav-item panduan-a">
                    <a class="nav-link" href="<?php echo site_url('auth/detailmotor/'.$dta->ID_MOTOR);?>">Detail Kendaraan</a>
                </li>
                <li class="nav-item panduan-b">
                    <a class="nav-link" href="<?php echo site_url('auth/persyaratanPenyewa_motor/'.$dta->ID_MOTOR);?>">Persyaratan Penyewa</a>
                </li>
                <li class="nav-item panduan-c">
                    <a class="nav-link" href="<?php echo site_url('auth/pembayaran/'.$dta->ID_MOTOR);?>">Pembayaran</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div> -->