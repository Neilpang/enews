<div class="home-galleries no-margin-left">
  <div class="header">
    <div class="base">
      <h4>置顶文章</h4>
    </div>
  </div>
  <?php
$args = array(
	'posts_per_page' => 4,
	'post__in'  => get_option( 'sticky_posts' ),
	'ignore_sticky_posts' => 1
);
query_posts( $args ); while ( have_posts() ) : the_post();?>
  <div class="item">
    <figure> <div class="ih-item square effect7"><a href="<?php the_permalink(); ?>"> <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo hot_thumbnail_image(); ?>&h=173&w=125&zc=1" alt="<?php the_title(); ?>" class="thumbnail"/></div>
      </a></div> </figure>
    <p><a href="<?php the_permalink(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 28, '…'); ?></a></p>
  </div>
  <?php endwhile;wp_reset_query();?>
</div>
