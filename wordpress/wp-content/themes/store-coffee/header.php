<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>COFFEE</title>
		<meta name="description" content="Codestep 中級編：ストアサイト（カフェ）／Wordpress">
		<link rel="icon" href="/favicon.ico">
		<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/css/common.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <?php wp_head(); ?>
	</head>
	<body>
		<header class="l-header">
			<nav>
				<ul class="l-header-nav">
					<li><a class="nav-item" href="#menu">MENU</a></li>
					<li><a class="nav-item" href="#about">ABOUT</a></li>
					<li><a class="nav-item" href="#location">LOCATION</a></li>
				</ul>
			</nav>
			<h1 class="l-header-logo"><img src="<?= get_template_directory_uri(); ?>/assets/images/common/logo_001.svg" alt="COFFEE"></h1>
		</header>