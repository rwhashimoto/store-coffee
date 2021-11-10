<?php get_header(); ?>

<!-- <?php the_content(); ?> -->
<!-- .l-main-about -->

<section id="about" class="l-main-about page-about">
	<div class="l-main-section-visual about">
		<h2 class="l-main-title">ABOUT</h2>
	</div>

	<div class="content-wrapper">
        <?php
			$page_id = 34;//coffee
			$alternative_post = get_post( $page_id );
		?>
		<h3 class="l-main-heading"><?= get_the_title( $page_id ); ?></h3>
        <div class="content">
            <?php
                echo $content -> post_content;
                echo apply_filters('the_content', $alternative_post->post_content);
            ?>
        </div>
	</div><!-- /.content-wrapper -->

    <div class="content-wrapper">
        <?php
			$page_id = 39;//food
			$alternative_post = get_post( $page_id );
		?>
		<h3 class="l-main-heading"><?= get_the_title( $page_id ); ?></h3>
		<?php
			echo $content -> post_content;
			echo apply_filters('the_content', $alternative_post->post_content);
		?>
	</div><!-- /.content-wrapper -->

    <div class="content-wrapper">
        <?php
			$page_id = 41;//other
			$alternative_post = get_post( $page_id );
		?>
		<h3 class="l-main-heading"><?= get_the_title( $page_id ); ?></h3>
		<?php
			echo $content -> post_content;
			echo apply_filters('the_content', $alternative_post->post_content);
		?>
	</div><!-- /.content-wrapper -->
</section><!-- /.l-man-about -->

<?php
$page_id = 17;
$alternative_post = get_post( $page_id );
echo apply_filters('the_content', $alternative_post->post_content);
?><!-- .l-main-location -->

<?php get_footer(); ?>