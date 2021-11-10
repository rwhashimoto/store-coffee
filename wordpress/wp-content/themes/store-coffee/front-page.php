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
				<a href="<?php echo home_url('/about/'); ?>" target="_blank" class="btn-more">Read More</a>
			</div><!-- /.content-wrapper -->
		</section><!-- /.l-man-about -->

		<?php
			$page_id = 17;
			$alternative_post = get_post( $page_id );
			echo apply_filters('the_content', $alternative_post->post_content);
		?><!-- /.l-main-location -->

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
						if($news_query->have_posts()):
						while($news_query->have_posts()):
						$news_query->the_post();
					?>
					<dl>
						<dt><?= get_the_date(); ?></dt>
						<dd><?= get_the_title(); ?></dd>
					</dl>
					<?php endwhile; endif; ?>
				</div>
				<a href="<?php echo home_url('/news/'); ?>" target="_blank" class="btn-more">Read More</a>
			</div>
		</section><!-- /.l-main-location -->
	</main>

<?php get_footer(); ?>