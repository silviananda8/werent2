$('#tanggalPenjemputan').datetimepicker({
    datepicker: true,
    timepicker: false,
    format: 'd-m-Y',
    minDate: 0,
    beforeShow: function() {
        $(this).datepicker('option', 'maxDate', $('#tanggalPengembalian').val());
        }
});

$('#tanggalPengembalian').datetimepicker({
    datepicker: true,
    timepicker: false,
    format: 'd-m-Y',
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
