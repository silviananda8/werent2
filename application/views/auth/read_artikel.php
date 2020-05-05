<?php foreach($data as $dta):?>
<div class="container-fluid bg-dark mt-0">
	<div class="container box-shadow rounded p-2">
		<div class="col-lg-12">
            <div class="section-title text-center">
            </div>
            <div>
            	<h1><?php echo $dta->judul ?></h1>
            	<img src="<?= base_url('assets/uploads/thumbnail/') ?><?php echo $dta->thumbnail?>">
            	<p class="text-justify font-weight-bold"><?php echo $dta->artikel ?></p>
            </div>
        </div>
	</div>
</div>
<?php endforeach; ?>