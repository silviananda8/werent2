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
      // console.log(kode);
        if(kode==1){//jika berasal dari mobil
          $.ajax ({
          type:"POST",
          url:'<?php echo base_url()."rental/c_mobil/ambilId/"?>'+id+'',
          dataType: 'json',
          success: function(hasil){
            // console.log(hasil.length);
            $("#jumlah"+id+"").html(hasil[0][0].jumlah);

            if(hasil[0][0].jumlah == 0){
            $('#aaa'+id+'').hide();
            }else{
              $('#aaa'+id+'').show();
              for(bar=0; bar<hasil.length; bar++){
                  for(kol=0; kol<hasil[bar].length; kol++){
                    console.log(kol+""+id);
                    $("#nama"+kol+""+id+"").html(hasil[bar][kol].NAMA);
                    $("#kode_pemesanan"+kol+""+id+"").html(hasil[bar][kol].KODE_PEMESANAN);
                    $("#tanggal_pengambilan"+kol+""+id+"").html(hasil[bar][kol].TANGGAL_PENGAMBILAN);
                    $("#tanggal_pengembalian"+kol+""+id+"").html(hasil[bar][kol].TANGGAL_PENGEMBALIAN);
                    $("#lokasi_pengantaran"+kol+""+id+"").html(hasil[bar][kol].LOKASI_PENGANTARAN);
                    $("#lokasi_penjemputan"+kol+""+id+"").html(hasil[bar][kol].LOKASI_PENJEMPUTAN);
                    $("#kapasitas"+kol+""+id+"").html(hasil[bar][kol].KAPASITAS);
                    $("#pintu"+kol+""+id+"").html(hasil[bar][kol].PINTU);
                    $("#transisi"+kol+""+id+"").html(hasil[bar][kol].TRANSISI);
                    $("#pendingin_udara"+kol+""+id+"").html(hasil[bar][kol].PENDINGIN_UDARA);
                    $("#harga_sewa_kendaraan"+kol+""+id+"").html(hasil[bar][kol].HARGA_SEWA_KENDARAAN);
                    $("#totalharga"+kol+""+id+"").html(hasil[bar][kol].TOTAL);
                  }
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
            // console.log(hasil.length);
            $("#jumlah"+id+"").html(hasil[0][0].jumlah);

            if(hasil[0][0].jumlah == 0){
            $('#aaa'+id+'').hide();
            }else{
              $('#aaa'+id+'').show();
              for(bar=0; bar<hasil.length; bar++){
                  for(kol=0; kol<hasil[bar].length; kol++){
                    console.log(kol+""+id);
                    $("#nama"+kol+""+id+"").html(hasil[bar][kol].NAMA);
                    $("#kode_pemesanan"+kol+""+id+"").html(hasil[bar][kol].KODE_PEMESANAN);
                    $("#tanggal_pengambilan"+kol+""+id+"").html(hasil[bar][kol].TANGGAL_PENGAMBILAN);
                    $("#tanggal_pengembalian"+kol+""+id+"").html(hasil[bar][kol].TANGGAL_PENGEMBALIAN);
                    $("#lokasi_pengantaran"+kol+""+id+"").html(hasil[bar][kol].LOKASI_PENGANTARAN);
                    $("#lokasi_penjemputan"+kol+""+id+"").html(hasil[bar][kol].LOKASI_PENJEMPUTAN);
                    $("#kapasitas"+kol+""+id+"").html(hasil[bar][kol].KAPASITAS);
                    $("#transisi"+kol+""+id+"").html(hasil[bar][kol].TRANSISI);
                    $("#harga_sewa_kendaraan"+kol+""+id+"").html(hasil[bar][kol].HARGA_SEWA_KENDARAAN);
                    $("#totalharga"+kol+""+id+"").html(hasil[bar][kol].TOTAL);
                  }
                }
              }
          }
          });
        }
        
    }
</script>