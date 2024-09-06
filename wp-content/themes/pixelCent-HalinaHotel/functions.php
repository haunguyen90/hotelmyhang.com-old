<?php

ob_clean();
 
/**
@ PixelCent
@ THEME_URL = get_stylesheet_directory()
@ CORE
**/
  
define( 'THEME_URL', get_stylesheet_directory() );
define( 'CORE', THEME_URL . '/core' );
 
/**
@ Load file /core/init.php
**/
 
require_once( CORE . '/init.php' );
 
/**
@ $content_width
**/

if ( ! isset( $content_width ) ) {

	/*
	* Default $content_width
	*/
	
	$content_width = 960;
}
 
/**
@ Thiết lập các chức năng sẽ được theme hỗ trợ
**/

if ( ! function_exists( 'pixelcent_theme_setup' ) ) {

        /*
        * Nếu chưa có hàm pixelcent_theme_setup() thì sẽ tạo mới hàm đó
        */
		
        function pixelcent_theme_setup() {
		
                /*
				* Thiết lập theme có thể dịch được
				*/
				
                $language_folder = THEME_URL . '/languages';
                load_theme_textdomain( 'pixelcent' , $language_folder );
 
                /*
                * Tự chèn RSS Feed links trong <head>
                */
				 
                add_theme_support( 'automatic-feed-links' );
 
                /*
                * Thêm chức năng post thumbnail
                */
				
                add_theme_support( 'post-thumbnails' );
 
                /*
                * Thêm chức năng title-tag để tự thêm <title>
                */
				
                add_theme_support( 'title-tag' );
 
                /*
                * Thêm chức năng post format
                */
				
                add_theme_support( 'post-formats',
					array(
						'video',
						'image',
						'audio',
						'gallery'
					)
                 );
 
                /*
                * Thêm chức năng custom background
                */
				
                /*
				* $default_background = array(
                *     'default-color' => '#e8e8e8',
                * );
                * add_theme_support( 'custom-background', $default_background );
				*/
				
                /*
                * Tạo menu cho theme
                */
                
				register_nav_menu ( 'primary-menu', __('Primary Menu', 'pixelcent') );
				
                /*
                * Tạo widgets sidebar cho theme
                */
				 
                $sidebar_left = array(
					'name'          => __( 'Blog Widget Area Left', 'sidebar_left' ),
					'id'            => 'sidebar_left',
				);
                register_sidebar( $sidebar_left );
				
				$sidebar_right = array(
					'name'          => __( 'Blog Widget Area Right', 'sidebar_right' ),
					'id'            => 'sidebar_right',
				);
                register_sidebar( $sidebar_right );
				
				$first_footer = array(
					'name'          => __( 'First Footer Widget Area', 'first_footer' ),
					'id'            => 'first_footer',
				);
                register_sidebar( $first_footer );
				
				$second_footer = array(
					'name'          => __( 'Second Footer Widget Area', 'second_footer' ),
					'id'            => 'second_footer',
				);
                register_sidebar( $second_footer );
				
				$third_footer = array(
					'name'          => __( 'Third Footer Widget Area', 'third_footer' ),
					'id'            => 'third_footer',
				);
                register_sidebar( $third_footer );
				
				$fourth_footer = array(
					'name'          => __( 'Fourth Footer Widget Area', 'fourth_footer' ),
					'id'            => 'fourth_footer',
				);
                register_sidebar( $fourth_footer );
				
				/*
                * Tạo Logo
                */
				
				$default_logo = array(
                    'default-logo' => 'no-img.png',
                );
                add_theme_support( 'custom-logo', $default_logo );
				
				$default_logo_foot = array(
                    'default-logo-foot' => 'no-img.png',
                );
                add_theme_support( 'custom-logo-foot', $default_logo_foot );
        }
        add_action ( 'init', 'pixelcent_theme_setup' );
}

