<?php

/*
Template Name: Home Template
*/

get_header();

global $product;

?>
<div class="container box-second">
  <div class="row">
    <div class="title-sm">
      <?php

		if(get_locale() == 'en_US') {
			echo get_theme_mod( 'mcs_title_aboutus_en_op' );
		}else{
			echo get_theme_mod( 'mcs_title_aboutus_op' );
		}

		?>
    </div>
	<span class="uvc-headings-line" style="display:block;margin-bottom: 15px !important;border-style: solid; border-bottom-width: 2px; border-color: rgb(214, 123, 4); width: 100px; margin: 0px auto;"></span>
	<!--<p style="margin-bottom:20px !important;font-size: 15px;max-width: 870px;margin: auto;text-align: center;">Surounded by the famous UNESCO heritage sites including Hoi An Ancient Town, Hoi An Sanctuary and Hue the Citadel, Da Nang City with the title known as the best city for living in Viet Nam is not only a symbol of economy – culture growth but also a idea destination for tourism and leisure</p>-->
    <!-- 1 -->
	<?php 
		if(get_locale() == 'en_US') {
			$mcs_li_abo_fi_op = get_theme_mod( 'mcs_li_abo_fi_en_op' );
			$mcs_ti_abo_fi_op = str_replace('<br/>',' ',get_theme_mod( 'mcs_ti_abo_fi_en_op' ));
			$img_abo_fi = get_theme_mod( 'img_abo_fi' );
			$mcs_ti_abo_fi_op = str_replace('<br/>',' ',get_theme_mod( 'mcs_ti_abo_fi_en_op' ));
		}else{
			$mcs_li_abo_fi_op = get_theme_mod( 'mcs_li_abo_fi_op' );
			$mcs_ti_abo_fi_op = str_replace('<br/>',' ',get_theme_mod( 'mcs_ti_abo_fi_op' ));
			$img_abo_fi = get_theme_mod( 'img_abo_fi' );
			$mcs_ti_abo_fi_op = str_replace('<br/>',' ',get_theme_mod( 'mcs_ti_abo_fi_op' ));
		}
		
		if(!empty($img_abo_fi)){
	?>
	<div class="col-md-4 col-xs-12 col-right">
		<div class="single-img"><a href="<?php echo $mcs_li_abo_fi_op; ?>" title="<?php echo $mcs_ti_abo_fi_op; ?>"> <img src="<?php echo $img_abo_fi; ?>" alt="<?php echo $mcs_ti_abo_fi_op; ?>"> </a> 
		</div>
    </div>
	<?php } ?>
	<!-- /1 -->
	<!-- 2 -->
	<?php 
	if(get_locale() == 'en_US') {
		$mcs_li_abo_se_op = get_theme_mod( 'mcs_li_abo_se_en_op' );
		$mcs_ti_abo_se_op = str_replace('<br/>',' ',get_theme_mod( 'mcs_ti_abo_se_en_op' ));
		$img_abo_se = get_theme_mod( 'img_abo_se' );
		$mcs_ti_abo_se_op_br = get_theme_mod( 'mcs_ti_abo_se_en_op' );
	}else{
		$mcs_li_abo_se_op = get_theme_mod( 'mcs_li_abo_se_op' );
		$mcs_ti_abo_se_op = str_replace('<br/>',' ',get_theme_mod( 'mcs_ti_abo_se_op' ));
		$img_abo_se = get_theme_mod( 'img_abo_se' );
		$mcs_ti_abo_se_op_br = get_theme_mod( 'mcs_ti_abo_se_op' );
	}
	if(!empty($img_abo_se)){
	?>
    <div class="col-md-8 col-xs-12">
      <div class="single-img-caption" onclick="window.location.href = '<?php echo $mcs_li_abo_se_op; ?>';">
		<a href="<?php echo $mcs_li_abo_se_op; ?>" title="<?php echo $mcs_ti_abo_se_op; ?>">
			<img src="<?php echo $img_abo_se; ?>" alt="<?php echo $mcs_ti_abo_se_op; ?>">
		</a>
        <div class="caption-img">
			<?php echo $mcs_ti_abo_se_op_br; ?>
        </div>
      </div>
    </div>
	<?php } ?>
	<!-- /2 -->
  </div>
  <div class="row">
    <div class="col-md-8 col-xs-12 col-left">
	  <?php 
		if(get_locale() == 'en_US') {
			$mcs_li_over_fi_op = get_theme_mod( 'mcs_li_over_fi_en_op' );
			$mcs_ti_over_fi_op = str_replace('<br/>',' ',get_theme_mod( 'mcs_ti_over_fi_en_op' ));
			$img_over_fi = get_theme_mod( 'img_over_fi' );
			$mcs_ti_over_fi_en_op = get_theme_mod( 'mcs_ti_over_fi_en_op' );
		}else{
			$mcs_li_over_fi_op = get_theme_mod( 'mcs_li_over_fi_op' );
			$mcs_ti_over_fi_op = str_replace('<br/>',' ',get_theme_mod( 'mcs_ti_over_fi_op' ));
			$img_over_fi = get_theme_mod( 'img_over_fi' );
			$mcs_ti_over_fi_en_op = get_theme_mod( 'mcs_ti_over_fi_en_op' );
		}
	  ?>
	  <!-- 1 -->
	  <?php if(!empty($mcs_ti_over_fi_en_op)) { ?>
      <div class="single-img-caption" onclick="window.location.href = '<?php echo $mcs_li_over_fi_op; ?>';">
		<a href="<?php echo $mcs_li_over_fi_op; ?>" title="<?php echo $mcs_ti_over_fi_op; ?>">
			<img src="<?php echo $img_over_fi; ?>" alt="<?php echo $mcs_ti_over_fi_op; ?>">
		</a>
        <div class="caption-img">
			<span>
				<?php
					echo $mcs_ti_over_fi_en_op;
				?>
			</span><br/>
        </div>
      </div>
	  <?php } ?>
	  <!-- /1 -->
	  <!-- 2 -->
	  <?php 
		if(get_locale() == 'en_US') {
			$mcs_li_over_se_op = get_theme_mod( 'mcs_li_over_se_en_op' );
			$mcs_ti_over_se_op = str_replace('<br/>',' ',get_theme_mod( 'mcs_ti_over_se_en_op' ));
			$img_over_se = get_theme_mod( 'img_over_se' );
			$mcs_ti_over_se_op_br = get_theme_mod( 'mcs_ti_over_se_en_op' );
		}else{
			$mcs_li_over_se_op = get_theme_mod( 'mcs_li_over_se_op' );
			$mcs_ti_over_se_op = str_replace('<br/>',' ',get_theme_mod( 'mcs_ti_over_se_op' ));
			$img_over_se = get_theme_mod( 'img_over_se' );
			$mcs_ti_over_se_op_br = get_theme_mod( 'mcs_ti_over_se_op' );
		}
	  if(!empty($img_over_se)){
	  ?>
      <div class="single-img-caption small-text" onclick="window.location.href = '<?php echo $mcs_li_over_se_op; ?>';">
		<a href="<?php echo $mcs_li_over_se_op; ?>" title="<?php echo $mcs_ti_over_se_op; ?>">
			<img src="<?php echo $img_over_se; ?>" alt="<?php echo $mcs_ti_over_se_op; ?>">
		</a>
        <div class="caption-img"> "<?php echo $mcs_ti_over_se_op_br; ?>" </div>
      </div>
	  <?php } ?>
	  <!-- /2 -->
    </div>
    <div class="col-md-4 col-xs-12 col-right">
	  <!-- 1 -->
	  <?php 
		if(get_locale() == 'en_US') {
			$mcs_li_over_th_op = get_theme_mod( 'mcs_li_over_th_en_op' );
			$mcs_ti_over_th_op = str_replace('<br/>',' ',get_theme_mod( 'mcs_ti_over_th_en_op' ));
			$img_over_th = get_theme_mod( 'img_over_th' );
			$mcs_ti_over_th_op_br = get_theme_mod( 'mcs_ti_over_th_en_op' );
		}else{
			$mcs_li_over_th_op = get_theme_mod( 'mcs_li_over_th_op' );
			$mcs_ti_over_th_op = str_replace('<br/>',' ',get_theme_mod( 'mcs_ti_over_th_op' ));
			$img_over_th = get_theme_mod( 'img_over_th' );
			$mcs_ti_over_th_op_br = get_theme_mod( 'mcs_ti_over_th_op' );
		}
		
		if(!empty($img_over_th)){
	  ?>
		<div class="single-img-caption" onclick="window.location.href = '<?php echo $mcs_li_over_th_op; ?>';">
			<a href="<?php echo $mcs_li_over_th_op; ?>" title="<?php echo $mcs_ti_over_th_op; ?>">
				<div class="link-img"> <img src="<?php echo $img_over_th; ?>" alt="<?php echo $mcs_ti_over_th_op; ?>">
				  <div class="caption-img"> <strong><?php echo $mcs_ti_over_th_op_br; ?></strong> </div>
				</div>
			</a> 
		</div>
	   <?php } ?>
		<!-- /1 -->
    </div>
  </div>
</div>
<?php 

get_footer();

?>
