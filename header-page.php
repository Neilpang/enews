<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php include('inc/seo.php'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
<noscript><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/no-js.css"></noscript>
<!--[if lt IE 9]>
		<script src="<?php bloginfo('template_directory'); ?>/js/html5.js"></script>
	<![endif]-->
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.8.3.min.js"></script>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/jquery.merge.js'></script>


<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/inc/fancybox/jquery.fancybox.css" />
<script src="<?php bloginfo('template_directory'); ?>/inc/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
$(function() {

jQuery("a:has(img)").attr({rel: "fancybox"});

jQuery("a[rel=fancybox]").fancybox();

});
$(function() {

    $('.entry-content img').each(function(i){

        if (! this.parentNode.href) {

            $(this).wrap("<a href='"+this.src+"'></a>");
        }
    });
});
</script>
<?php echo get_option('headcode')?>
<style>
<?php echo get_option('csscode')?>
.single .content p{text-indent:2em; font-size:<?php get_option('single_fontsize')?>px;}
</style>
<?php wp_head(); ?>
</head><body>
<div id="top-navigation">
  <div class="container">
    <ul class="nav-menu pull-left">
      <?php 
	  if(has_nav_menu('nav-menu')){
	  	wp_nav_menu(
		   array(
		    'theme_location'  => 'top-menu',
		    'container' => '',
			'menu_class' => 'nav-menu pull-left',
		   )
	  	);
	  }else{
	  		echo "<ul class='nav-menu pull-left'><li><a href='".get_bloginfo('url')."/wp-admin/nav-menus.php'>还没有设置导航菜单，请到后台 外观->菜单 设置一个导航菜单</a></li></ul>";
	  }
	 ?>
    </ul>
    <form name="form-search" method="post" action="<?php bloginfo('home'); ?>" class="form-search pull-right">
      <input name="s" id="s" type="text"  onblur="if(this.value=='') this.value='试试手气...';" onfocus="if(this.value=='试试手气...') this.value='';" class="input-icon input-icon-search" />
    </form>
    <ul class="social pull-right">
    <?php $qq_close = get_option('qq_close'); if ($qq_close == 'open') {?><li><a href="<?php echo get_option('socialqq') ?>" rel="nofollow" data-placement="bottom" data-original-title="点击跟我联系吧"><img src="<?php bloginfo('template_directory'); ?>/images/qqmini.png" alt="腾讯QQ"></a></li><?php } ?>
      <?php $sina_close = get_option('sina_close'); if ($sina_close == 'open') {?><li><a href="<?php echo get_option('socialsina') ?>" rel="nofollow" data-placement="bottom" data-original-title="关注"<?php bloginfo('name'); ?>"的新浪微博"><img src="<?php bloginfo('template_directory'); ?>/images/sinamini.png" alt="新浪微博"></a></li><?php } ?>
      <?php $tqq_close = get_option('tqq_close'); if ($tqq_close == 'open') {?><li><a href="<?php echo get_option('socialtqq') ?>" rel="nofollow" data-placement="bottom" data-original-title="关注"<?php bloginfo('name'); ?>"的腾讯微博"><img src="<?php bloginfo('template_directory'); ?>/images/tqq.png" alt="腾讯微博"></a></li><?php } ?>
      <?php $wechat_close = get_option('wechat_close'); if ($wechat_close == 'open') {?><li><a href="javascript:;" id="example_bottom" rel="popover nofollow" data-content="&lt;img src='<?php echo get_option('wechat_qr') ?>'&gt;" data-original-title="关注<?php echo get_option('wechat') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/weixinmini.png" alt="微信二维码"></a></li><?php } ?>
    </ul>
  </div>
</div>
<div class="container">
<header id="header" class="clearfix">
  <div class="logo pull-left"> <a href="<?php bloginfo('url'); ?>"><img alt="logo" src="<?php echo get_option('logo')?>" /></a> </div>
  <?php
	 	 $ad1_close = get_option('ad1_close');
	 	 if ($ad1_close == 'open') {
	?>
  <div class="ads pull-right"> <?php echo get_option('ad1');?> </div>
  <?php } ?>
</header>
<nav id="main-navigation" class="clearfix navbar-wrapper">
  <?php 
	  if(has_nav_menu('nav-menu')){
	  	wp_nav_menu(
		   array(
		    'theme_location'  => 'nav-menu',
		    'container' => '',
			'menu_class' => 'nav',
		   )
	  	);
	  }else{
	  		echo "<ul class='nav'><li><a href='".get_bloginfo('url')."/wp-admin/nav-menus.php'>还没有设置导航菜单，请到后台 外观->菜单 设置一个导航菜单</a></li></ul>";
	  }
	 ?>
</nav>
<div class="margin-bottom20"></div>
