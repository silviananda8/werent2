<?php foreach($data as $dta):?>
<div class="container-fluid bg-dark mt-0 pb-3">
    <div class="container box-shadow rounded p-5 pb-4">
        <div class="col-lg-12">
            <div class="section-title text-center">
            </div>
            <div>
                <div class="col-lg text-center">
                    <h1 class="mb-4"><?php echo $dta->judul ?></h1>
                <img src="<?= base_url('assets/uploads/thumbnail/') ?><?php echo $dta->thumbnail?>" class="img-fluid" >
                </div>
                
                <p class="text-justify font-weight-bold mt-4 "><?php echo $dta->artikel ?></p>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>