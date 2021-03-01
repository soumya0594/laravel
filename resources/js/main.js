$(document).ready(function(){
    var base_url = window.location.origin + '/laravel/';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.date').datepicker({
        format: 'yyyy-mm-dd'
    });
    var html='';
    html = '<div class="form-group"><label for="subObc">OBC Category:<span class="star">*</span></label><select id="subObc" name="subObc" class="form-control"><option>Select</option><option value="OBC">OBC</option><option value="OBC-A">OBC-A</option><option value="OBC-B">OBC-B</option></select></div>'
    $("input[name='casterad']").change(function () {
        $(this).val() === 'OBC' ? $('#appendobcsub').append(html).show() : $('#appendobcsub').empty().hide();
    });
    $("input[name='casterad']:checked").val()==='OBC' ? $('#appendobcsub').append(html).show() : $('#appendobcsub').empty().hide();
    var stationHtml = ''; municipalityHtml = '';
    stationHtml = '<label><input type="radio" class="optradio" name="optradio" value="policeStation" checked> Police Station : <span class="star">*</span></label>';
    municipalityHtml ='<label><input class="optradio mr-2" type="radio" name="optradio" value="municipality" checked> Municipality</label> <label><input class="optradio" type="radio" value="block" name="optradio"> Block : <span class="star">*</span></label>';
    $('#district').change(function(){
        $(this).val() == '12' ? $('#municipality').empty().append(stationHtml).show() : $('#municipality').empty().append(municipalityHtml);
    });
    $('#municipality').empty().append(municipalityHtml);
    $('body').on('change', '#district', function () {
        var id = $(this).val();
        $('#subDivision').empty();
        $('#subDivision').append('<option value="" disabled selected>Processing....</option>');
        $('#disabledSelect').empty();
        $.ajax({
            type: 'POST',
            url: base_url+"getSubDivision",
            data: { id: id },
            dataType: "json",
            success: function (data) {
                //console.log(data);
                var subDivision ='';
                $('#subDivision').empty();
                $('#subDivision').append('<option value="" disabled selected>- SELECT FROM THE LIST-</option>');
                $.each(data, function (k, v) {
                    subDivision += '<option value= ' + v.id + '>' + v.name + '</option>';
                });
                $('#subDivision').append(subDivision);
            }
        })
    });
    $('body').on('change', '#subDivision', function () {
        var id = $('#district').val();
        var selectOption = $("input[name='optradio']:checked").val();
        $('#disabledSelect').empty();
        $('#disabledSelect').append('<option value="" disabled selected>Processing....</option>');
        $.ajax({
            type: 'POST',
            url: base_url + "pre_SubDivision",
            data: { id: id, selectOption: selectOption },
            dataType: "json",
            success: function (data) {
                //console.log(data);
                var disabledSelect = '';
                $('#disabledSelect').empty();
                $('#disabledSelect').append('<option value="" disabled selected>- SELECT FROM THE LIST-</option>');
                $.each(data, function (k, v) {
                    disabledSelect += '<option value= ' + v.id + '>' + v.name + '</option>';
                });
                $('#disabledSelect').append(disabledSelect);
            }
        })
    });
    $('body').on('click', '.optradio', function () {
        var selectOption = $(this).val();
        var subDivisionId = $('#subDivision').val();
        if (subDivisionId != null && subDivisionId != '') {
            $('#disabledSelect').empty();
            $('#disabledSelect').append('<option value="" disabled selected>Processing....</option>');
                $.ajax({
                    type: 'POST',
                    url: base_url + "pre_SubDivision",
                    data: { id: subDivisionId, selectOption: selectOption },
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
                        var disabledSelect = '';
                        $('#disabledSelect').empty();
                        $('#disabledSelect').append('<option value="" disabled selected>- SELECT FROM THE LIST-</option>');
                        $.each(data, function (k, v) {
                            disabledSelect += '<option value= ' + v.id + '>' + v.name + '</option>';
                        });
                        $('#disabledSelect').append(disabledSelect);
                    }
                })
        }

    });
    $('body').on('change','#caste',function(){
        //var formdata= new FormData();
        var caste = $("input[name='casterad']:checked").val();
        var subObc = $(document).find('#subObc') ? $('#subObc').val() : '';
        $.ajax({
            type: 'POST',
            url: base_url + "get_caste",
            data: { caste: caste, subObc:subObc },
            dataType: "json",
            success: function (data) {
                //console.log(data);
                var subCaste = '';
                $('#subCaste').empty();
                $('#subCaste').append('<option value="" disabled selected>- SELECT FROM THE LIST-</option>');
                $.each(data, function (k, v) {
                    subCaste += '<option value= ' + v.id + '>' + v.c_name + '</option>';
                });
                $('#subCaste').append(subCaste);
            }
        })
    });
    $('body').on('change', '#subObc', function () {
        var subObc = $(this).val();
        var caste = $("input[name='casterad']:checked").val();
        $('#subCaste').empty();
        $('#subCaste').append('<option value="" disabled selected>Processing....</option>');
        $.ajax({
            type: 'POST',
            url: base_url + "get_caste",
            data: { caste: caste, subObc: subObc },
            dataType: "json",
            success: function (data) {
                //console.log(data);
                var subCaste = '';
                $('#subCaste').empty();
                $('#subCaste').append('<option value="" disabled selected>- SELECT FROM THE LIST-</option>');
                $.each(data, function (k, v) {
                    subCaste += '<option value= ' + v.id + '>' + v.c_name + '</option>';
                });
                $('#subCaste').append(subCaste);
            }
        })
    });
    $('body').on('change', '#birthDistrict', function () {
        var id = $(this).val();
        var selectOption = 'policeStation';
        $('#birthPoliceStation').empty();
        $('#birthPoliceStation').append('<option value="" disabled selected>Processing....</option>');
        //$('#disabledSelect').empty();
        $.ajax({
            type: 'POST',
            url: base_url + "pre_SubDivision",
            data: { selectOption: selectOption, id: id },
            dataType: "json",
            success: function (data) {
                //console.log(data);
                var birthPoliceStation = '';
                $('#birthPoliceStation').empty();
                $('#birthPoliceStation').append('<option value="" disabled selected>- SELECT FROM THE LIST-</option>');
                $.each(data, function (k, v) {
                    birthPoliceStation += '<option value= ' + v.id + '>' + v.name + '</option>';
                });
                $('#birthPoliceStation').append(birthPoliceStation);
            }
        })
    });
})

