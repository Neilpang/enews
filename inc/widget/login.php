<?php if (!(current_user_can('level_0'))){ ?>
<div class="widget clearfix">
  <div class="header">
    <h4>登陆</h4>
  </div>
  <div id="registration">
  <form id="RegisterUserForm" action="<?php echo get_option('home'); ?>/wp-login.php" method="post">
    <fieldset>
      <p>
        <label for="name">用户名：</label>
        <input name="log" id="log" type="text" class="text" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" />
      </p>
      <p>
        <label for="password">密码：</label>
        <input name="pwd" id="pwd" class="text" type="password" />
      </p>
      <p>
        <label for="rememberme"><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> 记住密码</label>
        <input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
        
      </p>
      <p>
      <a href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword" class="wangji btn btn-small">忘记密码</a>
        <input type="submit" name="submit" value="登录" class="button" />
      </p>
    </fieldset>
  </form>
</div>
</div>


<?php } else { ?>
<div class="widget clearfix">
  <div class="header">
    <h4>登陆信息</h4>
  </div>
  <div class="login_out clearfix">
      <figure><?php global $current_user;get_currentuserinfo();echo get_avatar( $current_user->user_email, 67); ?></figure>
      <div class="content">
       <h5><?php global $current_user, $display_name , $user_email; get_currentuserinfo(); echo '您已登录: ' . $current_user->display_name . "\n";?></h5>
       <p><a href="<?php echo site_url('/wp-admin'); ?>" target="_blank">后台管理</a>   <a href="<?php echo wp_logout_url( get_bloginfo('url') ); ?>" title="">退出登录</a></p>
      </div>
     </div>
</div>


<?php }?>