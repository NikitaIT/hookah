
 <!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title><?php echo $pageTitle ?></title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="<?php echo $path ?>path/to/image.jpg">
	<link rel="shortcut icon" href="<?php echo $path ?>img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo $path ?>img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $path ?>img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $path ?>img/favicon/apple-touch-icon-114x114.png">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#1a1a1a">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#1a1a1a">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#1a1a1a">


	<style>
		em{color: beige;}
		p{color: beige;}
		.carousel-hookahs-content img{max-height: 450px;}
/*
		body {
			opacity: 0;
			overflow-x: hidden;
		}
		
		html {
			background-color: #1a1a1a;
		}
*/
		
	</style>


</head>
<body class="ishome">
	<div class="preloader">
		<div class="pulse"></div>
	</div>

	<div id="my-page">
	
<div id="my-header">
			<header class="site-header section-overley" style="background-image:url(img/top-bg.jpg);">
				<ul class="menu-main">
					<li>
						<a href="" class="logo"><img src="img/logo-1.png" alt="Кальянная Орех"></a>
					</li>
					<li><a href="http://localhost/kalik/" class="current">Главная</a></li>
					<li><a href="">Кальяны</a></li>
					<li><a href="">Бар</a></li>
					<li><a href="<?php echo $pageRightLink ?>"><?php echo $pageRightLinkContent ?></a></li>
				</ul>
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-sm-push-8 col-md-5 col-md-push-7">
							<div class="header-composition">
								<h1 class="h1">Бар кальянная.<br><strong>Орех</strong></h1>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores ex necessitatibus, tempora commodi tenetur, praesentium ad culpa repudiandae, placeat sed perferendis assumenda iure ea deleniti rerum natus? Quibusdam, culpa odio!</p>
								<button class="button">О нас</button>
							</div>
						</div>
					</div>
				</div>
				<div class="header-social">
					<nav class="soc">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</nav>
				</div>
				<div class="header-contacts">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<i class="fa fa-location-arrow"></i> г. СПБ, ул. Хххххх, 18
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="phone-h"><i class="fa fa-mobile"></i> +7 (444) 111-11-11</div>
							</div>
							<div class="col-md-4 hidden-sm hidden-xs">
								<i class="fa fa-clock-o"></i> Время работы: ежедневно: 13:00 - 2:00
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
		
	            <!-- END Header -->