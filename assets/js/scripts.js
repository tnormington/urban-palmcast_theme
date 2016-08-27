jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    var $menu_toggle = jQuery('#js-menu-toggle');
    var $menu_overlay = jQuery('#js-menu-overlay');
    var $menu = jQuery('.menu-area .menu-main-menu-container');



    $menu_toggle.click(function() {
      var $that = jQuery(this);
      if(!$that.hasClass('open')) {
        // if the button doesn't have the 'open' class
        // open the menu
        $menu_overlay.animate({
          width: '100vw',
          height: '100vh',
          opacity: '1'
        });
        // $menu.fadeIn('fast');
        // $menu.css('opacity','100%', 'display', 'block');
        $menu.animate({
          opacity: '100',
        }, function() {
          $menu.css({
            pointerEvents: 'initial',
            display: 'block',
          });
        });
      } else {
        // the button has the 'open' class
        // close the menu
        $menu_overlay.animate({
          width: '0px',
          height: '0px',
          opacity: '0'
        });
        $menu.animate({
          opacity: '0',
        }, function() {
          $menu.css({
            pointerEvents: 'none',
            display: 'none',
          });
        });
      }
      jQuery(this).toggleClass('open');
    });

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });

});
