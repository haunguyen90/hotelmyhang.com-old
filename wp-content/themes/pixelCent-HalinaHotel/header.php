<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<?php wp_head(); ?>
<link href="<?php echo get_site_url(); ?>/wp-content/themes/pixelCent-HalinaHotel/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo get_site_url(); ?>/wp-content/themes/pixelCent-HalinaHotel/assets/css/camera.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css" />
<link href="<?php echo get_site_url(); ?>/wp-content/themes/pixelCent-HalinaHotel/assets/css/main.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Heebo&display=swap" rel="stylesheet">
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section class="header">
  <div class="container-fluid nav-head">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="menu-toggle">
            <div class="burger-before"></div>
            <div class="burger"></div>
            <div class="burger-after"></div>
            <p class="menu">MENU</p>
            <div class="main-menu">
              <ul class="list-unstyled">
                <?php
			  		if(get_locale() == 'en_US') {
						$menu_primary = wp_get_nav_menu_object( 'main-menu-en' );
					}else{
						$menu_primary = wp_get_nav_menu_object( 'main-menu-vi' );
					}
					
					$menu_items = wp_get_nav_menu_items($menu_primary->term_id);

					foreach( $menu_items as $menu_item ) {
					/*current-menu-item*/
				  ?>
                <li class=""><a href="<?php echo $menu_item->url; ?>" title="<?php echo $menu_item->title; ?>"><?php echo $menu_item->title; ?></a></li>
                <?php } ?>
                <?php pll_the_languages(array( 'show_flags' => 1, 'dropdown' => 0 ));?>
              </ul>
            </div>
          </div>
          <div class="logo">
            <?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );

					$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

					if ( has_custom_logo() ) {

						echo '<a href="'.home_url().'"><img class="logo img-responsive" src="'. esc_url( $logo[0] ) .'" width="201" height="35"></a>';

					} else {

						echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';

					}
			?>
          </div>
          <div class="booking-engine"> <a href="<?php echo get_theme_mod( 'mcs_booknow_op' ); ?>" target="_blank" title="Book Now">Book Now</a> </div>
        </div>
      </div>
    </div>
    <?php if ( get_the_ID() == 64 || get_the_ID() == 1126 ) { ?>
    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap">
      <?php
		  $list_id = get_theme_mod( 'mcs_banner_op' );
		  
		  if(!empty($list_id)){
		  
		  $arr_id = explode(',',$list_id);
		  
			foreach($arr_id as $r=>$v){
			
			$de_image = wp_get_attachment_image_src($v, 'full');
	  ?>
      <div data-src="<?php echo $de_image[0]; ?>" data-title="<?php echo get_the_title($v); ?>"> </div>
      <?php } } ?>
    </div>
    <?php }else{  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap" style="background-image: url(<?=!empty($featured_img_url)?$featured_img_url:'none';?>);background-size:cover;" style="z-index:-1;">
      <div data-src="<?php echo $featured_img_url; ?>" data-title="<?php echo get_the_title(); ?>"> </div>
      <?php 
	  	$galleryArray = get_post_gallery_ids($post->ID);
		
		if(!empty($galleryArray)){
			foreach ($galleryArray as $id) {
				echo '<div data-src="'.wp_get_attachment_url( $id ).'" data-title="'.get_the_title().'"> </div>';
			}
		}
	  
	  ?>
    </div>
    <?php ?>
    <div class="bg_breadcrumb" style="background-image: url(none);" style="z-index:-1;">
    <h1><?php the_title(); ?></h1>
  </div>
  <?php } ?>
  </div>
</section>
