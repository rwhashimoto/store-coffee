<?php get_header(); ?>

<section id="location" class="page-location">
	<div class="l-main-section-visual location">
		<h1 class="l-main-title">LOCATION</h1>
	</div>

	<div class="breadcrumb-area">
		<?php
		if (function_exists('bcn_display')) {
			bcn_display();
		}
		?>
	</div>

	<div class="content">
		<div class="lead-sentence"><?php the_content(); ?></div>
		<div class="content-flex">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3242.3141167384097!2d139.70497506554915!3d35.6446317802028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b40ba660b1b%3A0x8858088b6942f55f!2z44CSMTUwLTAwMjIg5p2x5Lqs6YO95riL6LC35Yy65oG15q-U5a-_5Y2X!5e0!3m2!1sja!2sjp!4v1631173724943!5m2!1sja!2sjp" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
			</div>
		</div>
	</div>
</section><!-- /.l-main-location -->

<?php get_footer(); ?>