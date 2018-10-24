<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<link href="dist/icon/favicon.png" rel="icon" type="img/png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>网站地图 | GynaeMD Women's & Rejuvenation Clinic</title>
<meta name="description" content=""/>

<link rel="canonical" href="<?php echo lang_homepage_url('chi') ?>sitemap-page.html" />

<link rel="alternate" href="<?php echo lang_homepage_url() ?>sitemap-page.html" hreflang="x-default">
<link rel="alternate" href="<?php echo lang_homepage_url() ?>sitemap-page.html" hreflang="en">
<link rel="alternate" href="<?php echo lang_homepage_url('chi') ?>sitemap-page.html" hreflang="zh">
<link rel="alternate" href="<?php echo lang_homepage_url('ind') ?>sitemap-page.html" hreflang="id">

<?php include('template-part/styles.php') ?>

<style type="text/css">
	@font-face {
		font-family: 'Futura';
		src: url('<?php echo homepage_url() ?>dist/fonts/Futura/FuturaBT-Light.eot');
		src: url('<?php echo homepage_url() ?>dist/fonts/Futura/FuturaBT-Light.eot?#iefix') format('embedded-opentype'),
			url('<?php echo homepage_url() ?>dist/fonts/Futura/FuturaBT-Light.woff2') format('woff2'),
			url('<?php echo homepage_url() ?>dist/fonts/Futura/FuturaBT-Light.woff') format('woff'),
			url('<?php echo homepage_url() ?>dist/fonts/Futura/FuturaBT-Light.ttf') format('truetype'),
			url('<?php echo homepage_url() ?>dist/fonts/Futura/FuturaBT-Light.svg#FuturaBT-Light') format('svg');
		font-weight: 300;
		font-style: normal;
	}
</style>

<!-- Global site tag (gtag.js) - Google Ads: 965951313 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-965951313"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  
  gtag('config', 'AW-965951313');
  gtag('config', 'AW-975721180');
  gtag('config', 'AW-954990089');
</script>

</head>

<body>

<!-- HEADER CONTAINER -->
<div id="header" class="chi-lang">

	<div class="header-inner">

		<div class="top-language-switcher">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<?php include('template-part/language-switcher.php') ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">

			<div class="upper-header">
				<div class="navbar-fix">

					<a href="<?php echo homepage_url() ?>" class="logo-link">
						<img src="<?php echo homepage_url() ?>dist/images/logo.png" class="img-responsive">
					</a>

					<div class="clearfix"></div>

					<div class="nav-header-wrapper">
						<div class="nav-header">
						
							<?php include('template-part/navigation.php') ?>

						</div>
					</div>

				</div>

			</div>

		</div>

		<div class="container">
			<div class="banner-wrapper" style="">
				<img src="<?php echo homepage_url() ?>dist/images/bottom_flower_vines.png" class="flower-vines">
				
				<img src="<?php echo homepage_url() ?>dist/images/banner-1-cn.jpg" class="img-responsive img-full desktop-banner hidden-sm hidden-xs">
				<img src="<?php echo homepage_url() ?>dist/images/banner-1-cn-mobile.jpg" class="img-responsive img-full mobile-banner hidden-md hidden-lg">
			</div>
		</div>
		
	</div>

</div>
<!-- END HEADER CONTAINER -->


<!-- PAGE CONTENT CONTAINER -->
<div id="page-content-wrapper" class="chi-lang">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-md-push-4">

				<!-- page-group-wrapper -->
				<div class="page-group-wrapper">
					<div class="page-group">
						<div class="page-group-caption">
							<strong>Sitemap</strong>
						</div>
					</div>
				</div>
				<!-- end .page-group-wrapper -->

				<!-- page-title -->
				<h1 class="page-title">网站地图</h1>
				<!-- end .page-title -->
				
				<!-- .page-content -->
				<div class="page-content">
					<p>&nbsp;</p>
					<ul>
						<li><a href="<?php echo homepage_url() ?>">首页</a></li>
						<li>关于我们
							<ul>
								<li><a href="<?php echo homepage_url() ?>abt_us_doctor_writeup.html">我们的诊所</a></li>
								<li><a href="<?php echo homepage_url() ?>abt_us_doctor_awards.html">奖项, 资历与出版文献</a></li>
								<li><a href="<?php echo homepage_url() ?>abt_us_clinic.html">我们的诊所</a></li>
								<li><a href="<?php echo homepage_url() ?>abt_us_logo.html">我们的标志和理念</a></li>
							</ul>
						</li>
						<li>服务范围
							<ul>
								<li><a href="<?php echo homepage_url() ?>services.html">服务列表</a></li>
							</ul>
						</li>
						<li>联系我们
							<ul>
								<li><a href="<?php echo homepage_url() ?>contact_us.html">預約表格</a></li>
								<li><a href="<?php echo homepage_url() ?>enquiry-form.html">查詢表格</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- end .page-content -->

			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-md-pull-8">
				
				<div class="sidebars">

					<?php include 'template-part/call-button-sidebar.php' ?>

					<?php include 'template-part/contact-us-form-chi-sidebar.php' ?>

					<?php include 'template-part/contact-info-chi-sidebar.php' ?>

				</div>

			</div>

		</div>
	</div>
<!-- END PAGE CONTENT CONTAINER -->


<?php include 'footer.php' ?>