function mcs_social($wp_customize){

    $wp_customize->add_section('mcs_social_handle', array(
        'title'    => __('Social Network', 'mcs'),
        'description' => '',
        'priority' => 70,
    ));
	
	//  =============================
    //  = Book  Now                 =
    //  =============================
    $wp_customize->add_setting('mcs_booknow_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_booknow', array(
        'label'      => __('Book Now', 'mcs'),
        'section'    => 'mcs_social_handle',
        'settings'   => 'mcs_booknow_op',
    ));
	
	//  =============================
    //  = Tripadvisor               =
    //  =============================
    $wp_customize->add_setting('mcs_tripadvisor_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_tripadvisor', array(
        'label'      => __('Tripadvisor', 'mcs'),
        'section'    => 'mcs_social_handle',
        'settings'   => 'mcs_tripadvisor_op',
    ));

    //  =============================
    //  = Facebook                  =
    //  =============================
    $wp_customize->add_setting('mcs_fb_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_fb', array(
        'label'      => __('Facebook', 'mcs'),
        'section'    => 'mcs_social_handle',
        'settings'   => 'mcs_fb_op',
    ));

    //  =============================
    //  = Twitter                   =
    //  =============================
    $wp_customize->add_setting('mcs_tw_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',

    ));

    $wp_customize->add_control('mcs_tw', array(
        'label'      => __('Twitter', 'mcs'),
        'section'    => 'mcs_social_handle',
        'settings'   => 'mcs_tw_op',
    ));
	
	//  =============================
    //  = Google                    =
    //  =============================
    $wp_customize->add_setting('mcs_google_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',

    ));

    $wp_customize->add_control('mcs_google', array(
        'label'      => __('Google', 'mcs'),
        'section'    => 'mcs_social_handle',
        'settings'   => 'mcs_google_op',
    ));
	
	//  =============================
    //  = Instagram                 =
    //  =============================
    $wp_customize->add_setting('mcs_ins_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',

    ));

    $wp_customize->add_control('mcs_ins', array(
        'label'      => __('Instagram', 'mcs'),
        'section'    => 'mcs_social_handle',
        'settings'   => 'mcs_ins_op',
    ));
	
	//  =============================
    //  = Vimeos                    =
    //  =============================
    $wp_customize->add_setting('mcs_vimeos_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',

    ));

    $wp_customize->add_control('mcs_vimeos', array(
        'label'      => __('Vimeo', 'mcs'),
        'section'    => 'mcs_social_handle',
        'settings'   => 'mcs_vimeos_op',
    ));
	
	//  =============================
    //  = Youtube                   =
    //  =============================
    $wp_customize->add_setting('mcs_youtube_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',

    ));

    $wp_customize->add_control('mcs_youtube', array(
        'label'      => __('Youtube', 'mcs'),
        'section'    => 'mcs_social_handle',
        'settings'   => 'mcs_youtube_op',
    ));
	
	//  =============================
    //  = Linkedin                   =
    //  =============================
    $wp_customize->add_setting('mcs_linkedin_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',

    ));

    $wp_customize->add_control('mcs_linkedin', array(
        'label'      => __('Linkedin', 'mcs'),
        'section'    => 'mcs_social_handle',
        'settings'   => 'mcs_linkedin_op',
    ));
}

add_action( 'customize_register', 'mcs_social' );

function mcs_banner($wp_customize){

    $wp_customize->add_section('mcs_banner_handle', array(
        'title'    => __('Banner Images', 'mcs'),
        'description' => 'Enter ID of Image...',
        'priority' => 70,
    ));
	
	//  =============================
    //  = List ID Image                 =
    //  =============================
    $wp_customize->add_setting('mcs_banner_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_banner', array(
        'label'      => __('ID Image', 'mcs'),
        'section'    => 'mcs_banner_handle',
        'settings'   => 'mcs_banner_op',
    ));
	
}

add_action( 'customize_register', 'mcs_banner' );

