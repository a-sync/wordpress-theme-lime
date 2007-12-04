<?php
load_theme_textdomain('lime');//call in air support!

$menu = '1';//választhatóvá kéne tenni :P (1=felül;2=baloldalt/bugos/)
$secreticontitle = '';//titokgomb title szövege (Belépés/Regisztráció)
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
	<link rel="shortcut icon" type="image/png" href="wp-content/themes/lime/media/icon.png">
	<link rel="icon" type="image/png" href="wp-content/themes/lime/media/icon.png">
	<link rel="stylesheet" type="text/css" href="wp-content/themes/lime/style.css" title="Style" media="screen">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php /*echo 'ISO-8859-2';*/bloginfo('charset'); ?>">
	<script src="wp-content/themes/lime/script.js" type="text/javascript"></script>
	<title><?php bloginfo('name'); ?> <?php/* if ( is_single() ) { echo '&raquo; '.__('Archives','lime'); } */?> <?php wp_title(); ?></title>
	<meta name="generator" content="WordPress <?php /*bloginfo('version');//no need for hack attempts because of version leeks */?>">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
  </head>
  <body>
  <table>
   <tr>
    <td class="leak"></td>
    <td class="index">
	<table class="head">
	  <tr class="main_side">
		<td class="tlc"></td>
		<td class="tl"></td>
		<td class="trc"></td>
	  </tr>
	  <tr>
		<td class="ll"></td>
		<td class="head"><img class="theme" src="wp-content/themes/lime/media/banner.png" alt="Release Lime"></td>
		<td class="rl"></td>
	  </tr>
	  <tr class="main_side">
		<td class="blc"></td>
		<td class="bl"><a title="<?php echo $secreticontitle; ?>" href="wp-admin/index.php" onmouseover="select2()" onmouseout="select1()"><img class="theme" src="wp-content/themes/lime/media/select1.png" alt="" name="select"></a></td>
		<td class="brc"></td>
	  </tr>
	</table>
	<?php if($menu != '2'){ include 'menu.php'; } ?>
	<table class="main">
	  <tr class="main_side">
		<?php if($menu == '2'){ print '<td width="34">'; } ?>
		<td class="tlc"></td>
		<td class="tl"></td>
		<td class="trc"></td>
	  </tr>
	  <tr>
		<?php if($menu == '2'){ include 'menu.php'; } ?>
		<td class="ll"></td>
		<td class="main">