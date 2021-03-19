
$(document).ready(function() {
    $('.block_toggle--menu').click(function(){
        $('.block_navbar--menu-content').toggleClass('toggle--menu-click');
        $('.lg-none').toggleClass('mb-block');
    });
    
    $('.block_toggle--title-content').click(function(){
        $('.block_title-content').toggleClass('toggle--block-title-click')
    });
});