<?php get_header(); ?>

<section id="news" class="l-main-news single-news">
	<div class="l-main-section-visual news">
		<h1 class="l-main-title">NEWS</h2>
	</div>
	<div class="content">
        <h2><?= get_the_title(); ?></h2>
        <p><?= get_the_date(); ?></p>
        <div class="entry-field"><?php the_content(); ?></div>
        <a href="<?php echo home_url('/news/'); ?>" class="btn-more">BACK</a>
	</div>
</section><!-- /.l-main-news -->

<?php get_footer(); ?>