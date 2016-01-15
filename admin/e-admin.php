<?php 
    //防止直接加载此文件
    if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');
    //增加主题设置css js
    add_action('admin_init', 'enews_init');
    function enews_init() {
	if (isset($_GET['page']) && $_GET['page'] == 'e-admin.php') {
		$dir = get_bloginfo('template_directory');
		wp_enqueue_script('adminjquery', $dir . '/admin/js/jquery-1.7.2.min.js', false, '1.0.0', false);
		wp_enqueue_script('slides', $dir . '/admin/js/jquery.slide.js', false, '1.0.0', false);
		wp_enqueue_style('css', $dir . '/admin/css/admin.css', false, '1.0.0', 'screen');
		wp_enqueue_script('thickbox');   
        wp_enqueue_style('thickbox');
		wp_enqueue_script('admin', $dir . '/admin/js/admin.js', false, '1.0.0', false);
	}
    }
	//增加后台主题设置
    add_action('admin_menu', 'enews_function'); 
	$select=array('ad1_close','ad2_close','ad3_close','ad4_close','ad5_close','ad6_close','ad7_close','ad8_close','adtext_close','top_close','sign_close','sign','ad1','ad2','ad3','ad4','ad5','ad6','ad7','close','ad8','adtext_title','adtext_link','logo','statement','category','new','display_model','enews_description','enews_keywords','copy','icp','tongji','share_close','copyright_close','foot_link','author_close','footcode','csscode','headcode','foot_close','slide_close','juhetab_close','nav_close','qq_close','sina_close','tqq_close','wechat_close','socialqq','socialsina','socialtqq','wechat','wechat_qr','snow','snow_min','snow_max','snow_color','snow_newOn','single_fontsize','smtp','smtp_from','smtp_fromname','smtp_host','smtp_port','smtp_secure','smtp_username','smtp_password','sideroll_1','sideroll_2','sidebar_close','foot_links_s',
    't_appkey_tqq',
    't_appkey_tsina',
    't_appkey_t163',
    't_appkey_tsohu',
	);
    foreach($select as $sel){
     if( get_option($sel) == '' ){   
     switch($sel){
      case 'ad1_close':
	  case 'ad2_close':
	  case 'ad3_close':
      case 'ad4_close':
	  case 'ad5_close':
	  case 'ad6_close':
	  case 'ad7_close':
	  case 'ad8_close':
	  case 'adtext_close':
	  case 'top_close':
	  case 'sign_close':
	  case 'share_close':
	  case 'copyright_close':
	  case 'author_close':
	  case 'foot_close':
	  case 'slide_close':
	  case 'juhetab_close':
	  case 'nav_close':
	  case 'qq_close':
	  case 'sina_close':
	  case 'tqq_close':
	  case 'wechat_close':
	  case 'snow':
	  case 'sidebar_close':
      case 'close':
        $option = 'open';   
	    break;
      case 'ad1':
        $option = '<img alt="ad" src="'.get_bloginfo('template_directory').'/images/ads/728x90.png"/>';   
	    break;
	  case 'ad2':
	  case 'ad3':
	  case 'ad4':
	  case 'ad5':
	  case 'ad6':
	  case 'ad7':
	  case 'ad8':
        $option = '<img alt="ad" src="'.get_bloginfo('template_directory').'/images/ads/770x90.png"/>';
	    break;
	  case 'logo':
        $option = get_bloginfo('template_directory').'/images/logo.png';
	    break;
	  case 'statement':
        $option = '本主题基于MIT开源协议免费开放使用，作者（水冷眸）仅保留著作版权。使用本主题可进行任意形式修改，但请保留作者版权。';
	    break;
	  case 'copy':
        $option = ' 基于 <a href="https://cn.wordpress.org/" target="_blank" rel="nofollow">WordPress</a> & <a href="http://www.16898.pw"  title="水冷眸博客">水冷眸</a>&nbsp;<a href="http://www.16898.pw/go/aliyun.html" target="_blank" rel="nofollow"  title="运行在阿里云"><img src="http://deli8.qiniudn.com/aliyun.png"  alt="运行在阿里云" /></a>';
	    break;
	  case 'sign':
        $option = ' 这里填写您所要发布的公告消息，可在后台主题设置中修改，请注意最大宽度。超出宽度自动隐藏';
	    break;
	  case 'icp':
	    $option = '网站备案中';
	    break;
	  case 'single_fontsize':
	     $option='14';
		 break;
	  case 'tongji':
	    $option = '站长统计';
	    break;
	  case 'adtext_title':$option ='水冷眸自用主题《HO2-eye》即将发布！'; break;
	  case 'foot_link':
	    $option = '<li><a href="http://www.16898.pw">水冷眸博客</a></li>
       <li><a href="http://www.16898.in">五风博客</a></li>
       <li><a href="http://www.coolwx.net">酷游网单</a></li>';
	    break;
	  case 'category':
	  	$option = '1';
	    break;
	  case 'new':
        $option = array(
           '0' => '幻灯片1标题',
           '1' => '幻灯片1描述,你可以输入相关描述内容。',
           '2' => 'http://www.enews.net',
           '3' => get_bloginfo('template_directory').'/images/content/1.jpg',
           '4' => '幻灯片2标题',
           '5' => '幻灯片2描述,你可以输入相关描述内容。',
           '6' => 'http://www.enews.net',
           '7' => get_bloginfo('template_directory').'/images/content/2.jpg',
           '8' => '幻灯片3标题',
           '9' => '幻灯片3描述,你可以输入相关描述内容。',
           '10' => 'http://www.enews.net',
           '11' => get_bloginfo('template_directory').'/images/content/3.jpg',
           '12' => '幻灯片4标题',
           '13' => '幻灯片4描述,你可以输入相关描述内容。',
           '14' => 'http://www.enews.net',
           '15' => get_bloginfo('template_directory').'/images/content/4.jpg',
        );
	    break;
	  case 'sideroll_1': $option ='1'; break;
	  case 'sideroll_2': $option ='2'; break;
	  case 'snow_min': $option = '10'; break;
	  case 'snow_max': $option = '20'; break;
	  case 'snow_newOn': $option = '300'; break;
	  case 'snow_color': $option = 'c6eafb'; break;
	  case 'display_model':
	    $option = array(
           '0' => 'blog'
	    );
	    break;
	  case 'enews_description':
	  case 'enews_keywords':
	  case 't_appkey_tqq':
	  case 't_appkey_tsina':
	  case 't_appkey_t163':
	  case 't_appkey_tsohu':
	  case 'footcode':
	  case 'csscode':
	  case 'headcode':
	  case 'adtext_link':
	  case 'socialqq':
	  case 'socialsina':
	  case 'socialtqq':
	  case 'wechat':
	  case 'wechat_qr':
	  case 'smtp_from':
	  case 'smtp_fromname':
	  case 'smtp_host':
	  case 'smtp_port':
	  case 'smtp_secure':
	  case 'smtp_username':
	  case 'smtp_password':
	  case 'foot_links_s':
	    $option = '';
	    break;
	 }
	 update_option($sel, $option);
	 }
	}
    if(isset($_POST['option_save'])){  
		foreach($select as $sel){
        if($sel=="new" || $sel=="display_model" || $sel=="tg"){
		  $option = $_POST[$sel];
		}else{
          $option = stripslashes($_POST[$sel]); 
		}
        update_option($sel, $option);
		}
    }
    function enews_function(){   
        add_theme_page( 'Enews主题设置', 'Enews主题设置', 'edit_themes',basename(__FILE__), 'content_function');   
    }   
    function content_function(){?>
    <form method="post" name="enews_form" id="enews_form">
    <div class="main">
    	<div class="cats">
			<table cellspacing="0" cellpadding="0">
				<tr><td class="w50">ID</td><td class="w150">分类名称</td></tr>
				<?php 
					$categories = get_terms( array('category'), 'orderby=count&hide_empty=0' );
					foreach ($categories as $pcats) {
						echo "<tr><td class='w50'>{$pcats->term_id}</td><td class='w150'>{$pcats->name}</td></tr>";
					}
				?>
			</table>
		</div>
	 	<div class="h">
	  		<div class="hl">
	   			<h2>Enews主题设置</h2>
	  		</div>
		  	<div class="hr">
		   		<a href="http://www.16898.pw/enews" target="_blank">+ 技术支持</a>
		  	</div>
	 	</div>
	<div class="n">
	   <div class="hd">
		<ul class="l">
		 <li>常规设置</li>
         <li>其它设置</li>
         <li>广告设置</li>
         <li>幻灯设置</li>
		 <li>SEO设置</li>
         <li>社交</li>
		 <li>自定义代码</li>
         <li>SMTP发信设置</li>
         <li>节日特效</li>
		</ul>
	   </div>
	    <div class="bd">
			<ul class="infoList">
			  <p class="ad">
				  <i>首页显示模式</i>
				  <?php $display = get_option('display_model');?>
				  <label style="margin-right:100px;">Blog模式 <input type='radio' <?php if($display['0']=='blog'){ echo 'checked="true"';}?> name='display_model[]' value='blog' /></label> 
				  <label>CMS模式 <input type='radio' <?php if($display['0']=='cms'){echo 'checked="true"';}?> name='display_model[]' value='cms' /></label>
			  </p>
			  <p class="ad">
		          <i>头部LOGO</i>
				  <textarea name="logo"/><?php echo get_option('logo'); ?></textarea>
				  <input type="button" name="upload_button" value="图片上传" class="upbottom"/>
				  <span class="asj">无硬性限制，推荐宽度不超过400，高度不超过90。</span>
			  </p>   
			     
			  	<p class="ad cat">
		          	<i>首页栏目显示（CMS模式）</i>
				  	<textarea class="w590" name="category"/><?php echo get_option('category'); ?></textarea>
				  	<span class="asj">输入分类的ID，多个ID请用英文逗号（,）分隔。</span>
			  	</p>
                
        <p class="ad">
		          <i>置顶文章设置（Blog模式）</i>
                  <?php $top_close = get_option('top_close'); ?>
				  <span class="topclose">
				  	  是否开启博客页面置顶列表：
					  <select name="top_close">
						  <option value ="close" <?php selected( $top_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $top_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <span class="topsj">调用4篇置顶文章，超过4篇调用最新发布的。<br>开启前请确认你站点已经设置了置顶文章</span>
			  </p>
			  <p class="ad">
		          <i>导航下公告栏（全站可见）</i>
                  <?php $sign_close = get_option('sign_close'); ?>
				  <span class="topclose">
				  	  是否开启导航下公告栏：
					  <select name="sign_close">
						  <option value ="close" <?php selected( $sign_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $sign_close, open ); ?>>开启</option>
					  </select>
				  </span>
                  <textarea class="w590" name="sign"/><?php echo get_option('sign'); ?></textarea>
				  <span class="asj">此处填写公告内容，支持html代码。</span>
			  </p>
			  <p class="ad">
		          <i>侧栏聚合文章TAB显示</i>
                  <?php $juhetab_close = get_option('juhetab_close'); ?>
				  <span class="topclose">
				  	  是否开启侧栏聚合TAB显示：
					  <select name="juhetab_close">
						  <option value ="close" <?php selected( $juhetab_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $juhetab_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <span class="topsj">该聚合文章TAB显示包含最新文章，随机文章，热门文章三个栏目。开启之后全站显示。</span>
			  </p>
              
			  <p class="ad cat">
				  <i>ICP备案号</i>
				  <input type="text" value="<?php echo get_option('icp')?>" name="icp">
                  <span>如无备案号可以直接留空！</span>
			  </p>
              <p class="ad cat">
				  <i>文章正文字体大小</i>
				  <input type="text" value="<?php echo get_option('single_fontsize')?>" name="single_fontsize">
                  <span>文章正文的默认字体大小，直接填写数字即可</span>
			  </p>
              
              <p class="ad">
				  <i>页脚设置</i>
				  <textarea class="foot_link" name="copy"/><?php echo get_option('copy'); ?></textarea>
			  </p>
              
			</ul>
            <!--分隔-->
            
            <ul class="infoList">
				<p class="ad">
				  <i>是否开启全站导航置顶滚动</i>
				  <?php $nav_close = get_option('nav_close'); ?>
				  <span class="topclose">
				  	  是否开启导航置顶滚动：
					  <select name="nav_close">
						  <option value ="close" <?php selected( $nav_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $nav_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <span class="topsj">导航置顶滚动，默认开启。</span>
			  </p>
              <p class="ad">
				  <i>是否开启侧栏滚动</i>
				  <?php $sidebar_close = get_option('sidebar_close'); ?>
				  <span class="topclose">
				  	  是否开启导航置顶滚动：
					  <select name="sidebar_close">
						  <option value ="close" <?php selected( $sidebar_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $sidebar_close, open ); ?>>开启</option>
					  </select>

				  </span>

				  <span class="topsj">侧栏跟随滚动，默认开启。请在下面设置你想要跟随滚动的侧栏。</span>
                  
			  </p>
              <p class="ad cat">
				  <i>设定跟随滚动的侧栏</i>
				  <label class="d_number">
                第
                <input class="d_num " name="sideroll_1" id="sideroll_1" type="number" value="<?php echo get_option('sideroll_1'); ?>"> 个模块
            </label>
<span class="topsj" style="float:right;">此处设置你想要跟随滚动的侧栏模块；请注意你整站每个页面所拥有的模块数量，请不要超出模块数量设置！</span><br />
            <label class="d_number">
                第
                <input class="d_num " name="sideroll_2" id="sideroll_2" type="number" value="<?php echo get_option('sideroll_2'); ?>"> 个模块
            </label>
                  
			  </p>
                <p class="ad">
				  <i>文章页是否显示版权信息</i>
				  <?php $copyright_close = get_option('copyright_close'); ?>
				  <span class="topclose">
				  	  是否开启文章页面的版权信息：
					  <select name="copyright_close">
						  <option value ="close" <?php selected( $copyright_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $copyright_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <span class="topsj">文章页显示版权声明，默认开启</span>
			  </p>
              <p class="ad">
		          <i>文章页是否显示百度分享</i>
                  <?php $share_close = get_option('share_close'); ?>
				  <span class="topclose">
				  	  是否开启文章页面的百度分享：
					  <select name="share_close">
						  <option value ="close" <?php selected( $share_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $share_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <span class="topsj">文章页显示百度分享，默认开启</span>
			  </p>
              <p class="ad cat">
				  <i>百度分享 Appkey</i>
				  腾讯微博：<input name="t_appkey_tqq" type="text" value="<?php echo get_option('t_appkey_tqq')?>" class="m11">
            新浪微博：<input name="t_appkey_tsina" type="text" value="<?php echo get_option('t_appkey_tsina')?>" class="m11">
            网易微博：<input name="t_appkey_t163" type="text" value="<?php echo get_option('t_appkey_t163')?>" class="m11">
            搜狐微博：<input name="t_appkey_tsohu" type="text" value="<?php echo get_option('t_appkey_tsohu')?>" class="m11">
                  <span>Appkey 获取方式：需要自行去各微博开放平台创建分享应用获取</span>
			  </p>
              <p class="ad">
		          <i>文章页是否显示作者信息</i>
                  <?php $author_close = get_option('author_close'); ?>
				  <span class="topclose">
				  	  是否开启文章页面的作者信息：
					  <select name="author_close">
						  <option value ="close" <?php selected( $author_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $author_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <span class="topsj">文章页显示作者信息，默认开启</span>
			  </p>
              <p class="ad">
		          <i>全站页脚</i>
                  <?php $foot_close = get_option('foot_close'); ?>
				  <span class="topclose">
				  	  是否开启全站页脚：
					  <select name="foot_close">
						  <option value ="close" <?php selected( $foot_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $foot_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <span class="topsj">此设置项包含一个页脚声明，一个友链展示，默认开启。</span>
			  </p>
              <p class="ad">
		          <i>页脚声明</i>
				  <textarea name="statement"/><?php echo get_option('statement'); ?></textarea>
				  <span class="asj">无尺寸限制，自行规范</span>
			  </p>
              <p class="ad">
		          <i>申请友链链接设置</i>
				  <textarea name="foot_links_s"/><?php echo get_option('foot_links_s'); ?></textarea>
				  <span class="adsj">直接填写链接，可以是你用页面建立友链申请页面，也可以是你的邮我地址，也可以是你的QQ临时会话地址，默认新窗口打开！</span>
			  </p>
				<p class="ad">
				  <i>全站页脚友情链接</i>
				  <textarea class="foot_link" name="foot_link"/><?php echo get_option('foot_link'); ?></textarea>   
				  <span class="flink">友链格式参考：&lt;li&gt&lt;a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" target="_blank"&gt;<?php bloginfo('name'); ?>&lt;/a&gt;&lt;/li&gt;</span>
			  </p>
			</ul>
            
            
            <ul class="infoList">
	          <p class="ad">
		          <i>文章/页面正文下文字广告</i>
                  <?php $adtext_close = get_option('adtext_close'); ?>
				  <span class="topclose">
				  	  是否开启文章/页面正文下文字广告：
					  <select name="adtext_close">
						  <option value ="close" <?php selected( $adtext_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $adtext_close, open ); ?>>开启</option>
					  </select>
				  </span><br/>
                  <textarea name="adtext_title"/><?php echo get_option('adtext_title'); ?></textarea>
				  <span class="asj">此处填写标题</span>
                  <textarea name="adtext_link"/><?php echo get_option('adtext_link'); ?></textarea>
				  <span class="asj">此处填写跳转链接，默认新窗口打开。</span>
			  </p>
              <p class="ad">
		          <i>AD1全站Banner广告设置</i>
                  <?php $ad1_close = get_option('ad1_close'); ?>
				  <span class="adclose">
				  	  是否开启广告：
					  <select name="ad1_close">
						  <option value ="close" <?php selected( $ad1_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $ad1_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <textarea name="ad1"/><?php echo get_option('ad1'); ?></textarea>
				  
				  <span class="adsj">尺寸 728px(宽)*90px(高)</span>
			  </p>   
			  <p class="ad">
				  <i>AD2列表顶部（Blog模式以及列表页）</i>
                  <?php $ad2_close = get_option('ad2_close'); ?>
				  <span class="adclose">
				  	  是否开启广告：
					  <select name="ad2_close">
						  <option value ="close" <?php selected( $ad2_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $ad2_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <textarea name="ad2"/><?php echo get_option('ad2'); ?></textarea>  
				   
				  <span class="adsj">尺寸：最大宽度770px，高度可自行规范。已默认设置居中！</span>
			  </p>
			  <p class="ad">
				  <i>AD3列表底部（Blog模式以及列表页）</i>
				  <?php $ad3_close = get_option('ad3_close'); ?>
				  <span class="adclose">
				  	  是否开启广告：
					  <select name="ad3_close">
						  <option value ="close" <?php selected( $ad3_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $ad3_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <textarea name="ad3"/><?php echo get_option('ad3'); ?></textarea>   
				   
				  <span class="adsj">尺寸：最大宽度770px，高度可自行规范。已默认设置居中！</span>
			  </p>
			  <p class="ad">
				  <i>AD4文章页正文前</i>
				  <?php $ad4_close = get_option('ad4_close'); ?>
				  <span class="adclose">
				  	  是否开启广告：
					  <select name="ad4_close">
						  <option value ="close" <?php selected( $ad4_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $ad4_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <textarea name="ad4"/><?php echo get_option('ad4'); ?></textarea>   
				   
				  <span class="adsj">尺寸：最大宽度770px，高度可自行规范。已默认设置居中！</span>
			  </p>
			  <p class="ad">
				  <i>AD5文章页评论前</i>
                  <?php $ad5_close = get_option('ad5_close'); ?>
				  <span class="adclose">
				  	  是否开启广告：
					  <select name="ad5_close">
						  <option value ="close" <?php selected( $ad5_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $ad5_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <textarea name="ad5"/><?php echo get_option('ad5'); ?></textarea>   
				   
				  <span class="adsj">尺寸：最大宽度770px，高度可自行规范。已默认设置居中！</span>
			  </p>
			  <p class="ad">
				  <i>AD6CMS模式</i>
                  <?php $ad6_close = get_option('ad6_close'); ?>
				  <span class="adclose">
				  	  是否开启广告：
					  <select name="ad6_close">
						  <option value ="close" <?php selected( $ad6_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $ad6_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <textarea name="ad6"/><?php echo get_option('ad6'); ?></textarea>   
				   
				  <span class="adsj">尺寸：最大宽度770px，高度可自行规范。已默认设置居中！此广告位在首页设置为CMS模式下才启用，添加在列表框的中间。</span>
			  </p>
			  <p class="ad">
				  <i>AD7CMS模式</i>
                  <?php $ad7_close = get_option('ad7_close'); ?>
				  <span class="adclose">
				  	  是否开启广告：
					  <select name="ad7_close">
						  <option value ="close" <?php selected( $ad7_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $ad7_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <textarea name="ad7"/><?php echo get_option('ad7'); ?></textarea>   
				   
				  <span class="adsj">尺寸：最大宽度770px，高度可自行规范。已默认设置居中！此广告位在首页设置为CMS模式下才启用，添加在列表框的中间。</span>
			  </p>
			  <p class="ad">
				  <i>AD8CMS模式</i>
                  <?php $ad8_close = get_option('ad8_close'); ?>
				  <span class="adclose">
				  	  是否开启广告：
					  <select name="ad8_close">
						  <option value ="close" <?php selected( $ad8_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $ad8_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <textarea name="ad8"/><?php echo get_option('ad8'); ?></textarea>   
				   
				  <span class="adsj">尺寸：最大宽度770px，高度可自行规范。已默认设置居中！此广告位在首页设置为CMS模式下才启用，添加在列表框的中间。</span>
			  </p>
			</ul>
			<ul class="infoList">
			  <p class="ad">
		          <i>幻灯首页幻灯显示</i>
                  <?php $slide_close = get_option('slide_close'); ?>
				  <span class="topclose">
				  	  是否开启首页幻灯显示：
					  <select name="slide_close">
						  <option value ="close" <?php selected( $slide_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $slide_close, open ); ?>>开启</option>
					  </select>
				  </span>
				  <span class="topsj">首页幻灯显示控制，默认开启，如不需要可关闭。</span>
			  </p>
        <p class="ad">
				  <i>幻灯片设置</i>
				  <?php
					$a='0';$b='1';$c='2';$d='3';
					$new = get_option('new');
					for ($i=1; $i <=4 ; $i++) {
				  ?>
				  <span class="hdp">
				  <b>标题：</b><input type="text" value="<?php echo $new[$a]?>" name="new[]" class="m10">
				  <b>描述：</b><input type="text" value="<?php echo $new[$b]?>" name="new[]" class="m10"><br/>
				  <b>链接：</b><input type="text" value="<?php echo $new[$c]?>" name="new[]">
				  <b>图片：</b><input type="text" value="<?php echo $new[$d]?>" name="new[]" class="hdt<?php echo $i?>">
				  </span>
				  <input type="button" name="upload_button" value="图片上传" class="upbottom<?php echo $i?>"/>
				  
				  <?php $a+=4;$b+=4;$c+=4;$d+=4;}?>
                  <span class="hdsj">幻灯片<br/>推荐450*240，无硬性要求。保证长宽比例即可</span>
			  </p>
			</ul>
			<ul class="infoList">
			 <p class="ad">
				  <i>SEO描述</i>
				  <textarea class="w760" name="enews_description"/><?php echo get_option('enews_description'); ?></textarea>
			 </p>
			 <p class="ad">
				  <i>SEO关键词</i>
				  <textarea class="w760" name="enews_keywords"/><?php echo get_option('enews_keywords'); ?></textarea>
			 </p>
             
			</ul>
            <ul class="infoList">
				<p class="ad">
		          <i>腾讯QQ</i>
                  <?php $qq_close = get_option('qq_close'); ?>
				  <span class="topclose">
				  	  顶部搜索前腾讯QQ：
					  <select name="qq_close">
						  <option value ="close" <?php selected( $qq_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $qq_close, open ); ?>>开启</option>
					  </select>
				  </span>
                  <textarea class="w590" name="socialqq"/><?php echo get_option('socialqq'); ?></textarea>
				  <span class="flink">此处填写QQ的代码。如：http://wpa.qq.com/msgrd?v=3&amp;uin=<span style="color:#F00">你的QQ号码</span>&amp;site=qq&amp;menu=yes</span>
			  </p>
              <p class="ad">
		          <i>新浪微博</i>
                  <?php $sina_close = get_option('sina_close'); ?>
				  <span class="topclose">
				  	  顶部搜索前新浪微博：
					  <select name="sina_close">
						  <option value ="close" <?php selected( $sina_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $sina_close, open ); ?>>开启</option>
					  </select>
				  </span>
                  <textarea class="w590" name="socialsina"/><?php echo get_option('socialsina'); ?></textarea>
				  <span class="flink">此处填写新浪微博地址。</span>
			  </p>
              <p class="ad">
		          <i>腾讯微博</i>
                  <?php $tqq_close = get_option('tqq_close'); ?>
				  <span class="topclose">
				  	  顶部搜索前腾讯微博：
					  <select name="tqq_close">
						  <option value ="close" <?php selected( $tqq_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $tqq_close, open ); ?>>开启</option>
					  </select>
				  </span>
                  <textarea class="w590" name="socialtqq"/><?php echo get_option('socialtqq'); ?></textarea>
				  <span class="flink">此处填写腾讯微博地址。</span>
			  </p>
              <p class="ad">
		          <i>微信</i>
                  <?php $wechat_close = get_option('wechat_close'); ?>
				  <span class="topclose">
				  	  顶部搜索前微信：
					  <select name="wechat_close">
						  <option value ="close" <?php selected( $wechat_close, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $wechat_close, open ); ?>>开启</option>
					  </select>
				  </span>
                  <textarea class="w590" name="wechat"/><?php echo get_option('wechat'); ?></textarea>
				  <span class="flink">此处填写微信号。</span>
			  </p>
                <p class="ad">
		          <i>微信二维码</i>
				  <textarea name="wechat_qr"/><?php echo get_option('wechat_qr'); ?></textarea>
				  <input type="button" name="upload_button" value="图片上传" class="upbottom"/>
				  <span class="asj">微信的二维码，直接填写图片链接或者是上传图片，推荐尺寸不超过250px</span>
			  </p>

			</ul>
			<ul class="infoList">
				<p class="ad">
				  <i>自定义CSS样式</i>
				  <textarea class="foot_link" name="csscode"/><?php echo get_option('csscode'); ?></textarea>   
				  <span class="flink">位于&lt;/head&gt;之前，直接写样式代码，不用添加&lt;style&gt;标签</span>
			  </p>
                <p class="ad">
				  <i>自定义头部代码</i>
				  <textarea class="foot_link" name="headcode"/><?php echo get_option('headcode'); ?></textarea>   
				  <span class="flink">位于&lt;/head&gt;之前，这部分代码是在主要内容显示之前可用作广告联盟&lt;meta&gt;标签认证以及填写各类广告管家的一段代码</span>
			  </p>
              <p class="ad">
				  <i>自定义底部代码</i>
				  <textarea class="foot_link" name="footcode"/><?php echo get_option('footcode'); ?></textarea>   
				  <span class="flink">位于&lt;/body&gt;之前，这部分代码是在主要内容加载完毕加载，通常是JS代码</span>
			  </p>
              <p class="ad">
				  <i>统计代码</i>
				  <textarea class="foot_link" name="tongji"/><?php echo get_option('tongji'); ?></textarea>   
				  <span class="flink">推荐站长统计、百度统计等统计代码</span>
			  </p>
			</ul>
            <ul class="infoList">
				<p class="ad">
		          <i>SMTP发信开关</i>
                  <?php $smtp = get_option('smtp'); ?>
				  <span class="topclose">
				  	  SMTP发信开启关闭：
					  <select name="smtp">
						  <option value ="close" <?php selected( $smtp, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $smtp, open ); ?>>开启</option>
					  </select>
				  </span>
                  
				  <span class="flink">设置开启关闭SMTP发信，如空间不支持mail函数发送，可开启此设置项，并且填写以下设置。</span>
			  </p>
              <p class="ad cat">
				  <i>发信人地址</i>
				  <input type="text" value="<?php echo get_option('smtp_from')?>" name="smtp_from">
                  
			  </p>
              <p class="ad cat">
				  <i>发信人昵称</i>
				  <input type="text" value="<?php echo get_option('smtp_fromname')?>" name="smtp_fromname">
                  
			  </p>
              <p class="ad cat">
				  <i>SMTP服务器地址</i>
				  <input type="text" value="<?php echo get_option('smtp_host')?>" name="smtp_host">
                  
			  </p>
              <p class="ad cat">
				  <i>SMTP端口</i>
				  <input type="text" value="<?php echo get_option('smtp_port')?>" name="smtp_port">
                  <span>SMTP邮件发送端口, 常用端口有：25、465、587, 具体联系邮件服务商</span>
			  </p>
              <p class="ad cat">
				  <i>SMTP加密方式</i>
				  <input type="text" value="<?php echo get_option('smtp_secure')?>" name="smtp_secure">
                  <span>SSL/TLS, 具体联系邮件服务商, 以免设置错误, 无法正常发送邮件</span>
			  </p>
              <p class="ad cat">
				  <i>邮箱帐号</i>
				  <input type="text" value="<?php echo get_option('smtp_username')?>" name="smtp_username">
                  
			  </p>
              <p class="ad cat">
				  <i>邮箱密码</i>
				  <input type="text" value="<?php echo get_option('smtp_password')?>" name="smtp_password">
                  
			  </p>

			</ul>
            <ul class="infoList">
				<p class="ad">
		          <i>雪花特效</i>
                  <?php $snow = get_option('snow'); ?>
				  <span class="topclose">
				  	  雪花特效开启关闭：
					  <select name="snow">
						  <option value ="close" <?php selected( $snow, close ); ?>>关闭</option>
						  <option value ="open" <?php selected( $snow, open ); ?>>开启</option>
					  </select>
				  </span>
                  
				  <span class="flink">设置开启关闭雪花特效。</span>
			  </p>
              <p class="ad">
		          <i>雪花的最小尺寸</i>
                  <input type="text" value="<?php echo get_option('snow_min')?>" name="snow_min">
				  <span>雪花的最小尺寸,直接填写数值。</span>
			  </p>
              <p class="ad">
		          <i>雪花的最大尺寸</i>
                  <input type="text" value="<?php echo get_option('snow_max')?>" name="snow_max">
				  <span>雪花的最大尺寸，直接填写数值</span>
			  </p>
              <p class="ad">
		          <i>雪花出现的频率</i>
                  <input type="text" value="<?php echo get_option('snow_newOn')?>" name="snow_newOn">
				  <span>雪花出现的频率，这个数值越小雪花越多，建议不要太小，以免浏览器负荷太高！</span>
			  </p>
              <p class="ad">
		          <i>雪花的颜色</i>
                 <input type="text" value="<?php echo get_option('snow_color')?>" name="snow_color">
				  <span>此处可以定义雪花颜色，若要白色可以改为#FFFFFF！毋须写#号。</span>
			  </p>
                

			</ul>
	    </div>
	 </div>
	</div>
	<p class="submit">   
	    <input class="btn btn-large" type="submit" name="option_save" value="保存设置" /> 
	</p>
	</form>
	<script type="text/javascript">
		jQuery(".n").slide({trigger:"click"});
	</script>
    <?php }?>