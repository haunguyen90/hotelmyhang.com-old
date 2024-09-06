<?php

/*
Template Name: Room Hotel Template
*/

get_header();

global $product;

?>

<div class="container main-page">
  <div class="row">
    <div class="col-xs-12">
      <?php
		if(get_locale() == 'en_US') {
			$id_page = '103';
		}else{
			$id_page = '105';
		}

		$childpage = array(
			'post_type' => 'page',
			'orderby' => 'title',
			'numberposts' => '20',
			'order' => 'ASC',
			'post_parent' => $id_page
		);
		
		$child_pages = get_posts($childpage);
		
	  ?>
      <div class="dropdown btn-rooms">
	    <?php if(get_locale() == 'en_US') { ?>
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">VIEW MORE <span class="caret"></span></button>
		<?php }else{ ?>
			<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">XEM THÊM <span class="caret"></span></button>
		<?php } ?>
        <ul class="dropdown-menu">
			 <?php
				if(get_locale() == 'en_US') {
					?>
						<li><a href="<?php echo get_site_url(); ?>/accommodations/single-room/" title="SINGLE ROOM">SINGLE ROOM</a></li>
						<li><a href="<?php echo get_site_url(); ?>/accommodations/double-room/" title="DOUBLE ROOM">DOUBLE ROOM</a></li>
					<?php
				}else{
					?>
						<li><a href="<?php echo get_site_url(); ?>/vi/phong/phong-don/" title="PHÒNG ĐƠN">PHÒNG ĐƠN</a></li>
						<li><a href="<?php echo get_site_url(); ?>/vi/phong/phong-doi/" title="PHÒNG ĐÔI">PHÒNG ĐÔI</a></li>
					<?php
				}
			?>
        </ul>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="content">
        <?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					
						the_content();
					
				endwhile;
			endif;
		?>
      </div>
    </div>
  </div>
  <!--<div class="row">
    <div class="title-sm">
      <?php

if(get_locale() == 'en_US') {
	echo 'Gallery';
}else{
	echo 'Hình ảnh';
}

?>
    </div>
    <div class="gal">
      <?php $galleryArray = get_post_gallery_ids($post->
  ID);  foreach ($galleryArray as $id) { ?> <a href="<?php echo wp_get_attachment_url( $id ); ?>" class="fancybox" rel="product_group"><img src="<?php echo wp_get_attachment_url( $id ); ?>" alt="<?php the_title(); ?>" /></a>
  <?php } ?>
</div>
</div>
-->
</div>
<?php 

get_footer();

?>
