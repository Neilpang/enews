<?php
	 	 $foot_close = get_option('foot_close');
	 	 if ($foot_close == 'open') {
	?>
<?php include('inc/foot.php'); ?>
<?php } ?>
<div id="footer">
  <div class="container">
    <p class="pull-left">Copyright &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>">
      <?php bloginfo('name'); ?>
      </a> All rights reserved. &nbsp;<?php echo get_option('copy')?>响应时间：<?php timer_stop(1); ?>ms</p>
    <p class="social"> <?php echo get_option('icp')?> <?php echo get_option('tongji')?> <?php theme_Copyright(); ?>  
      </p>
  </div>
</div>
<a href="#" class="scrollup" title="回到顶部!" style="overflow: hidden; display: inline;">回到顶部</a>
<?php echo get_option('footcode')?>
<?php $snow = get_option('snow'); if ($snow == 'open') { ?>
<script src="http://cdn.16898.pw/Enews/snow.js"></script>
<script>
	$(function(){
		$.fn.snow({ 
			minSize: <?php echo get_option('snow_min')?>,		//雪花的最小尺寸
			maxSize: <?php echo get_option('snow_max')?>, 	//雪花的最大尺寸
			newOn: <?php echo get_option('snow_newOn')?>,		//雪花出现的频率 这个数值越小雪花越多
			flakeColor	: "#<?php echo get_option('snow_color')?>"
		});
	});
	</script><?php } ?>
    <?php
	 	 $nav_close = get_option('nav_close');
	 	 if ($nav_close == 'open') {
	?>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/js/stickUp.min.js'></script>
<?php } ?>
<?php
	 	 $sidebar_close = get_option('sidebar_close');
	 	 if ($sidebar_close == 'open') {
	?>
<script type='text/javascript'>
jQuery(document).ready(function(a){var c=<?php echo get_option('sideroll_1')?>,d=<?php echo get_option('sideroll_2')?>;a.browser.msie&&6==a.browser.version&&!a.support.style||(e=a("#sidebar").width(),f=a("#sidebar .widget"),g=f.length,g>=(c>0)&&g>=(d>0)&&a(window).scroll(function(){var b=document.documentElement.scrollTop+document.body.scrollTop;b>f.eq(g-1).offset().top+f.eq(g-1).height()?0==a(".roller").length?(f.parent().append('<div class="roller"></div>'),f.eq(c-1).clone().appendTo(".roller"),c!==d&&f.eq(d-1).clone().appendTo(".roller"),a(".roller").css({position:"fixed",<?php $nav_close = get_option('nav_close');if ($nav_close == 'open'){echo 'top: 58,';}else{echo 'top: 5,';}?>zIndex:0,width:370,background:'#FFF'}),a(".roller").width(e)):a(".roller").fadeIn(300):a(".roller").fadeOut(300)}))})
</script>
<?php } ?>
</body></html>