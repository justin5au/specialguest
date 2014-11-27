/*
    @Developer: Joseph Luzquinos
*/
$(function(){

    // Animation to section
    var goToSection = function(hash){
        var pos = $('#'+hash).offset();
        $('body').animate({ scrollTop: pos.top - 78}, 1000);
        setTimeout(function(){
            if(history.pushState) {
                history.pushState(null, null, '#'+hash);
            }else{
                location.hash = '#'+hash;
            }
        },1500);
        return false;
    };

    //Link animation
    $('.navbar a').click(function(e){
        var url = $(this).attr('href');
        var type = url.split('#');
        if(type.length > 1){
            hash = type[1];
        }
        goToSection(hash);
        e.preventDefault();
    });

    // Set Block's height onLoad
    if($(window).width() > 767){
        //Desktop
        $('.tpl-section-main').height(Math.round($('.tpl-section-main').width() * 0.55));
        $('.tpl-section-default').height(Math.round($('.tpl-section-default').width() * 0.2777777));
        $('.tpl-section-img-about-container').height( $('.tpl-section-img-about').height() );
    }else{
        //Mobile
        $('.tpl-section-main').height(Math.round($('.tpl-section-main').width() * 0.95875));
        $('.tpl-section-default').height(Math.round($('.tpl-section-default').width() * 0.95875));
        $('.tpl-section-img-about-container').height( $('.tpl-section-img-about').height() );
    }

    // Change Block's height onChange
    $(window).resize(function(event){
        if($(this).width() > 767){

            //Desktop
            $('.tpl-section-main').height(Math.round($('.tpl-section-main').width() * 0.55));
            $('.tpl-section-default').height(Math.round($('.tpl-section-default').width() * 0.2777777));
        
        }else{

            //Mobile
            $('.tpl-section-main').height(Math.round($('.tpl-section-main').width() * 0.95875));
            $('.tpl-section-default').height(Math.round($('.tpl-section-default').width() * 0.95875));
            //$('.tpl-section-inner').width(Math.round($('.tpl-section-default').width() - 30));
        }

        $('.tpl-section-img-about-container').height( $('.tpl-section-img-about').height() );
    });

    //On Load
    var linkName = window.location.hash.substr(1);
    if(linkName){
        goToSection(linkName);
    }
});