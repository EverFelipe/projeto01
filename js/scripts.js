$(function(){
    $('nav.mobile').click(function(){
        var listMenu = $('nav.mobile ul');
        /* Abrir menu atraves do fadein e fadeout*/
        if(listMenu.is(':hidden')==true){
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            listMenu.slideToggle();
        }else{
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listMenu.slideToggle();
        }
    });

    if($('target').length > 0 ){
        var elemento = '#'+$('target').attr('target'); // pega a target do html
        var divScroll = $(elemento).offset().top;
        $('html','body').animate({scrollTop:divScroll},2000);
    }
});