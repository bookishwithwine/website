jQuery(document).ready(function($) {    

     /**
     * Popurlar/Comments/tags Tabs
    */
    if ( jQuery.isFunction(jQuery.fn.tabs) ) {
        jQuery( ".ocelot-tabs-wdt" ).tabs();
    }

    /**
     * Full Banner Slider
    */
    $('.ol-fullslider').lightSlider({
        item:1,
        loop:true,
        trl:true,
        pause:3000,
        enableDrag:false,
        speed:500,
        pager:false,
        prevHtml:'<i class="fa fa-angle-left"></i>',
        nextHtml:'<i class="fa fa-angle-right"></i>',
        onSliderLoad: function() {
            $('.ol-fullslider').removeClass('cS-hidden');
        },
    });
    
});