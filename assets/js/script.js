$(document).ready(function(){
    /*sign up modal*/
    $('#signup-btn').click(function(){
        $('#signup').fadeIn();
        $('#signin').css('display','none')
    });

    /*sign in modal*/ 
    $('#signin-btn').click(function(){
        $('#signin').fadeIn();
        $('#signup').css('display','none')
    });

})
