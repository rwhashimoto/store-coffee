<?php get_header(); ?>

<main class="l-main">
	<section class="l-main-kv">
		<h1 class="logo"><img src="<?= get_template_directory_uri(); ?>/assets/images/common/logo_001.svg" alt="COFFEE" width="460" height="100"></h1>
	</section>
	<section id="menu" class="l-main-menu">
		<div class="l-main-section-visual menu">
			<h2 class="l-main-title">MENU</h2>
		</div>
		<div class="content-wrapper">
			<div class="content">
				<h3 class="l-main-heading">COFFEE</h3>
				<dl class="menu-list">
					<?php
					$args = array(
						'post_type' => 'menu',
						'posts_per_page' => 10,
						'category_name' => 'coffee'
					);
					$menu_query = new WP_Query($args);
					if ($menu_query->have_posts()) :
						while ($menu_query->have_posts()) :
							$menu_query->the_post();
							$menu_price = get_field('price');
					?>
								<dt class="product"><?= get_the_title(); ?></dt>
								<dd class="price">&yen;<?= $menu_price ?></dd>
					<?php endwhile;
					endif; ?>
				</dl>
				<!-- <dl class="menu-list"> プラグインで指定していた時
					<?php
					$args = array(
						'post_type' => 'menu',
						'posts_per_page' => 10,
					);
					$menu_query = new WP_Query($args);
					if ($menu_query->have_posts()) :
						while ($menu_query->have_posts()) :
							$menu_query->the_post();
							$menu_price = get_field('price');
							$cat = get_field('menu-category');
					?>
							<?php if ($cat == 'coffee') : ?>
								<dt class="product"><?= get_the_title(); ?></dt>
								<dd class="price">&yen;<?= $menu_price ?></dd>
							<?php endif; ?>
					<?php endwhile;
					endif; ?>
				</dl> -->
			</div><!-- .content.left -->
			<div class="content">
				<h3 class="l-main-heading">FOOD</h3>
				<dl class="menu-list">
					<?php
							$args = array(
								'post_type' => 'menu',
								'posts_per_page' => 3,
								'category_name' => 'food'
							);
							$menu_query = new WP_Query($args);
							if ($menu_query->have_posts()) :
								while ($menu_query->have_posts()) :
									$menu_query->the_post();
									$menu_price = get_field('price');
							?>
								<dt class="product"><?= get_the_title(); ?></dt>
								<dd class="price">&yen;<?= $menu_price ?></dd>
					<?php endwhile;
							endif; ?>
				</dl><!-- .menu-list -->
				<h3 class="l-main-heading">OTHER</h3>
				<dl class="menu-list">
					<?php
					$args = array(
						'post_type' => 'menu',
						'posts_per_page' => 3,
						'category_name' => 'other'
					);
					$menu_query = new WP_Query($args);
					if ($menu_query->have_posts()) :
						while ($menu_query->have_posts()) :
							$menu_query->the_post();
							$menu_price = get_field('price');
					?>
								<dt class="product"><?= get_the_title(); ?></dt>
								<dd class="price">&yen;<?= $menu_price ?></dd>
					<?php endwhile;
					endif; ?>
				</dl>
			</div><!-- .content.right -->
		</div><!-- .content-wrapper -->
		<a href="<?= home_url('/menu/'); ?>" target="_blank" class="btn-more">Read More</a>
	</section><!-- .l-main-menu-->

	<section id="about" class="l-main-about">
		<div class="l-main-section-visual about">
			<h2 class="l-main-title">ABOUT</h2>
		</div>
		<div class="content-wrapper">
			<?php
			$page_data = get_page_by_path('/about/coffee/');
			$page = get_post($page_data);
			$content = $page->post_content;
			?>
			<h3 class="l-main-heading"><?= get_the_title($page); ?></h3>
			<div class="content"><?= $content; ?></div>
			<a href="<?= home_url('/about/'); ?>" target="_blank" class="btn-more">Read More</a>
		</div><!-- /.content-wrapper -->
	</section><!-- /.l-man-about -->

	<section id="location" class="l-main-location">
		<div class="l-main-section-visual location">
			<h2 class="l-main-title">LOCATION</h2>
		</div>
		<div class="content">
			<h3 class="l-main-heading">OUR STORE</h3>
			<div class="content-flex">
				<figure class="info-img">
					<img src="<?= get_template_directory_uri(); ?>/assets/images/location_001.jpg" alt="location_001" width="484" height="407">
				</figure>
				<div class="info-text">
					<address>
						<p>
							X-XX-XX, Ebisuminami, Shibuya-ku, Tokyo 150-0022<br>
							東京都渋谷区恵比寿南X-XX-XX
						</p>
						<p>
							Open 7 days a Week<br>
							9:00am to 10:00pm
						</p>
						<a href="tel:XX-XXXX-XXXX">Tel : XX-XXXX-XXXX</a>
					</address>
					<a href="https://www.google.com/maps?ll=35.644632,139.707164&z=16&t=m&hl=ja&gl=JP&mapclient=embed&q=%E6%81%B5%E6%AF%94%E5%AF%BF%E5%8D%97+%E3%80%92150-0022+%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%B8%8B%E8%B0%B7%E5%8C%BA" target="_blank" class="btn-more">Google Map</a>
				</div>
			</div>
		</div>
	</section><!-- /.l-main-location -->

	<section id="news" class="l-main-news">
		<div class="l-main-section-visual news">
			<h2 class="l-main-title">NEWS</h2>
		</div>
		<div class="content">
			<div class="news-list">
				<?php
					$args = array(
						'post_type' => 'news',
						'posts_per_page' => 3,
					);
					$news_query = new WP_Query($args);
					if ($news_query->have_posts()) :
						while ($news_query->have_posts()) :
							$news_query->the_post();
				?>
					<dl>
						<a href="<?php the_permalink(); ?>">
							<dt><?= get_the_date(); ?></dt>
							<dd><?= get_the_title(); ?></dd>
						</a>
					</dl>
				<?php endwhile; endif; ?>
			</div>
			<a href="<?= home_url('/news/'); ?>" class="btn-more">Read More</a>
		</div>
	</section><!-- /.l-main-location -->
</main>

<?php get_footer(); ?>