function customizer_promotion( $wp_customize ) {

    $wp_customize->add_section (
        'promotion',
        array(
            'title' => 'Section Promotion',
            'description' => '',
            'priority' => 25
        )
    );
	
	//  =============================
    //  = Title Promotion           =
    //  =============================
    $wp_customize->add_setting('mcs_title_promotion_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_title_promotion', array(
        'label'      => __('Title Promotion Text', 'mcs'),
        'section'    => 'promotion',
		'type' => 'textarea',
        'settings'   => 'mcs_title_promotion_op',
    ));
	
	//  =============================
    //  = (English) Title Promotion =
    //  =============================
    $wp_customize->add_setting('mcs_title_promotion_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_title_promotion_en', array(
        'label'      => __('(English) Title Promotion Text', 'mcs'),
        'section'    => 'promotion',
		'type' => 'textarea',
        'settings'   => 'mcs_title_promotion_en_op',
    ));
	
	//  =============================
    //  = Box First                 =
    //  =============================
    $wp_customize->add_setting('mcs_ti_pro_fi_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_pro_fi', array(
        'label'      => __('(Box First) Title ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_ti_pro_fi_op',
    ));
	
	$wp_customize->add_setting('mcs_ti_pro_fi_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_pro_fi_en', array(
        'label'      => __('(Box First)(English) Title ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_ti_pro_fi_en_op',
    ));
	
	$wp_customize->add_setting('mcs_li_pro_fi_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_pro_fi', array(
        'label'      => __('(Box First) Link ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_li_pro_fi_op',
    ));
	
	$wp_customize->add_setting('mcs_li_pro_fi_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_pro_fi_en', array(
        'label'      => __('(Box First)(English) Link ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_li_pro_fi_en_op',
    ));
	
	$wp_customize->add_setting( 'img_pro_fi' );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'img_pro_fi', array(
				'label' => '(Box First) Image',
				'section' => 'promotion',
				'settings' => 'img_pro_fi'
			)
		)
	);
	
	//  =============================
    //  = Box Second                =
    //  =============================
	
	$wp_customize->add_setting('mcs_ti_pro_se_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_pro_se', array(
        'label'      => __('(Box Second) Title ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_ti_pro_se_op',
    ));
	
	$wp_customize->add_setting('mcs_ti_pro_se_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_pro_se_en', array(
        'label'      => __('(Box Second)(English) Title ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_ti_pro_se_en_op',
    ));
	
	$wp_customize->add_setting('mcs_li_pro_se_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_pro_se', array(
        'label'      => __('(Box Second) Link ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_li_pro_se_op',
    ));
	
	$wp_customize->add_setting('mcs_li_pro_se_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_pro_se_en', array(
        'label'      => __('(Box Second)(English) Link ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_li_pro_se_en_op',
    ));
	
	$wp_customize->add_setting( 'img_pro_se' );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'img_pro_se', array(
				'label' => '(Box Second) Image',
				'section' => 'promotion',
				'settings' => 'img_pro_se'
			)
		)
	);
    
	//  =============================
    //  = Box Third                 =
    //  =============================
	
	$wp_customize->add_setting('mcs_ti_pro_th_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_pro_th', array(
        'label'      => __('(Box Third) Title ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_ti_pro_th_op',
    ));
	
	$wp_customize->add_setting('mcs_ti_pro_th_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_pro_th_en', array(
        'label'      => __('(Box Third)(English) Title ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_ti_pro_th_en_op',
    ));
	
	$wp_customize->add_setting('mcs_li_pro_th_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_pro_th', array(
        'label'      => __('(Box Third) Link ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_li_pro_th_op',
    ));
	
	$wp_customize->add_setting('mcs_li_pro_th_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_pro_th_en', array(
        'label'      => __('(Box Third)(English) Link ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_li_pro_th_en_op',
    ));
	
	$wp_customize->add_setting( 'img_pro_th' );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'img_pro_th', array(
				'label' => '(Box Third) Image',
				'section' => 'promotion',
				'settings' => 'img_pro_th'
			)
		)
	);
    
	//  =============================
    //  = Box Fourth                =
    //  =============================
	
	$wp_customize->add_setting('mcs_ti_pro_fo_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_pro_fo', array(
        'label'      => __('(Box Fourth) Title ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_ti_pro_fo_op',
    ));
	
	$wp_customize->add_setting('mcs_ti_pro_fo_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_pro_fo_en', array(
        'label'      => __('(Box Fourth)(English) Title ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_ti_pro_fo_en_op',
    ));
	
	$wp_customize->add_setting('mcs_li_pro_fo_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_pro_fo', array(
        'label'      => __('(Box Fourth) Link ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_li_pro_fo_op',
    ));
	
	$wp_customize->add_setting('mcs_li_pro_fo_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_pro_fo_en', array(
        'label'      => __('(Box Fourth)(English) Link ', 'mcs'),
        'section'    => 'promotion',
		'type' => 'text',
        'settings'   => 'mcs_li_pro_fo_en_op',
    ));
	
	$wp_customize->add_setting( 'img_pro_fo' );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'img_pro_fo', array(
				'label' => '(Box Fourth) Image',
				'section' => 'promotion',
				'settings' => 'img_pro_fo'
			)
		)
	);
	
}

add_action( 'customize_register', 'customizer_promotion' );

function customizer_aboutus( $wp_customize ) {

    $wp_customize->add_section (
        'aboutus',
        array(
            'title' => 'Section About Us',
            'description' => '',
            'priority' => 25
        )
    );
	
	//  =============================
    //  = Title About Us           =
    //  =============================
    $wp_customize->add_setting('mcs_title_aboutus_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_title_aboutus', array(
        'label'      => __('Title Text', 'mcs'),
        'section'    => 'aboutus',
		'type' => 'textarea',
        'settings'   => 'mcs_title_aboutus_op',
    ));
	
	//  =============================
    //  = (English) Title aboutus =
    //  =============================
    $wp_customize->add_setting('mcs_title_aboutus_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_title_aboutus_en', array(
        'label'      => __('(English) Title Text', 'mcs'),
        'section'    => 'aboutus',
		'type' => 'textarea',
        'settings'   => 'mcs_title_aboutus_en_op',
    ));
	
	//  =============================
    //  = Box First                 =
    //  =============================
    $wp_customize->add_setting('mcs_ti_abo_fi_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_abo_fi', array(
        'label'      => __('(Box First) Title ', 'mcs'),
        'section'    => 'aboutus',
		'type' => 'text',
        'settings'   => 'mcs_ti_abo_fi_op',
    ));
	
	$wp_customize->add_setting('mcs_ti_abo_fi_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_abo_fi_en', array(
        'label'      => __('(Box First)(English) Title ', 'mcs'),
        'section'    => 'aboutus',
		'type' => 'text',
        'settings'   => 'mcs_ti_abo_fi_en_op',
    ));
	
	$wp_customize->add_setting('mcs_li_abo_fi_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_abo_fi', array(
        'label'      => __('(Box First) Link ', 'mcs'),
        'section'    => 'aboutus',
		'type' => 'text',
        'settings'   => 'mcs_li_abo_fi_op',
    ));
	
	$wp_customize->add_setting('mcs_li_abo_fi_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_abo_fi_en', array(
        'label'      => __('(Box First)(English) Link ', 'mcs'),
        'section'    => 'aboutus',
		'type' => 'text',
        'settings'   => 'mcs_li_abo_fi_en_op',
    ));
	
	$wp_customize->add_setting( 'img_abo_fi' );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'img_abo_fi', array(
				'label' => '(Box First) Image',
				'section' => 'aboutus',
				'settings' => 'img_abo_fi'
			)
		)
	);
	
	//  =============================
    //  = Box Second                =
    //  =============================
	
	$wp_customize->add_setting('mcs_ti_abo_se_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_abo_se', array(
        'label'      => __('(Box Second) Title ', 'mcs'),
        'section'    => 'aboutus',
		'type' => 'text',
        'settings'   => 'mcs_ti_abo_se_op',
    ));
	
	$wp_customize->add_setting('mcs_ti_abo_se_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_abo_se_en', array(
        'label'      => __('(Box Second)(English) Title ', 'mcs'),
        'section'    => 'aboutus',
		'type' => 'text',
        'settings'   => 'mcs_ti_abo_se_en_op',
    ));
	
	$wp_customize->add_setting('mcs_li_abo_se_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_abo_se', array(
        'label'      => __('(Box Second) Link ', 'mcs'),
        'section'    => 'aboutus',
		'type' => 'text',
        'settings'   => 'mcs_li_abo_se_op',
    ));
	
	$wp_customize->add_setting('mcs_li_abo_se_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_abo_se_en', array(
        'label'      => __('(Box Second)(English) Link ', 'mcs'),
        'section'    => 'aboutus',
		'type' => 'text',
        'settings'   => 'mcs_li_abo_se_en_op',
    ));
	
	$wp_customize->add_setting( 'img_abo_se' );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'img_abo_se', array(
				'label' => '(Box Second) Image',
				'section' => 'aboutus',
				'settings' => 'img_abo_se'
			)
		)
	);
}

add_action( 'customize_register', 'customizer_aboutus' );

function customizer_overview( $wp_customize ) {

    $wp_customize->add_section (
        'overview',
        array(
            'title' => 'Section Overview',
            'description' => '',
            'priority' => 25
        )
    );
	
	//  =============================
    //  = Title Overview           =
    //  =============================
    $wp_customize->add_setting('mcs_title_overview_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_title_overview', array(
        'label'      => __('Title Text', 'mcs'),
        'section'    => 'overview',
		'type' => 'textarea',
        'settings'   => 'mcs_title_overview_op',
    ));
	
	//  =============================
    //  = (English) Title Overview =
    //  =============================
    $wp_customize->add_setting('mcs_title_overview_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_title_overview_en', array(
        'label'      => __('(English) Title Text', 'mcs'),
        'section'    => 'overview',
		'type' => 'textarea',
        'settings'   => 'mcs_title_overview_en_op',
    ));
	
	//  =============================
    //  = Box First                 =
    //  =============================
    $wp_customize->add_setting('mcs_ti_over_fi_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_over_fi', array(
        'label'      => __('(Box First) Title ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_ti_over_fi_op',
    ));
	
	$wp_customize->add_setting('mcs_ti_over_fi_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_over_fi_en', array(
        'label'      => __('(Box First)(English) Title ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_ti_over_fi_en_op',
    ));
	
	$wp_customize->add_setting('mcs_li_over_fi_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_over_fi', array(
        'label'      => __('(Box First) Link ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_li_over_fi_op',
    ));
	
	$wp_customize->add_setting('mcs_li_over_fi_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_over_fi_en', array(
        'label'      => __('(Box First)(English) Link ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_li_over_fi_en_op',
    ));
	
	$wp_customize->add_setting('mcs_btn_over_fi_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_btn_over_fi', array(
        'label'      => __('(Box First) Button ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_btn_over_fi_op',
    ));
	
	$wp_customize->add_setting('mcs_btn_over_fi_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_btn_over_fi_en', array(
        'label'      => __('(Box First)(English) Button ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_btn_over_fi_en_op',
    ));
	
	$wp_customize->add_setting( 'img_over_fi' );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'img_over_fi', array(
				'label' => '(Box First) Image',
				'section' => 'overview',
				'settings' => 'img_over_fi'
			)
		)
	);
	
	//  =============================
    //  = Box Second                =
    //  =============================
	
	$wp_customize->add_setting('mcs_ti_over_se_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_over_se', array(
        'label'      => __('(Box Second) Title ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_ti_over_se_op',
    ));
	
	$wp_customize->add_setting('mcs_ti_over_se_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_over_se_en', array(
        'label'      => __('(Box Second)(English) Title ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_ti_over_se_en_op',
    ));
	
	$wp_customize->add_setting('mcs_li_over_se_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_over_se', array(
        'label'      => __('(Box Second) Link ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_li_over_se_op',
    ));
	
	$wp_customize->add_setting('mcs_li_over_se_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_over_se_en', array(
        'label'      => __('(Box Second)(English) Link ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_li_over_se_en_op',
    ));
	
	$wp_customize->add_setting('mcs_btn_over_se_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_btn_over_se', array(
        'label'      => __('(Box Second) Button ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_btn_over_se_op',
    ));
	
	$wp_customize->add_setting('mcs_btn_over_se_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_btn_over_se_en', array(
        'label'      => __('(Box Second)(English) Button ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_btn_over_se_en_op',
    ));
	
	$wp_customize->add_setting( 'img_over_se' );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'img_over_se', array(
				'label' => '(Box Second) Image',
				'section' => 'overview',
				'settings' => 'img_over_se'
			)
		)
	);
	
	//  =============================
    //  = Box Third                =
    //  =============================
	
	$wp_customize->add_setting('mcs_ti_over_th_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_over_th', array(
        'label'      => __('(Box Third) Title ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_ti_over_th_op',
    ));
	
	$wp_customize->add_setting('mcs_ti_over_th_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_ti_over_th_en', array(
        'label'      => __('(Box Third)(English) Title ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_ti_over_th_en_op',
    ));
	
	$wp_customize->add_setting('mcs_li_over_th_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_over_th', array(
        'label'      => __('(Box Third) Link ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_li_over_th_op',
    ));
	
	$wp_customize->add_setting('mcs_li_over_th_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_li_over_th_en', array(
        'label'      => __('(Box Third)(English) Link ', 'mcs'),
        'section'    => 'overview',
		'type' => 'text',
        'settings'   => 'mcs_li_over_th_en_op',
    ));

	$wp_customize->add_setting( 'img_over_th' );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'img_over_th', array(
				'label' => '(Box Third) Image',
				'section' => 'overview',
				'settings' => 'img_over_th'
			)
		)
	);
}

add_action( 'customize_register', 'customizer_overview' );

function customizer_footer( $wp_customize ) {

    $wp_customize->add_section (
        'footer',
        array(
            'title' => 'Section Footer',
            'description' => '',
            'priority' => 25
        )
    );
	
	//  =============================
    //  = Copyright                 =
    //  =============================
    $wp_customize->add_setting('mcs_copyright_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_copyright', array(
        'label'      => __('Copyright Text', 'mcs'),
        'section'    => 'footer',
		'type' => 'textarea',
        'settings'   => 'mcs_copyright_op',
    ));
	
	//  =============================
    //  = Logo Foot             =
    //  =============================
    $wp_customize->add_setting( 'img_logo_foot' );
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize, 'img_logo_foot', array(
				'label' => 'Logo Image',
				'section' => 'footer',
				'settings' => 'img_logo_foot'
			)
		)
	);
	
	//  =============================
    //  = Description               =
    //  =============================
    $wp_customize->add_setting('mcs_description_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_description', array(
        'label'      => __('Description Text', 'mcs'),
        'section'    => 'footer',
		'type' => 'textarea',
        'settings'   => 'mcs_description_op',
    ));
	
	//  =============================
    //  = (English) Description     =
    //  =============================
    $wp_customize->add_setting('mcs_description_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_description_en', array(
        'label'      => __('(English) Description Text', 'mcs'),
        'section'    => 'footer',
		'type' => 'textarea',
        'settings'   => 'mcs_description_en_op',
    ));
	
	//  =============================
    //  = Address                  =
    //  =============================
    $wp_customize->add_setting('mcs_address_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_address', array(
        'label'      => __('Address Text', 'mcs'),
        'section'    => 'footer',
		'type' => 'textarea',
        'settings'   => 'mcs_address_op',
    ));
	
	//  =============================
    //  = (English) Address         =
    //  =============================
    $wp_customize->add_setting('mcs_address_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_address_en', array(
        'label'      => __('(English) Address Text', 'mcs'),
        'section'    => 'footer',
		'type' => 'textarea',
        'settings'   => 'mcs_address_en_op',
    ));
	
	//  =============================
    //  = Phone                 =
    //  =============================
    $wp_customize->add_setting('mcs_phone_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_phone', array(
        'label'      => __('Phone Text', 'mcs'),
        'section'    => 'footer',
		'type' => 'textarea',
        'settings'   => 'mcs_phone_op',
    ));
	
	//  =============================
    //  = Email                 =
    //  =============================
    $wp_customize->add_setting('mcs_email_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_email', array(
        'label'      => __('Email Text', 'mcs'),
        'section'    => 'footer',
		'type' => 'textarea',
        'settings'   => 'mcs_email_op',
    ));
	
	//  =============================
    //  = Title Foot                =
    //  =============================
    $wp_customize->add_setting('mcs_title_foot_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_title_foot', array(
        'label'      => __('Title Foot Text', 'mcs'),
        'section'    => 'footer',
		'type' => 'textarea',
        'settings'   => 'mcs_title_foot_op',
    ));
	
	//  =============================
    //  = (English) Title Foot      =
    //  =============================
    $wp_customize->add_setting('mcs_title_foot_en_op', array(
        'default'        => '',
        'capability'     => 'edit_theme_options',
    ));

    $wp_customize->add_control('mcs_title_foot_en', array(
        'label'      => __('(English) Title Foot Text', 'mcs'),
        'section'    => 'footer',
		'type' => 'textarea',
        'settings'   => 'mcs_title_foot_en_op',
    ));
}

add_action( 'customize_register', 'customizer_footer' );

/**
@ Logo
@ pixelcent_logo()
**/

if ( ! function_exists( 'pixelcent_logo' ) ) {
  function pixelcent_logo() {?> <div class="logo"> <div class="site-name">
        <?php if ( is_home() ) {
          printf(
            '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
            get_bloginfo( 'url' ),
            get_bloginfo( 'description' ),
            get_bloginfo( 'sitename' )
          );
        } else {
          printf(
            '</p><a href="%1$s" title="%2$s">%3$s</a></p>',
            get_bloginfo( 'url' ),
            get_bloginfo( 'description' ),
            get_bloginfo( 'sitename' )
          );
        } ?> </div> <div class="site-description"><?php bloginfo( 'description' ); ?></div> </div> <?php 
	} 
}
 
/**
@ thiết lập hàm hiển thị menu
@ pixelcent_menu( $slug )
**/

if ( ! function_exists( 'pixelcent_menu' ) ) {
  function pixelcent_menu( $slug ) {
    $menu = array(
      'theme_location' => $slug,
      'container' => 'nav',
      'container_class' => $slug,
    );
    wp_nav_menu( $menu );
  }
}