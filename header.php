<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="dist/icon/favicon.png" rel="icon" type="img/png">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title><?php echo meta_title() ?></title>
<meta name="description" content="<?php echo meta_description() ?>"/>
<link rel="stylesheet" href="<?php echo homepage_url() ?>dist/css/style.min.css?ver=1.0.1" media="all" type="text/css" />

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

</head>

<body>

<div id="header" class="en-lang">
	<div class="container">

		<div class="header-inner">
			
			<div class="upper-header">

				<div class="navbar-fix">

					<a href="<?php echo homepage_url() ?>" class="logo-link">
						<img src="<?php echo homepage_url() ?>dist/images/logo.png" class="img-responsive">
					</a>

					<div class="language-switcher mobile hidden-md hidden-lg">
						<div class="language-selector">
							<ul class="list-unstyled">
								<li class="text-center"><strong>Language:</strong></li>
								<li>
									<ul id="menu-language-switcher" class="nav navbar-nav">
										<li id="menu-item-99" class="pll-parent-menu-item menu-item menu-item-type-custom menu-item-object-custom current-menu-parent menu-item-has-children menu-item-99 dropdown"><a title="English" href="#" data-toggle="dropdown" class="dropdown-toggle">English <span class="caret"></span></a>
											<ul role="menu" class=" dropdown-menu">
												<li class="lang-item lang-item-2 lang-item-en lang-item-first current-lang menu-item menu-item-type-custom menu-item-object-custom menu-item-99-en"><a title="English" href="<?php echo homepage_url() ?>" hreflang="en-US" lang="en-US"><span style="margin-left:0.3em;">English</span></a></li>
												<li class="lang-item lang-item-8 lang-item-chi menu-item menu-item-type-custom menu-item-object-custom menu-item-99-chi"><a title="Chinese" href="<?php echo homepage_url() ?>chi/" hreflang="zh-CN" lang="zh-CN"><span style="margin-left:0.3em;">中文</span></a></li>
												<li class="lang-item lang-item-12 lang-item-ind menu-item menu-item-type-custom menu-item-object-custom menu-item-99-ind"><a title="Bahasa Indonesia" href="<?php echo homepage_url() ?>ind/" hreflang="id-ID" lang="id-ID"><span style="margin-left:0.3em;">Bahasa Indonesia</span></a></li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="nav-header-wrapper">
						<div class="nav-header">
						
							<?php include('template-part/navigation.php') ?>

						</div>
					</div>
										
				</div>
			
				<div class="language-switcher hidden-xs hidden-sm">
					<div class="language-selector">
						<ul class="list-inline">
							<li class="select-language-label">Select Language: </li>
							<li>
								<ul id="menu-language-switcher-1" class="nav navbar-nav">
									<li id="menu-item-99" class="pll-parent-menu-item menu-item menu-item-type-custom menu-item-object-custom current-menu-parent menu-item-has-children menu-item-99 dropdown"><a title="English" href="#" data-toggle="dropdown" class="dropdown-toggle">English <span class="caret"></span></a>
										<ul role="menu" class=" dropdown-menu">
											<li class="lang-item lang-item-2 lang-item-en lang-item-first current-lang menu-item menu-item-type-custom menu-item-object-custom menu-item-99-en"><a title="English" href="<?php echo homepage_url() ?>" hreflang="en-US" lang="en-US"><span style="margin-left:0.3em;">English</span></a></li>
											<li class="lang-item lang-item-8 lang-item-chi menu-item menu-item-type-custom menu-item-object-custom menu-item-99-chi"><a title="Chinese" href="<?php echo homepage_url() ?>chi/" hreflang="zh-CN" lang="zh-CN"><span style="margin-left:0.3em;">中文</span></a></li>
											<li class="lang-item lang-item-12 lang-item-ind menu-item menu-item-type-custom menu-item-object-custom menu-item-99-ind"><a title="Bahasa Indonesia" href="<?php echo homepage_url() ?>ind/" hreflang="id-ID" lang="id-ID"><span style="margin-left:0.3em;">Bahasa Indonesia</span></a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

			</div>

			<div class="banner-wrapper" style="">
				<img src="<?php echo homepage_url() ?>dist/images/bottom_flower_vines.png" class="flower-vines">
				
				<img src="<?php echo homepage_url() ?>dist/images/banner-1.jpg" class="img-responsive img-full desktop-banner hidden-sm hidden-xs">
				<img src="<?php echo homepage_url() ?>dist/images/banner-1-mobile.jpg" class="img-responsive img-full mobile-banner hidden-md hidden-lg">
			</div>
			
		</div>

	</div>

</div>