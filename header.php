<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Goélands De Plouézec</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="/wp-content/themes/Goeland/image/logo.png" rel="icon" type="image/png" sizes="16x16" >
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/Goeland/assets/css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
</head>
<body>
	<!-- Haut de page -->
	<nav class="header">
			<img  class="logo" src="/wp-content/themes/Goeland/image/logo.png">
		<?php 
			wp_nav_menu(
				array(
					'menu' => 'primary',
					'cotainer' => '',
					'theme_location' => 'primary',
					'items_wrap' => '<ul id="" class="nav-links">%3$s<li></li></ul>'
				)
			);

		?>
	</nav>
	<script type="text/javascript">
		const navSlide = () => {
			const burger = document.querySelector('.burger');
			const nav = document.querySelector('.nav-links');
			const navLinks = document.querySelectorAll('.nav-links li')
			
			burger.addEventListener('click',()=>{

				nav.classList.toggle('nav-active');

			navLinks.forEach((link, index) => {
				if(link.style.animation) {
					link.style.animation = '';
				} else {
					link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 +0.5}s`;
				}
			});
		});
	}
		navSlide();
	</script>

<script src="/wp-content/themes/Goeland/assets/js/main.js"></script>