<?php get_header();?>

<div class="row-fluid">
  <div id="main" class="span8 image-preloader search-page">
    <?php include('inc/location.php');?>
    <h2>关于 "<i><?php echo $s; ?></i>" 的搜索结果</h2>
    <form name="form-search" method="post" action="<?php bloginfo('home'); ?>">
      <input type="text" name="s" id="s" value="<?php echo $s; ?>" />
      <input type="submit" name="submit" value="搜索" />
    </form>
    <p class="search-info">
      <?php
	 global $wp_query;
	 echo '共为您找到 <i>' . $wp_query->found_posts . '</i> 篇相关文章';
	 ?>
    </p>
    <div class="sep-border margin-bottom20"></div>
    <div class="row-fluid blog-posts">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); 
	  $title = get_the_title();
    $content = mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 290,"...");
    $keys = explode(" ",$s);
    $title = preg_replace('/('.implode('|', $keys) .')/iu','<span style="font-weight:700;background:#ffff00;">\0</span>',$title);
    $content = preg_replace('/('.implode('|', $keys) .')/iu','<span style="font-weight:700;background:#ffff00;">\0</span>',$content);
	?>
      <div class="post clearfix">
        <figure> <div class="ih-item square effect7"><a href="<?php the_permalink(); ?>"><div class="img"><img src="<?php echo get_template_directory_uri(); ?>/timthumb.php?src=<?php echo catch_first_image(); ?>&h=190&w=185&zc=1" alt="<?php the_title(); ?>" class="thumbnail"/></div></a></div> </figure>
        <div class="content">
          <h2><a href="<?php the_permalink() ?>" title="详细阅读 <?php the_title_attribute(); ?>">
            <?php echo $title; ?>
            </a></h2>
          <div class="meta"> <span class="pull-left"> <i class="icon-user"></i>
            <?php the_author_posts_link(); ?>
            - <i class="icon-time"></i>
            <?php the_time('Y年n月j日') ?>
            - <i class="icon-list"></i>
            <?php the_category(', ') ?>
           <?php    
			if ( comments_open() || '0' != get_comments_number() )
			comments_popup_link(' - <i class="icon-comment"></i> 0 条评论', ' - <i class="icon-comment"></i> 1 条评论', ' - <i class="icon-comment"></i> % 条评论', '');
			?>
            - <i class="icon-eye-open"></i><?php echo getPostViews(get_the_ID());?>浏览</span> <span class="pull-right"><a href="<?php the_permalink(); ?>">阅读更多...</a></span> </div>
          <p><?php echo $content;?></p>
          <?php if(the_tags()){?>
          <div class="meta"> <span class="info-tag-icon">
            <?php the_tags('标签：', ', ', ''); ?>
            </span> </div>
          <?php }?>
        </div>
        <div class="sep-border"></div>
      </div>
      <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
      <div class="clearfix ie-sep"></div>
      <div class="clearfix ie-sep"></div>
      <nav class="nav-pagination">
        <?php pagination($query_string); ?>
      </nav>
    </div>
  </div>
  <?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
