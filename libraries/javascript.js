$(document) .ready(function(){
    $('#telefone').mask("(00) 0000-0000")
    $('#idade').mask("000")
    $('#cpf').mask("000.000.000-00")
    $('#salario').mask("999.999.990,00", {reverse:true})
    $('#datanascimento').mask("00/00/0000")

    $('#cpf').mask("000.000.000-00")
    $("#rg").mask("999.999.999-W", {
        translation: {
            'W': {
                pattern: /[X0-9]/
            }
        }, 
        reverve: true

    })
     
    $('#telefonewp').mask("(00) 0000-00009")
    $('#telefonewp').blur(function(event){
        if ($(this).val().length == 15){
            $('#telefonewp').mask("(00) 00000-0009")
        } else{
            $('#telefonewp').mask("(00) 0000-00009") 
        }
    })
    

    $('.ind-btn') .on('click', function(){
        $('nav li') .toggle()
    });


    $('nav li').on('click',function(){
        var linke = $(this).children('a').attr('href');
        window.location.href=linke;              
    });


    $('.ind-slide').cycle({
        fx: 'fade'
    
    });

});