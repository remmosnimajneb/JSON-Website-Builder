<?php
/********************************
* Project: JSON Website Builder
* For: The Berman Consulting Group - BermanGroup.com
* By: Benjamin Sommer - smmr.dev (@remmosnimajneb)
* Theme Design: Hypothesis by Pixelarity
* Code Version: 1.5
***************************************************************************************/

	/**
	* Home Page Header
	*/

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $Pages[$Page]["PageName"]; ?> | <?php echo $Config["SiteName"]; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $Config['SiteURL']; ?>/assets/css/main.css?version=7" />
	</head>
	<div id="wrapper">
		<!-- Header -->
			<header id="header">
				<!-- Logo -->
					<div class="logo">
						<a href="/"><strong><?php echo $Config["SiteName"]; ?></strong></a>
					</div>
				<?php /* Require Menu */ require_once(ABSPATH . '/Views/Menu/Menu.php'); ?>
			</header>
			<section id="one" class="main alt">
				<header class="accent1">
					<h1 style="font-weight: 500;"><?php echo $Pages[$Page]["PageName"]; ?></h1>
					<p></p>
				</header>
			</section>