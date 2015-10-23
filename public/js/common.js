/**
 * Created by DUYLIEMPRO on 10/23/2015.
 */
$(document).ready(function(){
    $('.btn-confirm-delete').click(function(){
        if(confirm('Are you sure ?')){
            return true;
        }
        return false;
    });

    /*$('.search-field').keypress(function(){

    });*/

    /*$('#search_form').on('keyup keypress', function(e) {
        var code = e.keyCode || e.which;
        if (code == 13) {
            e.preventDefault();

        }
    });*/

    $('input.search-field').bind('keypress', function(e) {
        if(e.keyCode==13){
            if($(this).val() != ''){
                $.ajax({
                    type: 'POST',
                    url: $(this).data('url'),
                    data: $('#search-form').serialize(),
                    success: function(data){
                        if($.trim(data) != ''){
                            $('.data-view').append(data);
                        }
                    },
                    error: function(xhr){
                        console.log(xhr.message);
                    }
                });
            }
        }
    });
});