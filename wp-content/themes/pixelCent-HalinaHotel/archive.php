<?php

/**
* Archive Page Template
*/

get_header();

global $post;
$args = array( 'posts_per_page' => 10, 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ) );
$myposts = get_posts( $args );

?>



<?php

get_footer(); 

?>
