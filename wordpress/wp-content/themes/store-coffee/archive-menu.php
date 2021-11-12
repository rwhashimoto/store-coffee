<?php get_header(); ?>

<section id="menu" class="archive-menu">
	<div class="l-main-section-visual menu">
		<h1 class="l-main-title">menu</h1>
	</div>

	<div class="content">
		<h2 class="l-main-heading">COFFEE</h2>
		<ul class="menu-items">
			<?php
			$args = array(
				'post_type' => 'menu',
				'posts_per_page' => -1,
				'category_name' => 'coffee'
			);
			$menu_query = new WP_Query($args);
			if ($menu_query->have_posts()) :
				while ($menu_query->have_posts()) :
					$menu_query->the_post();
					$thumbnail = get_field('thumbnail');
					$menu_price = get_field('price');
			?>
					<li class="menu-item">
						<figure class="thumbnail"><img src="<?= $thumbnail ?>" alt=""></figure>
						<p class="title"><?= get_the_title(); ?></p>
						<p class="price">&yen;<?= $menu_price ?></p>
					</li>
			<?php endwhile;
			endif;
			wp_reset_postdata(); ?>
		</ul>

		<h2 class="l-main-heading">food</h2>
		<ul class="menu-items">
			<?php
			$args = array(
				'post_type' => 'menu',
				'posts_per_page' => -1,
				'category_name' => 'food'
			);
			$menu_query = new WP_Query($args);
			if ($menu_query->have_posts()) :
				while ($menu_query->have_posts()) :
					$menu_query->the_post();
					$thumbnail = get_field('thumbnail');
					$menu_price = get_field('price');
			?>
					<li class="menu-item">
						<figure class="thumbnail"><img src="<?= $thumbnail ?>" alt=""></figure>
						<p class="title"><?= get_the_title(); ?></p>
						<p class="price">&yen;<?= $menu_price ?></p>
					</li>
			<?php endwhile;
			endif;
			wp_reset_postdata(); ?>
		</ul>

		<h2 class="l-main-heading">other</h2>
		<ul class="menu-items">
			<?php
			$args = array(
				'post_type' => 'menu',
				'posts_per_page' => -1,
				'category_name' => 'other'
			);
			$menu_query = new WP_Query($args);
			if ($menu_query->have_posts()) :
				while ($menu_query->have_posts()) :
					$menu_query->the_post();
					$thumbnail = get_field('thumbnail');
					$menu_price = get_field('price');
			?>
					<li class="menu-item">
						<figure class="thumbnail"><img src="<?= $thumbnail ?>" alt=""></figure>
						<p class="title"><?= get_the_title(); ?></p>
						<p class="price">&yen;<?= $menu_price ?></p>
					</li>
			<?php endwhile;
			endif;
			wp_reset_postdata(); ?>
		</ul>
	</div><!-- .content -->
</section>

<?php get_footer(); ?>