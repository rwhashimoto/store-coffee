<?php get_header(); ?>

<section id="news" class="l-main-news archive-news">
	<div class="l-main-section-visual news">
		<h2 class="l-main-title">NEWS</h2>
	</div>
	<div class="content">
		<div class="news-list">
			<?php
				$args = array(
				'post_type' => 'news',
				'posts_per_page' => 10,
				);
				$news_query = new WP_Query($args);
				if($news_query->have_posts()):
				while($news_query->have_posts()):
				$news_query->the_post();
			?>
			<dl>
				<dt><?= get_the_date(); ?></dt>
				<dd><a href="<?php the_permalink(); ?>"><?= get_the_title(); ?></a></dd>
			</dl>
			<?php endwhile; endif; ?>
        </div>
	</div>
</section><!-- /.l-main-news -->

<?php get_footer(); ?>