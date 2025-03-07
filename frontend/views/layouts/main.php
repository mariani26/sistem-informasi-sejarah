<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<style>
	.header.nav-bar {
		background-color: red;
	}

	.header.nav-bar a {
		color: white !important;
	}

	.header.nav-bar .dropdown-menu a {
		color: black !important;
	}
</style>

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Departemen Sejarah</title>

	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Porto - Responsive HTML5 Template">
	<meta name="author" content="okler.net">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= Yii::$app->getHomeUrl(); ?>img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?= Yii::$app->getHomeUrl(); ?>img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CPlayfair+Display:400,700,900&display=swap" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>css/theme.css">
	<link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>css/theme-elements.css">
	<link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>css/theme-blog.css">
	<link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>css/theme-shop.css">

	<!-- Demo CSS -->
	<link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>css/demos/demo-industry-factory.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>css/skins/skin-industry-factory.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?= Yii::$app->getHomeUrl(); ?>css/custom.css">

	<!-- Head Libs -->
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/modernizr/modernizr.min.js"></script>



</head>

<body>

	<div class="body">
		<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
			<div class="header-body header-body-bottom-border border-top-0">
				<div class="header-top">
					<div class="container">
						<div class="header-row">
							<div class="header-column justify-content-start">
								<div class="header-row">
									<ul class="list list-unstyled list-inline mb-0">
										<li class="list-inline-item text-color-dark me-4 mb-0">
											Contact: <a href="tel:+6281363439428" class="text-color-dark text-color-hover-primary text-decoration-none"><strong>081363439428</strong></a>
										</li>

									</ul>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<ul class="header-social-icons social-icons social-icons-clean d-none d-md-block">
										<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li class="social-icons-email"><a href="mailto:sejarah@fis.unp.ac.id" target="_blank" title="Email"><i class="far fa-envelope"></i></a></li>
										<li class="social-icons-instagram"><a href="https://www.instagram.com/dep_sejarahunp?igsh=MXZzN2Z2M2ZsOHM0dg==" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
									</ul>
									<a href="#" class="btn custom-svg-btn-style-1 custom-svg-btn-style-1-solid custom-svg-btn-style-1-small text-color-light ms-4">
										<svg class="custom-svg-btn-background" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 210 70" preserveAspectRatio="none">
											<polygon fill="none" stroke="#D4D4D4" stroke-width="2" stroke-miterlimit="10" points="7,5 185,5 205,34 186,63 7,63 " />
										</svg>
										GET A QUOTE
										<svg class="custom-svg-btn-arrow" version="1.1" viewBox="0 0 15.698 8.706" width="17" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
											<polygon stroke="#FFF" stroke-width="0.4" fill="#FFF" points="11.354,0 10.646,0.706 13.786,3.853 0,3.853 0,4.853 13.786,4.853 10.646,8 11.354,8.706 15.698,4.353 " />
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header nav-bar bg-primary">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="demo-industry-factory.html">
											<img src="<?= Yii::$app->getHomeUrl(); ?>img/demos/industry-factory/backgrounds/Logo_Departemen.png" class="img-fluid" alt="" />

										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links">
										<div class="header-nav-main header-nav-main-text-capitalize header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li><a href="<?= Url::toRoute(['/site/index']) ?>" class="nav-link active">Home</a></li>
													<li class="dropdown">
														<a href="" class="nav-link dropdown-toggle">Profil</a>
														<ul class="dropdown-menu">
															<li><a href="<?= Url::toRoute(['profil/sejarah']) ?>" class="dropdown-item">Sejarah</a></li>
															<li><a href="<?= Url::toRoute(['profil/visi']) ?>" class="dropdown-item">Visi</a></li>
															<li><a href="<?= Url::toRoute(['profil/misi']) ?>" class="dropdown-item">Misi</a></li>
															<li><a href="<?= Url::toRoute(['profil/tujuan']) ?>" class="dropdown-item">Tujuan</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a href="#" class="nav-link dropdown-toggle">Staff </a>
														<ul class="dropdown-menu">
															<li><a href="<?= Url::toRoute(['/site/struktur']) ?>" class="dropdown-item">Struktur Organisasi</a></li>
															<li><a href="<?= Url::toRoute(['/site/dosen']) ?>" class="dropdown-item">Dosen</a></li>
															<li><a href="<?= Url::toRoute(['/site/dosen-praktisi']) ?>" class="dropdown-item">Dosen Praktisi</a></li>
															<li><a href="<?= Url::toRoute(['/site/tendik']) ?>" class="dropdown-item">Tendik</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a href="demo-auto-services-services.html" class="nav-link dropdown-toggle">Akademik</a>
														<ul class="dropdown-menu">
															<li><a href="<?= Url::toRoute(['/site/maba']) ?>" class="dropdown-item">Penerimaan Mahasiswa Baru</a></li>
															<li><a href="<?= Url::toRoute(['/site/kurikulum']) ?>" class="dropdown-item">Kurikulum</a></li>
															<li><a href="<?= Url::toRoute(['/site/lulusan']) ?>" class="dropdown-item">Profil Lulusan</a></li>
															<li><a href="<?= Url::toRoute(['/site/cpl']) ?>" class="dropdown-item">CPL</a></li>
															<li><a href="<?= Url::toRoute(['/site/skripsi']) ?>" class="dropdown-item">Skripsi</a></li>
															<li><a href="<?= Url::toRoute(['/site/kalender']) ?>" class="dropdown-item">Kalender Akademik</a></li>
															<li><a href="<?= Url::toRoute(['/site/mutu']) ?>" class="dropdown-item">Jaminan Mutu</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a href="" class="nav-link dropdown-toggle">Mahasiswa & Alumni</a>
														<ul class="dropdown-menu">
															<li><a href="<?= Url::toRoute(['mahasiswa/mhsorganisasi']) ?>" class="dropdown-item">Struktur Organisasi</a></li>
															<li><a href="<?= Url::toRoute(['mahasiswa/prestasi']) ?>" class="dropdown-item">Prestasi</a></li>
															<li><a href="<?= Url::toRoute(['mahasiswa/beasiswa']) ?>" class="dropdown-item">Beasiswa</a></li>
															<li><a href="<?= Url::toRoute(['mahasiswa/fasilitas']) ?>" class="dropdown-item">Fasilitas</a></li>
															<li><a href="<?= Url::toRoute(['mahasiswa/alumni']) ?>" class="dropdown-item">Alumni</a></li>
														</ul>
													</li>
													<li class="dropdown">
														<a href="" class="nav-link dropdown-toggle">Penelitian & Pengabdian</a>
														<ul class="dropdown-menu">
															<li><a href="<?= Url::toRoute(['penelitian/kelompokriset']) ?>" class="dropdown-item">Kelompok Riset</a></li>
															<li><a href="<?= Url::toRoute(['penelitian/publikasiriset']) ?>" class="dropdown-item">Publikasi Riset</a></li>
															<li><a href="<?= Url::toRoute(['penelitian/publikasipengabdian']) ?>" class="dropdown-item">Publikasi Pengabdian</a></li>
															<li><a href="<?= Url::toRoute(['penelitian/kerjasama']) ?>" class="dropdown-item">Kerjasama</a></li>
														</ul>
													</li>
													<li>
														<a href="<?= Url::toRoute(['/site/download']) ?>" class="nav-link dropdown-toggle">Download </a>

													</li>
													<li class="dropdown">
														<a href="<?= Url::toRoute(['/site/jurnal']) ?>" class="nav-link">Jurnal</a>

													</li>
													<li class="dropdown">
														<a href="" data-gt-lang="id" class="gt-current-wrapper notranslate">Indonesian</a>
														<ul class="dropdown-menu">
															<li class="menu-item menu-item-gtranslate-child"><a href=" " data-gt-lang="en" class="notranslate">English</a></li>
															<li class="menu-item menu-item-gtranslate-child"><a href=" " data-gt-lang="id" class="gt-current-lang notranslate">Indonesian</a></li>
														</ul>
													</li>

												</ul>
											</nav>
										</div>
									</div>
									<!-- <div class="header-nav-features">
										<div class="header-nav-feature header-nav-features-search d-inline-flex">
											<a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch">
												<i class="icons icon-magnifier header-nav-top-icon font-weight-bold text-4 top-2 text-color-hover-primary"></i>
											</a>
											<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
												<form role="search" action="page-search-results.html" method="get">
													<div class="simple-search input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
														<button class="btn" type="submit">
															<i class="icons icon-magnifier header-nav-top-icon font-weight-bold text-color-dark text-4 text-color-hover-primary top-2"></i>
														</button>
													</div>
												</form>
											</div>
										</div>
									</div> -->
									<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	</header>

	<!-- <header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
			<div class="header-body border-top-0 box-shadow-none">
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column">
							<div class="header-row">
								<div class="header-logo">
									<a href="index.html">
										<img alt="Porto" width="82" height="40" src="img/logo-default-slim-dark-small.png">
									</a>
								</div>
							</div>
						</div>
						<div class="header-column justify-content-end">
							<div class="header-row">
								<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
									<div class="header-nav-main header-nav-main-font-lg header-nav-main-font-lg-upper-2 header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
										<nav class="collapse">
											<ul class="nav nav-pills" id="mainNav">
												<li class="dropdown">
													<a data-hash class="nav-link active" href="#home">
														Home
													</a>
													<ul class="dropdown-menu">
														<li><a class="nav-link" href="index-classic.html">Default Home</a></li>
														<li><a class="nav-link" href="index-one-page.html">One Page Website</a></li>
													</ul>
												</li>
												<li>
													<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="#services">Services</a>
												</li>
												<li>
													<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="#projects">Projects</a>
												</li>
												<li>
													<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="#clients">Clients</a>
												</li>
												<li>
													<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="#team">Meet the Team</a>
												</li>
												<li>
													<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="#contact">Contact Us</a>
												</li>
											</ul>
										</nav>
									</div>
									<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
										<i class="fas fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header> -->

	<div class="content">
		<?= $content ?>
	</div>

	<footer id="footer" class="section section-with-shape-divider border-0 custom-bg-lighten-grey-1 pt-5 pb-0 m-0">
		<div class="shape-divider shape-divider-reverse-x" style="height: 120px;">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2000 120" preserveAspectRatio="xMinYMin">
				<polygon fill="#FFF" points="-11,2 693,112 2019,6 2019,135 -11,135 " />
			</svg>
		</div>
		<div class="container pt-lg-5 mt-5">
			<div class="row">
				<div class="col-lg-3 mb-5 mb-lg-0">
					<a href="demo-industry-factory.html">
						<img src="<?= Yii::$app->getHomeUrl(); ?>img/demos/industry-factory/logo-light.png" class="img-fluid mt-5 mb-4" alt="Demo Industry & Factory" />
					</a>
					<p class="mb-0"><strong class="text-color-light">Porto Industrial, Factory, Manufacturing</strong></p>
					<p>Advanced Template LTD.</p>
					<ul class="social-icons social-icons-medium">
						<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
						<li class="social-icons-email"><a href="mailto:sejarah@fis.unp.ac.id" target="_blank" title="Email"><i class="far fa-envelope"></i></a></li>
						<li class="social-icons-instagram"><a href="https://www.instagram.com/dep_sejarahunp?igsh=MXZzN2Z2M2ZsOHM0dg==" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-4 offset-lg-1 mb-5 mb-lg-0">
					<h4 class="text-color-light font-weght-bold positive-ls-2 custom-font-size-2">USEFUL LINKS</h4>
					<div class="row">
						<div class="col-md-6">
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="#">Contact Us</a></li>
								<li class="mb-0"><a href="#">Our Services</a></li>
								<li class="mb-0"><a href="#">Payment Methods</a></li>
								<li class="mb-0"><a href="#">Services Guide</a></li>
								<li class="mb-0"><a href="#">FAQs</a></li>
								<li class="mb-0"><a href="#">Service Support</a></li>
								<li class="mb-0"><a href="#">Privacy</a></li>
								<li class="mb-0"><a href="#">About Porto</a></li>
								<li class="mb-0"><a href="#">Our Guarantees</a></li>
								<li class="mb-0"><a href="#">Terms And Conditions</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="list list-unstyled mb-0">
								<li class="mb-0"><a href="#">Privacy Policy</a></li>
								<li class="mb-0"><a href="#">Return Policy</a></li>
								<li class="mb-0"><a href="#">Intellectual Property Claims</a></li>
								<li class="mb-0"><a href="#">Sitemap</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 offset-lg-1 mb-5 mb-lg-0">
					<h4 class="text-color-light font-weght-bold positive-ls-2 custom-font-size-2">OPENING HOURS</h4>
					<ul class="list list-unstyled list-inline custom-list-style-1 mb-0">
						<li><a href="#">Mon - Fri: 8:30 am to 5:00 pm</a></li>
						<li><a href="#">Saturday: 9:30 am to 1:00 pm</a></li>
						<li><a href="#">Sunday: Closed</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright custom-bg-lighten-grey-1 mt-5 pb-5">
			<div class="container custom-footer-top-light-border pt-4">
				<div class="row">
					<div class="col">
						<p class="text-center text-3 mb-0">Departemen Sejarah © 2024. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	</div>

	<!-- Vendor -->
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/jquery.appear/jquery.appear.min.js"></script>
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/jquery.cookie/jquery.cookie.min.js"></script>
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/jquery.validation/jquery.validate.min.js"></script>
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/lazysizes/lazysizes.min.js"></script>
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/isotope/jquery.isotope.min.js"></script>
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/vide/jquery.vide.min.js"></script>
	<script src="<?= Yii::$app->getHomeUrl(); ?>vendor/vivus/vivus.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="<?= Yii::$app->getHomeUrl(); ?>js/theme.js"></script>

	<!-- Current Page Vendor and Views -->
	<script src="<?= Yii::$app->getHomeUrl(); ?>js/views/view.contact.js"></script>

	<!-- Demo -->
	<script src="<?= Yii::$app->getHomeUrl(); ?>js/demos/demo-industry-factory.js"></script>

	<!-- Theme Custom -->
	<script src="<?= Yii::$app->getHomeUrl(); ?>js/custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="<?= Yii::$app->getHomeUrl(); ?>js/theme.init.js"></script>

</body>

</html>

<?php $this->endPage();
