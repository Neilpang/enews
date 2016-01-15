<div id="q">
	
	<div class="qr">
		<p class="qp">最新</p>
		<div class="qr_l">
			<ul>
				<?php 
					$newposts = get_posts('numberposts=4');
					foreach($newposts as $post) : setup_postdata( $post );
				?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><img alt="<?php the_title_attribute(); ?>" class="enews" src="<?php echo hot_thumbnail_image() ?>" /></a><p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p></li>
				<?php endforeach;wp_reset_postdata(); ?>
			</ul>
		</div>
		<div class="qr_r">
			<ul>
				<?php 
					$new1posts = get_posts('numberposts=9&offset=4');
					foreach($new1posts as $post) : setup_postdata( $post );
				?>
				<li><a class="to" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
				<?php endforeach;wp_reset_postdata(); ?>
			</ul>
		</div>
	</div>
	<div class="sep-border"></div>
</div>