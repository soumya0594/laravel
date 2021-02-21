$(document).ready(function(){
    $('.date').datepicker({
        format: 'yyyy-mm-dd'
    });
    var html='';
    html = '<div class="form-group"><label for="email">OBC Category:<span class="star">*</span></label><select id="disabledSelect" class="form-control"><option>Disabled select</option></select></div>'
    $("input[name='casterad']").change(function () {
        $(this).val() === 'OBC' ? $('#appendobcsub').append(html).show() : $('#appendobcsub').empty().hide();
    });
    $("input[name='casterad']:checked").val()==='OBC' ? $('#appendobcsub').append(html).show() : $('#appendobcsub').empty().hide();
})

