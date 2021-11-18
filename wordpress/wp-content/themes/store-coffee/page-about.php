<?php get_header(); ?>

<section id="about" class="l-main-about page-about">
	<div class="l-main-section-visual about">
		<h2 class="l-main-title">ABOUT</h2>
	</div>

	<div class="breadcrumb-area">
		<?php
		if (function_exists('bcn_display')) {
			bcn_display();
		}
		?>
	</div>

	<div class="content-wrapper">
		<?php
		$page_data = get_page_by_path('/about/coffee/');
		$page = get_post($page_data);
		$content = $page->post_content;
		?>
		<h3 class="l-main-heading"><?= get_the_title($page); ?></h3>
		<div class="content"><?= $content; ?></div>
	</div><!-- /.content-wrapper -->

	<div class="content-wrapper">
		<?php
		$page_data = get_page_by_path('/about/food/');
		$page = get_post($page_data);
		$content = $page->post_content;
		?>
		<h3 class="l-main-heading"><?= get_the_title($page); ?></h3>
		<div class="content"><?= $content; ?></div>
	</div><!-- /.content-wrapper -->

	<div class="content-wrapper">
		<?php
		$page_data = get_page_by_path('/about/other/');
		$page = get_post($page_data);
		$content = $page->post_content;
		?>
		<h3 class="l-main-heading"><?= get_the_title($page); ?></h3>
		<div class="content"><?= $content; ?></div>
	</div><!-- /.content-wrapper -->

</section><!-- /.l-man-about -->

<?php get_footer(); ?>