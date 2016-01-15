<?php get_header('page'); ?>

<div class="row-fluid">
  <div id="main" class="span8 single single-post image-preloader">
    <div class="row-fluid">
      <?php include('inc/location.php');?>
      <?php if(have_posts()) : while (have_posts()) : the_post();setPostViews(get_the_ID()); ?>
      <div class="head-section-content">
        <h1>
          <?php the_title(); ?>
        </h1>
        <p class="meta"> <i class="icon-user"></i>&nbsp;
          <?php the_author_posts_link(); ?>
          &nbsp;&nbsp;|&nbsp;&nbsp; <i class="icon-time"></i>&nbsp;
          <?php the_time('Y年n月j日') ?>
          &nbsp;&nbsp;|&nbsp;&nbsp; <i class="icon-list-alt"></i>
          <?php the_category(', ') ?>
          &nbsp;&nbsp;|&nbsp;&nbsp; <i class="icon-comment"></i>&nbsp;
          <?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?>
          &nbsp;&nbsp;|&nbsp;&nbsp; <i class="icon-eye-open"></i>&nbsp;<?php echo getPostViews(get_the_ID());?>
          <?php edit_post_link('[编辑]', '  ', '  '); ?>
        </p>
      </div>
      <?php
	 	 $ad4_close = get_option('ad4_close');
	 	 if ($ad4_close == 'open') {
	?>
      <div  class="k_ad"> <?php echo get_option('ad4');?> </div>
      <?php } ?>
      <div class="content">
        <?php the_content(); ?>
        <?php
	 	 $adtext_close = get_option('adtext_close');
	 	 if ($adtext_close == 'open') {
	?>
        <p class="asb-post-footer"><b>AD：</b><strong><a href="<?php echo get_option('adtext_link');?>" target="_blank"><?php echo get_option('adtext_title');?></a></strong></p>
        <?php } ?>
        <?php
	 	 $copyright_close = get_option('copyright_close');
	 	 if ($copyright_close == 'open') {
	?>
        <?php deel_copyright(); ?>
        <?php } ?>
      </div>
      <?php
	 	 $share_close = get_option('share_close');
	 	 if ($share_close == 'open') {
	?>
      <div class="rate-details">
        <div class="rate-overall">
          <div class="desc">
            <?php deel_share(); ?>
          </div>
          <!-- Overall -->
          <div class="rating">
            <div class="post-like"> <a href="javascript:;" data-action="ding" data-id="<?php the_ID(); ?>" class="favorite<?php if(isset($_COOKIE['bigfa_ding_'.$post->ID])) echo ' done';?>">喜欢 <span class="count">
              <?php if( get_post_meta($post->ID,'bigfa_ding',true) ){            
                    echo get_post_meta($post->ID,'bigfa_ding',true);
                 } else {
                    echo '0';
                 }?>
              </span> </a> </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <?php
	 	 $author_close = get_option('author_close');
	 	 if ($author_close == 'open') {
	?>
      <div class="sep-border"></div>
      <div class="post-author clearfix">
        <figure><?php echo enews_avatar($post->post_author,'140');?></figure>
        <div class="content">
          <h5>
            <?php the_author_posts_link(); ?>
          </h5>
          <p>
            <?php 
		 			if(get_the_author_meta("description") != ""){
		 				the_author_meta("description");
		 			}else{
		 				echo "这家伙很懒，什么都没写！";
		 			}
		 		?>
          </p>
        </div>
      </div>
      <?php } ?>
      <div class="sep-border no-margin-top"></div>
      <?php
	 	 $ad5_close = get_option('ad5_close');
	 	 if ($ad5_close == 'open') {
	?>
      <div  class="k_ad"> <?php echo get_option('ad5');?> </div>
      <?php } ?>
      <div id="comments">
        <?php comments_template(); ?>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
  <?php get_sidebar(); ?>
</div>
</div>
<script>
	window._bd_share_config = {
        common: {
            "bdText": "",
            "bdMini": "2",
            "bdMiniList": false,
            "bdPic": "",
            "bdStyle": "0"
        },
        share: [{
            bdCustomStyle: '<?php bloginfo('template_url');?>/css/share.css'
        }]
    }
    with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion=' + ~(-new Date() / 36e5)];
    </script>
<?php get_footer(); ?>
