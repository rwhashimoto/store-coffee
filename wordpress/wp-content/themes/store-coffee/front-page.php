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
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
				</dl>
			</div><!-- .content.left -->
			<div class="content">
				<h3 class="l-main-heading">FOOD</h3>
				<dl class="menu-list">
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
				</dl>
				<h3 class="l-main-heading">OTHER</h3>
				<dl class="menu-list">
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
					<dt class="product">XXXXXXXX</dt>
					<dd class="price">&yen;500</dd>
				</dl>
			</div><!-- .content.right -->
		</div><!-- .content-wrapper -->
	</section><!-- .l-main-menu-->

	<section id="about" class="l-main-about">
		<div class="l-main-section-visual about">
			<h2 class="l-main-title">ABOUT</h2>
		</div>
		<div class="content-wrapper">
			<?php
			$page_id = 34;
			$alternative_post = get_post($page_id);
			?>
			<h3 class="l-main-heading"><?= get_the_title($page_id); ?></h3>
			<div class="content">
				<?php
				echo $content->post_content;
				echo apply_filters('the_content', $alternative_post->post_content);
				?>
			</div>
			<a href="<?php echo home_url('/about/'); ?>" target="_blank" class="btn-more">Read More</a>
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
					<img src="<?= get_template_directory_uri(); ?>/assets/images/location_001.jpg" alt="location_001">
				</figure>
				<div class="info">
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
							<dt><?= get_the_date(); ?></dt>
							<dd><?= get_the_title(); ?></dd>
						</dl>
				<?php endwhile;
				endif; ?>
			</div>
			<a href="<?php echo home_url('/news/'); ?>" target="_blank" class="btn-more">Read More</a>
		</div>
	</section><!-- /.l-main-location -->
</main>

<?php get_footer(); ?>