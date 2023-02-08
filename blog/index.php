<?php require_once 'system/config.php';

$kisisel		=	$db->prepare("SELECT * FROM kisisel");
$kisisel->execute();
$kisi			=	$kisisel->fetchAll(PDO::FETCH_ASSOC);

$hakkimizda		=	$db->prepare("SELECT * FROM hakkimizda");
$hakkimizda->execute();
$hakkimda		=	$hakkimizda->fetch(PDO::FETCH_ASSOC);

$egitim			=	$db->prepare("SELECT * FROM egitim");
$egitim->execute();
$egitimim		=	$egitim->fetch(PDO::FETCH_ASSOC);

$abc			=	$db->prepare("SELECT * FROM portfoliaphoto");
$abc->execute();
$abcd			=	$abc->fetchAll(PDO::FETCH_ASSOC);

$iletisim		=	$db->prepare("SELECT * FROM iletisim");
$iletisim->execute();
$iletisimim		=	$iletisim->fetch(PDO::FETCH_ASSOC);	

$menu	=	$db->prepare("SELECT * FROM menu");
$menu->execute();
$menum	=	$menu->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en-US">

<head>
	

	<!-- Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="description" content="Personal Portfolio Template" />
	<meta name="keywords" content="resposnive, resume, personal, personal portfolio, cv, myour, portfolio" />
	<meta name="author" content="beshleyua" />

	<!-- Title -->
	<title><?= $iletisimim["iletisimAd"] . " " . $iletisimim["iletisimSoyad"] . " - Blog"; ?></title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Mr+Dafoe&display=swap" rel="stylesheet">

	<!-- Styles -->

	<link rel="stylesheet" href="css/basic.css" />
	<link rel="stylesheet" href="css/layout.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/jarallax.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/swiper.css" />
	<link rel="stylesheet" href="css/fontawesome.css" />

	<!-- Theme Colors
	<link rel="stylesheet" href="css/theme-colors/blue.css" />
	<link rel="stylesheet" href="css/theme-colors/green.css" />
	<link rel="stylesheet" href="css/theme-colors/orange.css" />
	<link rel="stylesheet" href="css/theme-colors/brown.css" />
	<link rel="stylesheet" href="css/theme-colors/purple.css" />
	<link rel="stylesheet" href="css/theme-colors/red.css" />
	<link rel="stylesheet" href="css/theme-colors/beige.css" />
	<link rel="stylesheet" href="css/theme-colors/green_light.css" />
	<link rel="stylesheet" href="css/theme-colors/yellow.css" />
	<link rel="stylesheet" href="css/theme-colors/yellow_light.css" />
	-->

	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="shortcut icon" href="http://localhost/projeler/blog/images/icon3.png">

</head>

