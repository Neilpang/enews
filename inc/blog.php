<div class="row-fluid blog-posts">
  <?php 
		if( $paged && $paged > 1 ){
			printf('<div class="header"><h3>最新发布 第'.$paged.'页</h3></div>');
		}else{
			$top_close = get_option('top_close');
			if ($top_close == 'open') {
			include 'top.php';
			}
			printf('<div class="clearfix ie-sep"></div><div class="header"><h3>最新发布</h3></div>');
		}
		$ad2_close = get_option('ad2_close');if ($ad2_close == 'open')
		 printf('<div class="k_ad">'.get_option('ad2').'</div>');

		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
		    'caller_get_posts' => 1,
		    'paged' => $paged
		);
		query_posts($args);
		include 'excerpt.php'; 
	?>
</div>
