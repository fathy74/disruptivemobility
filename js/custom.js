$(function (){

'use strict';

var userError = true,

    emailError = true,

    msgError = true;


$('.username').blur(function(){

if ($(this).val().length < 4) {

$(this).css('border', '1px solid #f00') .parent().find('.custom-alert').fadeIn(200)   
.end().find('.asterisx').fadeIn(100);
userError = true;

} else {

$(this).css('border', '1px solid #080').parent().find('.custom-alert').fadeOut(200)
.end().find('.asterisx').fadeOut(100);
userError = false;

}

});


$('.email').blur(function(){

    if ($(this).val() === '')    {
    
    $(this).css('border', '1px solid #f00');
    $(this).parent().find('.custom-alert').fadeIn(200);
    $(this).parent().find('.asterisx').fadeIn(100);
    
    } else {
    
    $(this).css('border', '1px solid #080');
    $(this).parent().find('.custom-alert').fadeOut(200);
    $(this).parent().find('.asterisx').fadeOut(100);
    
    }
    
    });
    


    $('.message').blur(function(){

        if ($(this).val().length < 10) {
        
        $(this).css('border', '1px solid #f00');
        $(this).parent().find('.custom-alert').fadeIn(200);
        $(this).parent().find('.asterisx').fadeIn(100);
        
        } else {
        
        $(this).css('border', '1px solid #080');
        $(this).parent().find('.custom-alert').fadeOut(200);
        $(this).parent().find('.asterisx').fadeOut(100);
        
        }
        
        });
    });
    