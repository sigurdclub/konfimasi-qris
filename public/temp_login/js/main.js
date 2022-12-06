
const select_form           = document.querySelector('.select-form');       

select_form.addEventListener('change' , () => {

    const form_public       = document.querySelector('.form-public');
    const option_public     =  select_form.options[select_form.selectedIndex].text;
// const option_admin      = document.querySelector('option-admin');
    const form_admin        = document.querySelector('.form-admin');
    console.log(option_public);
    if(option_public == "Admin") {
        form_admin.removeAttribute("style");
        form_public.setAttribute("style","display:none");
    }else{
        form_public.removeAttribute("style");
        form_admin.setAttribute("style","display:none");
    }
    

})






(function ($) {
    "use strict";

    
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
            hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);

