<?php

// =============================================================================
// FUNCTIONS/GLOBAL/ADMIN/CUSTOMIZER/SETUP.PHP
// -----------------------------------------------------------------------------
// Initializes and sets up the WordPress Live Preview feature by including
// sections, controls, and settings.
//
// - Sections: organize the controls.
// - Controls: receive input and pass it to the settings.
// - Settings: interface with the existing options in the theme.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Set Path
//   02. Require Files
//   03. Remove Unused Sections and Controls
//   04. Preloader
// =============================================================================

// Set Path
// =============================================================================

$cstm_path = X_TEMPLATE_PATH . '/framework/functions/global/admin/customizer';



// Require Files
// =============================================================================

require_once( $cstm_path . '/controls.php' );
require_once( $cstm_path . '/fonts.php' );
require_once( $cstm_path . '/register.php' );
require_once( $cstm_path . '/output.php' );
require_once( $cstm_path . '/transients.php' );



// Remove Unused Sections and Controls
// =============================================================================

function x_remove_customizer_sections( $wp_customize ) {

  $wp_customize->remove_section( 'nav' );
  $wp_customize->remove_section( 'colors' );
  $wp_customize->remove_section( 'title_tagline' );
  $wp_customize->remove_section( 'background_image' );
  $wp_customize->remove_section( 'static_front_page' );

  $wp_customize->remove_control( 'blogname' );
  $wp_customize->remove_control( 'blogdescription' );
  $wp_customize->remove_control( 'nav_menu_locations[primary]' );
  $wp_customize->remove_control( 'nav_menu_locations[footer]' );

}

add_action( 'customize_register', 'x_remove_customizer_sections' );



// Preloader
// =============================================================================

