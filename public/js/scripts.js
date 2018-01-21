$(document).ready(function() {

	$(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('18000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('18000');
            $('.filter').filter('.'+value).show('18000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
        $(this).addClass("active");
    }
    $(this).addClass("active");

    // popup sign up, sign in
    $('#user-acc').click(function(){
        
        $('.form-module').slideDown();
    });

    $('#exit').click(function(){ 
        $('.form-module').slideUp();
    });
    
    $('.toggle').click(function(){
      // Switches the Icon
      $(this).children('i').toggleClass('fa-pencil');
      // Switches the forms  
      $('.form').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: "toggle"
      }, "slow");
    });

    // back-to-top
    $('#backtotop').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });
    
    $('#form1, #form-register').parsley();
});