<body class="home">

	<!-- Preloader -->
	<div class="preloader">
		<div class="box-1">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner">
						<div class="lines"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="box-2"></div>
	</div>

	<!-- Container -->
	<div class="container">

		<!-- Header -->
		<header class="header">

			<!-- logo -->
			<div class="logo">
				<a href="anasayfa">
					<img class="logo-img" src="images/icon2.png" alt="" />
					<span class="logo-lnk"><?= $iletisimim["iletisimAd"]; ?> <br /><?= $iletisimim["iletisimSoyad"]; ?></span>
				</a>
			</div>

			<!-- menu button -->
			<a href="anasayfa" class="menu-btn"><span></span></a>

			<!-- download cv button -->
			<a href="" class="btn download-cv-btn" download="<?= $menum["cv"]; ?>">
				<span class="animated-button"><span><?= $menum["cvindir"]; ?></span></span>
				<i class="icon fas fa-download"></i>
			</a>

			<!-- header sidebar -->
			<div class="header-sidebar">

				<!-- top menu -->
				<div class="top-menu">
					<div class="top-menu-nav">
						<div class="menu-topmenu-container">
							<ul class="menu">
								<li class="menu-item">
									<a href="#section-started">
										<span class="animated-button"><span><?= $menum["anasayfa"]; ?></span></span>
									</a>

								</li>
								<li class="menu-item">
									<a href="#section-about">
										<span class="animated-button"><span><?= $menum["hakkimda"]; ?></span></span>
									</a>
								</li>
								<li class="menu-item">
									<a href="#section-education">
										<span class="animated-button"><span><?= $menum["egitim"]; ?></span></span>
									</a>
								</li>
								<li class="menu-item">
									<a href="#section-portfolio">
										<span class="animated-button"><span><?= $menum["portfolio"]; ?></span></span>
									</a>
								</li>
								<li class="menu-item">
									<a href="#section-contacts">
										<span class="animated-button"><span><?= $menum["iletisim"]; ?></span></span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>

		</header>

		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Background -->
			<div class="background-bg">
				<div class="background-filter circle">
					<div class="background-img" style="background-image: url(images/resim.jpg);"></div>
				</div>
			</div>

			<!-- Section Started -->
			<div class="section started" id="section-started">
				<div class="centrize full-width">
					<div class="vertical-center">

						<!-- title -->
						<h1 class="h-title">
							Yusuf <br />Balaban
						</h1>

						<!-- content started -->
						<div class="started-content">

							<!-- subtitle -->
							<div class="h-subtitles">
								<div class="h-subtitle typing-subtitle">
								<?php
									$ozel		=	$db->prepare("SELECT * FROM ozellikler");
									$ozel		->	execute();
									$ozellik	=	$ozel->fetchAll(PDO::FETCH_ASSOC);
									foreach ($ozellik as $key) {
								?>
									<p><?= $key["ozellikAdi"];?></p>
								<?php }?>	
									
								</div>
								<span class="typed-subtitle"></span>
							</div>

							<?php foreach ($kisi as $row) {?>
							<!-- text -->
								<div class="h-text">
									<?php echo $row["kisiselYazi"]; ?>
								</div>
							<?php } ?>
				
	

							

						</div>

					</div>
				</div>
			</div>

			<!-- Section About -->
			<div class="section about" id="section-about">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Hakkımda</div>
						<div class="subtitle">Benim Hikayem</div>
					</div>

					<!-- text -->
					<div class="cols">
						<?php
						$hakkimizda			=	$db->prepare("SELECT * FROM hakkimizda");
						$hakkimizda		->	execute();
						$hakkimda			=	$hakkimizda->fetchAll(PDO::FETCH_ASSOC);
						foreach ($hakkimda as $hakkim) { ?>
						<div class="col">
							<div class="single-post-text">
								<p> <?= $hakkim["hakkimdaYazi"]; ?> <br /></p>
							</div>
						</div>
						<?php }?>
					</div>

					<!-- info list -->
					<div class="info-list">
						<ul>

							<li><strong>Ülke</strong> <?= $iletisimim["ulke"]; ?></li>
							<li><strong>Telefon</strong><?= $iletisimim["telefon"]; ?></li>
							<li><strong>E-mail</strong><?= $iletisimim["email"]; ?></li>
						</ul>
					</div>

					<div class="clear"></div>
				</div>
			</div>

			<!-- Section Service -->


			<!-- Section Pricing -->


			<!-- Section Resume -->


			<!-- Section Resume -->
			<div class="section resume" id="section-education">
				<div class="content">

					<!-- title -->
					<div class="titles">
					
						<div class="title">Eğitim</div>
						<div class="subtitle">Öğrenim</div>
					</div>

					<!-- resume items -->
					<div class="content-carousel">
						<div class="owl-carousel" data-slidesview="2" data-slidesview_mobile="1">
						<?php
						$egitim			=	$db->prepare("SELECT * FROM egitim");
						$egitim		->	execute();
						$egitimim			=	$egitim->fetchAll(PDO::FETCH_ASSOC);
						foreach ($egitimim as $egit) { ?>
							<div class="item">
								<div class="resume-item active">
									<div class="date"><?= $egit["tarih"]; ?></div>
									<div class="name" style="margin-top:14px !important;"><?= $egit["egitimBaslik"]; ?> </div>
									<div class="single-post-text">
										<p>
											<?= $egit["egitimYazi"]; ?>
										</p>
									</div>
								</div>
							</div>
							<?php }?>


						
						</div>

						<!-- navigation -->
						<div class="navs">
							<span class="prev fas fa-chevron-left"></span>
							<span class="next fas fa-chevron-right"></span>
						</div>

					</div>

				</div>
			</div>

			<!-- Section Design Skills -->


			<!-- Section Languages Skills -->
			<div class="section works" id="section-portfolio">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">Portfolio</div>
						<div class="subtitle">Projelerim</div>
					</div>
					<!-- portfolio items -->
					<div class="box-items">	
					<?php
						$photo			=	$db->prepare("SELECT * FROM portfoliaphoto");
						$photo			->	execute();
						$photos			=	$photo->fetchAll(PDO::FETCH_ASSOC);
						foreach ($photos as $key) { ?>

						<div class="box-col f-gallery">
							<div class="box-item">
								<div class="image">
									<a href="<?= $key["photoUrl"]; ?>" target="blank" class="has-popup-gallery">
										<img src="images/<?= $key["photoBaglanti"];?>" alt="" />		
									</a>
									<div>
										<a href="<?= $key["photoUrl"]; ?>"></a>	
									</div>
								</div>
							</div>
						</div>
						<?php }?>
					</div>
					<div class="clear"></div>
				</div>
			</div>

			<!-- Section Contacts Info >-->
			<div class="section contacts" id="section-contacts">
				<div class="content">

					<!-- title -->
					<div class="titles">
						<div class="title">İletişim</div>
						<div class="subtitle">Hadi İletişim Kuralım</div>
					</div>

					<!-- contact form -->
					<div class="contact-form">
						<form method="POST" action="system/islem.php">
							<div class="group-val">
								<div class="label">Adınız Soyadınız<strong>*</strong></div>
								<input type="text" name="iletisimFormAd" placeholder="Ahmet Yılmaz" required>
							</div>
							<div class="group-val">
								<div class="label">Mail Adresiniz<strong>*</strong></div>
								<input type="email" name="iletisimFormMail" placeholder="example@domain.com" required/>
							</div>
							<div class="group-val">
								<div class="label">Mesajınız<strong>*</strong></div>
								<textarea name="iletisimFormMesaj" placeholder="" required></textarea>
							</div>
							<div class="group-bts"> 
								<button type="submit" class="btn" name="formGonder">
									<span class="animated-button"><span>Gönder</span></span>
									<i class="icon fas fa-chevron-right"></i>
								</button>
							</div>
						</form>
						<div class="alert-success">
							<p>Mesajınız için Teşekkür Ederim :) </p>
						</div>
					</div>

					<!-- contact info -->
					<div class="contact-info">
						<div class="name"><?= $iletisimim["iletisimAd"] . " " . $iletisimim["iletisimSoyad"]; ?></div>
						<div class="subname">İletişim İçin</div>
						<div class="info-list">
							<ul>
								<li><strong>Yaş : </strong> <?= $iletisimim["yas"]; ?></li>
								<li><strong>Ülke : </strong><?= $iletisimim["ulke"]; ?></li>
								<li><strong>Telefon : </strong><?= $iletisimim["telefon"]; ?></li>
								<li><strong>E-mail : </strong><?= $iletisimim["email"]; ?></li>
							</ul>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer class="footer">
			<div class="socials">
				<a target="_blank" href="https://www.instagram.com/ysfbllbn">
					<i class="icon fab fa-instagram"></i>
				</a>
				<a target="_blank" href="https://twitter.com/ysfbllbn">
					<i class="icon fab fa-twitter"></i>
				</a>
			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/magnific-popup.js"></script>
	<script src="js/typed.js"></script>
	<script src="js/jarallax.js"></script>
	<script src="js/jarallax-video.js"></script>
	<script src="js/jarallax-element.js"></script>
	<script src="js/imagesloaded.pkgd.js"></script>
	<script src="js/isotope.pkgd.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/swiper.js"></script>
	<script src="js/scripts.js"></script>

</body>

</html>