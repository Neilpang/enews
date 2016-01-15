<div id="sidebar" class="span4 sidebar">

<?php
	 	 $juhetab_close = get_option('juhetab_close');
	 	 if ($juhetab_close == 'open') {
	?>
  <?php if (!dynamic_sidebar($sidebar)){
	include_once('inc/widget/hot.php');
}?>
<?php } ?>
  <?php 
if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_sitesidebar')) : endif; 

if (is_single()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_postsidebar')) : endif; 
}
else if (is_page()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_pagesidebar')) : endif; 
}
else if (is_home()){
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_sidebar')) : endif; 
}
else {
	if (function_exists('dynamic_sidebar') && dynamic_sidebar('widget_othersidebar')) : endif; 
}
?>
</div>
