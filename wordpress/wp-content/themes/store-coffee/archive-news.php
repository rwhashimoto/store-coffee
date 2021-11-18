<?php get_header(); ?>

<section id="news" class="l-main-news archive-news">
	<div class="l-main-section-visual news">
		<h1 class="l-main-title">NEWS</h1>
	</div>

	<div class="breadcrumb-area">
		<?php
		if (function_exists('bcn_display')) {
			bcn_display();
		}
		?>
	</div>

	<div class="content">
		<div class="list-items">
			<?php
			$args = array(
				'post_type' => 'news',
				'posts_per_page' => -1,
			);
			$news_query = new WP_Query($args);
			if ($news_query->have_posts()) :
				while ($news_query->have_posts()) :
					$news_query->the_post();
			?>
				<a class="list-item" href="<?php the_permalink(); ?>">
					<dl>
							<dt><?= get_the_date(); ?></dt>
							<dd><?= get_the_title(); ?></dd>
					</dl>
				</a>
			<?php endwhile;
			endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>