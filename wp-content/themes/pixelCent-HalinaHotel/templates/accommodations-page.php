<?php

/*
Template Name: Accommodations Template
*/

get_header();

global $product;

?>

<div class="container main-page"><div class="row">
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
					
					$thecontent = get_the_content();
					if(!empty($thecontent)){
					
						 the_content(); 
					
					}
				endwhile;
			endif;
		?>
      </div>
    </div>
  </div>
  <div class="row list-room">
    <?php
		global $id;

		$childpage = array(
			'post_type' => 'page',
			'orderby' => 'title',
			'numberposts' => '20',
			'order' => 'ASC',
			'post_parent' => $id
		);
		
		$child_pages = get_posts($childpage);
		
	  ?>
    <?php
	   if (count($child_pages) > 0) {
	   foreach ($child_pages as $child_page) {
	  ?>
    <div class="col-md-6 col-sm-6"> <a href="<?=get_permalink($child_page->ID); ?>" title="<?=$child_page->post_title; ?>">
      <div class="deal-box">
        <div class="border-img"><?php echo get_the_post_thumbnail( $child_page->ID, 'full' ); ?>
          <figcaption>
          <h2>
            <?=$child_page->post_title; ?>
          </h2>
          <span class="view-more">
          <?php if(get_locale() == 'en_US') {
	echo 'Read More';
}else{
	echo 'Xem thêm';
} ?>
          <span>
          </figcaption>
        </div>
        <!--div class="title-deal">
          <?=$child_page->
        post_title; ?>
        </div-->
      </div>
      </a></div>
    <?php }} ?>
  </div>
</div>
<?php 

get_footer();

?>
