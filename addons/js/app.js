//Isotope sweetness
jQuery(window).load(function(){
    var jQuerycontainer = jQuery('#posts');
    jQuerycontainer.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });

    jQuery('.clientsfilter a').click(function(){
        jQuery('.clientsfilter .current').removeClass('current');
        jQuery(this).addClass('current');
 
        var selector = jQuery(this).attr('data-filter');
        jQuerycontainer.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
});

jQuery(function() {
    jQuery('.navbar li:has(ul)').doubleTapToGo();
});

 /* JavaScript Media Queries */
if (matchMedia) {
    var mq = window.matchMedia("(min-width: 768px)");
}

//mouseover for menu     
jQuery(function() {
    jQuery('ul.nav li.dropdown').hover(function() {
        if(mq.matches){
            jQuery('.dropdown-menu', this).fadeIn();
        }    
    }, function() {
        if(mq.matches) {
            jQuery('.dropdown-menu', this).fadeOut('fast');
        }
    }); //hover
}); //jQuery

