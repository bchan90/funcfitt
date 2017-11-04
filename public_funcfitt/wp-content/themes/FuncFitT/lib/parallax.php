<?php
/**
 * FuncFitT
 *
 * This file adds functions to the FuncFitT Theme.
 *
 * @package FuncFitT Theme
 * @author  Byan Chan
 * @license GPL-2.0+
 * @link    http://www.funcfitt.com/
 *
 * @description Add parallax scrolling effect
 */

//* Enqueue Parallax script

add_action('wp_enqueue_scripts', 'fft_enqueue_parallax_script');



function fft_enqueue_parallax_script() {

    wp_enqueue_script('parallax', get_stylesheet_directory_uri() . '/js/parallax.min.js', array('jquery'));

}


//* Register Parallax widget areas *//

//* Landing Page
genesis_register_sidebar( array(
  'id' => 'lp-sect1',
  'name' => __( 'LP Header', 'fft' ),
  'description' => __( 'Landing Page Header Section', 'fft' ),
  ) );

genesis_register_sidebar( array(
  'id' => 'lp-sect2',
  'name' => __( 'LP About', 'fft' ),
  'description' => __( 'Landing Page About Section', 'fft' ),

  ) );

genesis_register_sidebar( array(
  'id' => 'lp-sect3',
  'name' => __( 'LP Package Section', 'fft' ),
  'description' => __( 'Landing Page Package Section', 'fft' ),
  ) );

genesis_register_sidebar( array(
  'id' => 'lp-sect4',
  'name' => __( 'LP Testimonial Section', 'fft' ),
  'description' => __( 'Landing Page Testimonial Section', 'fft' ),
  ) );

genesis_register_sidebar( array(
  'id' => 'lp-sect5',
  'name' => __( 'LP Footer Section', 'fft' ),
  'description' => __( 'Landing Page Footer Section', 'fft' ),
  ) );


//* About Landing Page
genesis_register_sidebar( array(
  'id' => 'about-sect1',
  'name' => __( 'About Section 1', 'fft' ),
  'description' => __( 'About Section 1', 'fft' ),
  ) );


