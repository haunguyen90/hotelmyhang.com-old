<section class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-12 col-left">
        <ul class="list-unstyled"> <?php dynamic_sidebar( 'first_footer' ); ?> </ul>
      </div>
      <div class="col-md-4 col-xs-12 col-left">
        <ul class="list-unstyled"> <?php dynamic_sidebar( 'second_footer' ); ?> </ul>
      </div>
      <div class="col-md-4 col-xs-12 col-right">
        <ul class="list-unstyled"> <?php dynamic_sidebar( 'third_footer' ); ?> </ul>
      </div>
    </div>
    <hr/>
    <div class="row copyright"> <?php echo get_theme_mod( 'mcs_copyright_op' ); ?> </div>
  </div>
</section>
<a id="back-to-top" href="#" class="back-to-top" title="<?php

	if(get_locale() == 'en_US') {
		echo 'Click to return on the top page';
	}else{
		echo 'Nhấp để trở lại trên trang đầu';
	}

?>" data-toggle="tooltip" data-placement="left"><img src="<?php echo get_site_url(); ?>/wp-content/themes/pixelCent-HalinaHotel/assets/img/icon_gotop.png" alt="<?php

	if(get_locale() == 'en_US') {
		echo 'Click to return on the top page';
	}else{
		echo 'Nhấp để trở lại trên trang đầu';
	}

?>"></a>
<?php wp_footer(); ?>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/pixelCent-HalinaHotel/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/pixelCent-HalinaHotel/assets/js/jquery.mobile.customized.min.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/pixelCent-HalinaHotel/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/pixelCent-HalinaHotel/assets/js/camera.min.js"></script>
<script>
/* Menu Head */
jQuery(".menu-toggle").click(function(){
	jQuery('.menu-toggle').toggleClass("active");
});<?php if ( get_the_ID() == 1126 || get_the_ID() == 64 ) { }else{ ?>
/* Scroll Page */
jQuery(document).ready(function($){
	$('html, body').animate({ scrollTop: ( $(".main-page").offset().top - 70) }, 1000);
});<?php } ?>
/* Scroll */
jQuery(function() {
	jQuery('a[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = jQuery(this.hash);
			target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				jQuery('html, body').animate({
					scrollTop: (target.offset().top - 100)
				}, 500, "easeInOutExpo");
				return false;
			}
		}
	});
});
/* Fixed Head */
jQuery(document).on('ready', function() {
	document.body.onscroll = function() {
		if(jQuery(this).scrollTop() > 600){ 
			jQuery('.header').addClass( "h_fixed" );
			jQuery("body").css("padding-top", "720px");
		}else{
			jQuery('.header').removeClass( "h_fixed" );
			jQuery("body").css("padding-top", "0px");
		}
	};
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 50) {
			jQuery('#back-to-top').fadeIn();
		} else {
			jQuery('#back-to-top').fadeOut();
		}
		});
		jQuery('#back-to-top').click(function () {
		jQuery('#back-to-top').tooltip('hide');
		jQuery('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	
	jQuery('#back-to-top').tooltip('show');
});
jQuery(function(){
	jQuery('#camera_wrap').camera({
		height: '650',
		loader: 'bar',
		pagination: true,
		thumbnails: false,
		hover: false,
		opacityOnGrid: false,
		imagePath: 'img/banner/'
	});
});
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-97641219-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());
  gtag('config', 'UA-97641219-5');
</script>
</body></html>