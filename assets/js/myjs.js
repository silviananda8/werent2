$('#tanggalPenjemputan').datetimepicker({
    datepicker: true,
    timepicker: false,
    format: 'D d-M-Y',
    minDate: 0,
    beforeShow: function() {
        $(this).datepicker('option', 'maxDate', $('#tanggalPengembalian').val());
        }
});

$('#tanggalPengembalian').datetimepicker({
    datepicker: true,
    timepicker: false,
    format: 'D d-M-Y',
    minDate: 0,
    beforeShow: function() {
        $(this).datepicker('option', 'minDate', $('#tanggalPenjemputan').val());
                                   
     }
});

$('#waktuPenjemputan').datetimepicker({
    timepicker: true,
    datepicker: false,
    format: 'H:i',
    hours12: false,
    step: 30,
})

$('#waktuPengembalian').datetimepicker({
    timepicker: true,
    datepicker: false,
    format: 'H:i',
    hours12: false,
    step: 30,
})


$('#jam_buka').datetimepicker({
    timepicker: true,
    datepicker: false,
    format: 'H:i',
    hours12: false,
    step: 30,
})

$('#jam_tutup').datetimepicker({
    timepicker: true,
    datepicker: false,
    format: 'H:i',
    hours12: false,
    step: 30,
})