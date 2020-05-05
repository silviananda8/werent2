
    
    <!-- == start persyaratan penyewa == -->
    <div class="col-7 mt-5 ml-5 ">
        <div class="card bg-white rounded p-2 box-shadow">
            <label for="namaKendaraan">
                <h4 class="col font-weight-bold">Persyaratan Penyewa</h4>
            </label>
            <?php foreach($data as $dta):?>
            <p class="ml-3"><?php echo $dta->PERSYARATAN_PENYEWA;?></p>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- == end persyaratan penyewa == -->

        </div>

        
    </div>
</div>
