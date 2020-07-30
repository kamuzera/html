$(document) .ready(function(){
    $('.ind-btn') .on('click', function(){
        $('nav li') .toggle()
    });

    $('nav li').on('click',function(){
        var linke = $(this).children('a').attr('href');
        window.location.href=linke;              
    });

    $('.ind-slide').cycle({
        fx: 'fade'
    
    })

});