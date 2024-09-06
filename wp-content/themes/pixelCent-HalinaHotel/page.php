<?php

/*
* The template for displaying all pages.
*/

get_header();

?>

<div class="container main-page">
  <div class="row">
    <div class="col-md-12">
      <div class="content page-<?php echo get_the_ID(); ?>">
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
</div>
<?php 

get_footer(); 

?>
