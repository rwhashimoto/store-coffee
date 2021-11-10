<?php get_header(); ?>

<?php the_content(); ?>
<!-- .l-main-about -->

<?php
$page_id = 17;
$alternative_post = get_post( $page_id );
echo apply_filters('the_content', $alternative_post->post_content);
?><!-- .l-main-location -->

<?php get_footer(); ?>