function x_customizer_preloader() {

  ob_start();

  ?>

  <style type="text/css" id="x-customizer-preloader-css">

    body {
      overflow: hidden !important;
    }

    .x-cpl {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      text-align: center;
      background-color: #fff;
      z-index: 9999999;
    }

    .x-cpl-inner {
      display: block;
      position: absolute;
      top: 50%;
      left: 50%;
      width: 150px;
      height: 150px;
      margin: -75px 0 0 -75px;
      background-repeat: no-repeat;
      background-position: center 155px;
    }


    /*
    // Text.
    */

    .x-cpl-text {
      position: absolute;
      left: 100px;
      right: 100px;
      bottom: 25px;
      margin: 0 -7px 0 0;
      font-size: 12px;
      font-weight: 400;
      letter-spacing: 7px;
      text-align: center;
      text-transform: uppercase;
      color: #222;
    }


    /*
    // Spinner.
    */

    .x-cpl-spinner {
      margin: 35px;
      width: 80px;
      height: 80px;
      position: relative;
    }


    /*
    // Spinner modules.
    */

    .x-cpl-spinner-mod {
      position: absolute;
      width: 100%;
      height: 100%;
    }

    .x-cpl-spinner-mod.mod-2 {
      -webkit-transform: rotateZ(45deg);
              transform: rotateZ(45deg);
    }

    .x-cpl-spinner-mod.mod-3 {
      -webkit-transform: rotateZ(90deg);
              transform: rotateZ(90deg);
    }


    /*
    // Spinner circles.
    */

    .x-cpl-spinner-mod > div {
      position: absolute;
      width: 20px;
      height: 20px;
      background-color: #222;
      border-radius: 100%;
      -webkit-animation: bouncedelay 1.2s infinite ease-in-out;
              animation: bouncedelay 1.2s infinite ease-in-out;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }

    .x-cpl-spinner-circle-1 {
      top: 0;
      left: 0;
    }

    .x-cpl-spinner-circle-2 {
      top: 0;
      right: 0;
    }

    .x-cpl-spinner-circle-3 {
      right: 0;
      bottom: 0;
    }

    .x-cpl-spinner-circle-4 {
      left: 0;
      bottom: 0;
    }

    .x-cpl-spinner-mod.mod-2 .x-cpl-spinner-circle-1 {
      -webkit-animation-delay: -1.1s;
              animation-delay: -1.1s;
    }

    .x-cpl-spinner-mod.mod-3 .x-cpl-spinner-circle-1 {
      -webkit-animation-delay: -1.0s;
              animation-delay: -1.0s;
    }

    .x-cpl-spinner-mod.mod-1 .x-cpl-spinner-circle-2 {
      -webkit-animation-delay: -0.9s;
              animation-delay: -0.9s;
    }

    .x-cpl-spinner-mod.mod-2 .x-cpl-spinner-circle-2 {
      -webkit-animation-delay: -0.8s;
              animation-delay: -0.8s;
    }

    .x-cpl-spinner-mod.mod-3 .x-cpl-spinner-circle-2 {
      -webkit-animation-delay: -0.7s;
              animation-delay: -0.7s;
    }

    .x-cpl-spinner-mod.mod-1 .x-cpl-spinner-circle-3 {
      -webkit-animation-delay: -0.6s;
              animation-delay: -0.6s;
    }

    .x-cpl-spinner-mod.mod-2 .x-cpl-spinner-circle-3 {
      -webkit-animation-delay: -0.5s;
              animation-delay: -0.5s;
    }

    .x-cpl-spinner-mod.mod-3 .x-cpl-spinner-circle-3 {
      -webkit-animation-delay: -0.4s;
              animation-delay: -0.4s;
    }

    .x-cpl-spinner-mod.mod-1 .x-cpl-spinner-circle-4 {
      -webkit-animation-delay: -0.3s;
              animation-delay: -0.3s;
    }

    .x-cpl-spinner-mod.mod-2 .x-cpl-spinner-circle-4 {
      -webkit-animation-delay: -0.2s;
              animation-delay: -0.2s;
    }

    .x-cpl-spinner-mod.mod-3 .x-cpl-spinner-circle-4 {
      -webkit-animation-delay: -0.1s;
              animation-delay: -0.1s;
    }


    /*
    // Spinner animation.
    */

    @-webkit-keyframes bouncedelay {
      0%, 80%, 100% {
        -webkit-transform: scale(0.0);
      } 40% {
        -webkit-transform: scale(1.0);
      }
    }

    @keyframes bouncedelay {
      0%, 80%, 100% {
        -webkit-transform: scale(0.0);
                transform: scale(0.0);
      } 40% {
        -webkit-transform: scale(1.0);
                transform: scale(1.0);
      }
    }

  </style>

  <div class="x-cpl" id="x-customizer-preloader">
    <div class="x-cpl-inner">
      <div class="x-cpl-spinner">
        <div class="x-cpl-spinner-mod mod-1">
          <div class="x-cpl-spinner-circle-1"></div>
          <div class="x-cpl-spinner-circle-2"></div>
          <div class="x-cpl-spinner-circle-3"></div>
          <div class="x-cpl-spinner-circle-4"></div>
        </div>
        <div class="x-cpl-spinner-mod mod-2">
          <div class="x-cpl-spinner-circle-1"></div>
          <div class="x-cpl-spinner-circle-2"></div>
          <div class="x-cpl-spinner-circle-3"></div>
          <div class="x-cpl-spinner-circle-4"></div>
        </div>
        <div class="x-cpl-spinner-mod mod-3">
          <div class="x-cpl-spinner-circle-1"></div>
          <div class="x-cpl-spinner-circle-2"></div>
          <div class="x-cpl-spinner-circle-3"></div>
          <div class="x-cpl-spinner-circle-4"></div>
        </div>
      </div>
    </div>
    <div class="x-cpl-text">Powered by Themeco</div>
  </div>

  <?php

  $output = ob_get_contents(); ob_end_clean();

  $output = preg_replace( '#/\*.*?\*/#s', '', $output );
  $output = preg_replace( '/\s*([{}|:;,])\s+/', '$1', $output );
  $output = preg_replace( '/\s\s+(.*)/', '$1', $output );

  echo $output;

}

add_action( 'customize_controls_print_styles', 'x_customizer_preloader' );