<div id="navigator">
<ul>
 <li><a href="">首页</a></li>
 <li><a href="<?php echo DOCUMENT_ROOT;?>messageboard.php">留言</a></li>
 <li><a href="<?php echo DOCUMENT_ROOT;?>chatroom.php">聊天室</a></li>
 <div id="profile">
   <?php 
     if (isset($_SESSION['username']) && !empty($_SESSION['username']))
     {
        echo '你好,'.'<span class="color_red">'.$_SESSION['username'].'</span> ';
	    echo '&nbsp;&nbsp;<a href='.DOCUMENT_ROOT.'user/profile.php>个人中心</a>';
	    echo '&nbsp;&nbsp;<a href='.DOCUMENT_ROOT.'user/logout.php>退出</a>';
     }
     else
     {
        echo '<span class="color_red">您还未登录!</span>'.' '.'<a  onclick="login();return false;" href='.DOCUMENT_ROOT.'user/signin.php>登录</a> ';
        echo '<a  href='.DOCUMENT_ROOT.'user/signup.php>注册</a> ';
        echo '<a  href='.DOCUMENT_ROOT.'user/find_pwd.php>忘记密码</a> ';
     }
   ?>
 </div>
</ul>
</div>
