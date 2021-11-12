<?php get_header(); ?>

<main class="l-main">
	<section class="l-main-kv">
		<h1 class="logo"><img src="<?= get_template_directory_uri(); ?>/assets/images/common/logo_001.svg" alt="COFFEE"></h1>
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
				</dl>
			</div><!-- .content.left -->
			<div class="content">
				<h3 class="l-main-heading">FOOD</h3>
				<dl class="menu-list">
					<?php
					$args = array(
						'post_type' => 'menu',
						'posts_per_page' => 10,
					);
					$menu_query = new WP_Query($args);
					if ($menu_query->have_posts()) :
						while ($menu_query->have_posts()) :
							$menu_query->the_post();
							$thumbnail = get_field('thumbnail');
							$menu_price = get_field('price');
							$cat = get_field('menu-category');
					?>
							<?php if ($cat == 'food') : ?>
								<dt class="product"><?= get_the_title(); ?></dt>
								<dd class="price">&yen;<?= $menu_price ?></dd>
							<?php endif; ?>
					<?php endwhile;
					endif; ?>
				</dl>
				<h3 class="l-main-heading">OTHER</h3>
				<dl class="menu-list">
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
							<?php if ($cat == 'other') : ?>
								<dt class="product"><?= get_the_title(); ?></dt>
								<dd class="price">&yen;<?= $menu_price ?></dd>
							<?php endif; ?>
					<?php endwhile;
					endif; ?>
				</dl>
			</div><!-- .content.right -->
		</div><!-- .content-wrapper -->
	</section><!-- .l-main-menu-->

	<section id="about" class="l-main-about">
		<div class="l-main-section-visual about">
			<h2 class="l-main-title">ABOUT</h2>
		</div>
		<div class="content-wrapper">
			<h3 class="l-main-heading">COFFEE</h3>
			<div class="content">
				<p class="text">
					テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
				</p>
				<p class="text">
					テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
				</p>
				<p class="text">
					テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
				</p>
				<p class="text">
					テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
				</p>
			</div><!-- /.content -->
			<a href="DUMMY" target="_blank" class="btn-more">Read More</a>
		</div><!-- /.content-wrapper -->
	</section><!-- /.l-man-about -->

	<section id="location" class="l-main-location">
		<div class="l-main-section-visual location">
			<h2 class="l-main-title">LOCATION</h2>
		</div>
		<div class="content">
			<h3 class="l-main-heading">OUR STORE</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.3141167384097!2d139.70497506554915!3d35.6446317802028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b40ba660b1b%3A0x8858088b6942f55f!2z44CSMTUwLTAwMjIg5p2x5Lqs6YO95riL6LC35Yy65oG15q-U5a-_5Y2X!5e0!3m2!1sja!2sjp!4v1631173724943!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
				<?php endwhile;
				endif; ?>
			</div>
			<a href="<?php echo home_url('/news/'); ?>" class="btn-more">Read More</a>
		</div>
	</section><!-- /.l-main-news -->
</main>

<?php get_footer(); ?>