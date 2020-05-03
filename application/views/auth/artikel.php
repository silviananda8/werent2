<!-- isi konten -->
<div class="container-fluid bg-dark mt-0">
	<!-- Trending  -->
	<div class="container card-group">
		<div class="col-lg-12">
            <div class="section-title  text-white text-center">
                <h2>Trending</h2>
            </div>
        </div>
        <!--card-->
        <?php foreach($coba as $dta):?>
        <div class="card ml-1 rounded p-1" style="width: 18rem;">
		  <img class="card-img-top" src="<?= base_url('assets/uploads/thumbnail/') ?><?php echo $dta->thumbnail?>" alt="Card image cap">
		  <div class="card-body">
		  	<a href="<?php echo site_url('auth/read_artikel/'.$dta->id);?>">
		  		<h6 class="card-text" href=""><?php echo $dta->judul?></h6>
		  	</a> 
		  </div>
		</div>
		<?php endforeach; ?>
	</div>
	<!-- Tips dan Artikel -->		
	<div class="container mt-3">
		 <div class="col-lg-12">
            <div class="section-title  text-white text-center">
                <h2>Tips dan Artikel</h2>
            </div>
        </div>
		<!--card 1-->
		<?php foreach($data as $dta):?>
		<div class="card mb-3 ">
			<div class="row no-gutters">
				<div class="col-md-4">
	      			<img src="<?= base_url('assets/uploads/thumbnail/') ?><?php echo $dta->thumbnail?>" class="card-img " alt="..." style="width: 286px; height: 200px;">
	    		</div>
	    		<div class="col-md-8">
	    			<div class="card-body">
					    <h5 class="card-title"><?php echo $dta->judul?></h5>
					    <p class="card-text"><?php echo substr($dta->artikel,0,251)?></p>
					    <a href="<?php echo site_url('auth/read_artikel/'.$dta->id);?>" class="btn btn-primary">See more</a> 
					</div>
	    		</div>
			</div>		  
		</div>
		<?php endforeach; ?>
		<!--end card-->
	</div>	
</div>