//* Register customizer options *//
function fft_parallax_sections( $wp_customize ) {
  //* Add new section on Customizer
  
  //* Home Page
  $wp_customize->add_section(
    'fft_home_parallax_section',
    array(
      'title' => 'Home Parallax Options',
      'priority' => 201
    )
  );

  //* About Landing Page
  $wp_customize->add_section(
    'fft_about_parallax_section',
    array(
      'title' => 'About Parallax Options',
      'priority' => 202
    )
  );

  
  //* Home Page Sections *//
  //* Register background image sections
  $wp_customize->add_setting(
    'fft_home_setting_background_image_1',
    array(
      'default' => '',
      'sanitize_callback' => 'fft_sanitize_bgi',
      )
    );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize, 'fft_home_background_image_1', array(
        'label' => __( 'Background Image 1', 'fft' ),
        'settings' => 'fft_home_setting_background_image_1',
        'section' => 'fft_home_parallax_section',
        'priority' => 15
      )
    )
  );

  $wp_customize->add_setting(
    'fft_home_setting_background_image_2',
    array(
      'default' => '',
      'sanitize_callback' => 'fft_sanitize_bgi',
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize, 'fft_home_background_image_2', array(
        'label' => __( 'Background Image 2', 'fft' ),
        'settings' => 'fft_home_setting_background_image_2',
        'section' => 'fft_home_parallax_section',
        'priority' => 17
      )
    )
  );

  $wp_customize->add_setting(
    'fft_home_setting_background_image_3',
    array(
      'default' => '',
      'sanitize_callback' => 'fft_sanitize_bgi',
      )
    );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize, 'fft_home_background_image_3', array(
        'label' => __( 'Background Image 3', 'fft' ),
        'settings' => 'fft_home_setting_background_image_3',
        'section' => 'fft_home_parallax_section',
        'priority' => 19
      )
    )
  );
  
  $wp_customize->add_setting(
    'fft_home_setting_background_image_4',
    array(
      'default' => '',
      'sanitize_callback' => 'fft_sanitize_bgi',
      )
    );
  
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize, 'fft_home_background_image_4', array(
        'label' => __( 'Background Image 4', 'fft' ),
        'settings' => 'fft_home_setting_background_image_4',
        'section' => 'fft_home_parallax_section',
        'priority' => 21
        )
      )
    );
  
  $wp_customize->add_setting(
    'fft_home_setting_background_image_5',
    array(
      'default' => '',
      'sanitize_callback' => 'fft_sanitize_bgi',
      )
    );
  
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize, 'fft_home_background_image_5', array(
        'label' => __( 'Background Image 5', 'fft' ),
        'settings' => 'fft_home_setting_background_image_5',
        'section' => 'fft_home_parallax_section',
        'priority' => 23
        )
      )
    );

  //* Register color background sections
  $wp_customize->add_setting(
    'fft_home_setting_color_background_1',
    array(
      'default' => '#000000',
      'sanitize_callback' => 'sanitize_hex_color'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize, 'fft_home_color_bg_setting_1', array(
        'label' => __( 'Background Color 1', 'fft' ),
        'settings' => 'fft_home_setting_color_background_1',
        'section' => 'fft_home_parallax_section',
        'priority' => 16
      )
    )
  );

  $wp_customize->add_setting(
    'fft_home_setting_color_background_2',
    array(
      'default' => '#000000',
      'sanitize_callback' => 'sanitize_hex_color'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize, 'fft_home_color_bg_setting_2', array(
        'label' => __( 'Background Color 2', 'fft' ),
        'settings' => 'fft_home_setting_color_background_2',
        'section' => 'fft_home_parallax_section',
        'priority' => 18
      )
    )
  );

  $wp_customize->add_setting(
    'fft_home_setting_color_background_3',
    array(
      'default' => '#000000',
      'sanitize_callback' => 'sanitize_hex_color'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize, 'fft_home_color_bg_setting_3', array(
        'label' => __( 'Background Color 3', 'fft' ),
        'settings' => 'fft_home_setting_color_background_3',
        'section' => 'fft_home_parallax_section',
        'priority' => 20
      )
    )
  );
  
  $wp_customize->add_setting(
    'fft_home_setting_color_background_4',
    array(
      'default' => '#000000',
      'sanitize_callback' => 'sanitize_hex_color'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize, 'fft_home_color_bg_setting_4', array(
        'label' => __( 'Background Color 4', 'fft' ),
        'settings' => 'fft_home_setting_color_background_4',
        'section' => 'fft_home_parallax_section',
        'priority' => 22
      )
    )
  );

  $wp_customize->add_setting(
    'fft_home_setting_color_background_5',
    array(
      'default' => '#000000',
      'sanitize_callback' => 'sanitize_hex_color'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize, 'fft_home_color_bg_setting_5', array(
        'label' => __( 'Background Color 5', 'fft' ),
        'settings' => 'fft_home_setting_color_background_5',
        'section' => 'fft_home_parallax_section',
        'priority' => 24
      )
    )
  );
  
  //* About Landing Page Sections *//
  //* Register background image sections
  $wp_customize->add_setting(
    'fft_about_setting_background_image_1',
    array(
      'default' => '',
      'sanitize_callback' => 'fft_sanitize_bgi'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize, 'fft_about_background_image_1', array(
        'label' => __( 'Background Image 1', 'fft' ),
        'settings' => 'fft_about_setting_background_image_1',
        'section' => 'fft_about_parallax_section',
        'priority' => 21
      )
    )
  );

  //* Register color background sections
  $wp_customize->add_setting(
    'fft_about_setting_color_background_1',
    array(
      'default' => '#000000',
      'sanitize_callback' => 'sanitize_hex_color'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize, 'fft_about_color_bg_setting_1', array(
        'label' => __( 'Background Color 1', 'fft' ),
        'settings' => 'fft_about_setting_color_background_1',
        'section' => 'fft_about_parallax_section',
        'priority' => 22
      )
    )
  );

}

add_action( 'customize_register', 'fft_parallax_sections' );

function fft_sanitize_bgi( $image, $setting ) {
  $mimes = array(
    'jpg|jpeg|jpe' => 'image/jpeg',
    'gif' => 'image/gif',
    'png' => 'image/pnf',
    'bmp' => 'image/bmp',
    'tif|tiff' => 'image/tiff',
    'ico' => 'image/x-icon'
  );
  
  $file = wp_check_filetype( $image, $mimes );
  return( $file['ext'] ? $image : $setting->default );
}

?>