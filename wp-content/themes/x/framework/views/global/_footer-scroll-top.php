<?php

// =============================================================================
// VIEWS/GLOBAL/_FOOTER-SCROLL-TOP.PHP
// -----------------------------------------------------------------------------
// Output for the scroll top button.
// =============================================================================

?>

<?php if ( x_get_option( 'x_footer_scroll_top_display', 0 ) == 1 ) : ?>

  <a class="x-scroll-top <?php echo x_get_option( 'x_footer_scroll_top_position' ); ?> fade" href="#top" title="<?php esc_attr_e( 'Back to Top', '__x__' ); ?>">
    <i class="x-icon-angle-up"></i>
  </a>

  <script>

  jQuery(document).ready(function($) {

    //
    // Scroll top anchor.
    //
    // 1. Get the number of pixels to the bottom of the page.
    // 2. Get the difference from the body height and the bottom offset.
    // 3. Output the adjusted height for the page for acurate percentage parameter.
    //

    var windowObj            = $(window);
    var body                 = $('body');
    var bodyOffsetBottom     = windowObj.scrollBottom();             // 1
    var bodyHeightAdjustment = body.height() - bodyOffsetBottom;     // 2
    var bodyHeightAdjusted   = body.height() - bodyHeightAdjustment; // 3
    var scrollTopAnchor      = $('.x-scroll-top');

    function sizingUpdate(){
      var bodyOffsetTop = windowObj.scrollTop();
      if ( bodyOffsetTop > ( bodyHeightAdjusted * <?php echo x_get_option( 'x_footer_scroll_top_display_unit' ) / 100; ?> ) ) {
        scrollTopAnchor.addClass('in');
      } else {
        scrollTopAnchor.removeClass('in');
      }
    }

    windowObj.bind('scroll', sizingUpdate).resize(sizingUpdate);
    sizingUpdate();

    scrollTopAnchor.click(function(){
      $('html,body').animate({ scrollTop: 0 }, 850, 'easeInOutExpo');
      return false;
    });

  });

  </script>

<?php endif; ?>